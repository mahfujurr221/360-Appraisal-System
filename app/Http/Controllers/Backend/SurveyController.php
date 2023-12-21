<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;
use App\Models\SurveyResponseDetails;
use App\Models\SurveySetup;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function surveyStart()
    {
        //survey_by_ids is a json field string in survey_setups table
        $survey = SurveySetup::join('survey_details', 'survey_setups.survey_detail_id', '=', 'survey_details.id')
            ->where('status', 'active')
            ->whereJsonContains('survey_by_ids', strval(auth()->user()->id))
            ->select('survey_setups.*', 'survey_details.title as title', 'survey_details.description as description')
            ->get();
        return view('backend.pages.survey.survey-start', compact('survey'));
    }
    // surveyEmployee
    public function surveyEmployee(string $id)
    {
        $surveySetupId = $id;
        $employees = SurveySetup::with('surveyFor')->where('status', 'active')->where('id', $surveySetupId)->get();
        $employees = $employees->pluck('surveyFor');
        return view('backend.pages.survey.survey-employee', compact('employees', 'surveySetupId'));
    }

    public function surveyQuestions(string $id, string $employee_id)
    {
        $employee = Employee::with('designation')->find($employee_id);
        $surveySetup = SurveySetup::join('survey_details', 'survey_setups.survey_detail_id', '=', 'survey_details.id')
            ->select('survey_setups.*', 'survey_details.title as title', 'survey_details.description as description')
            ->where('status', 'active')->find($id);
        return view('backend.pages.survey.survey-questions', compact('employee', 'surveySetup'));
    }

    public function surveySubmit(Request $request)
    {
        // return response()->json($request->all());
        $surveyResponse = SurveyResponse::where('survey_setup_id', $request->survey_setup_id)->where('employee_id', $request->employee_id)->first();
        if (!$surveyResponse) {
            $surveyResponse = new SurveyResponse();
        }
        $surveyResponse->survey_setup_id = $request->survey_setup_id;
        $surveyResponse->employee_id = $request->employee_id;
        $response_from_user_id = $surveyResponse->response_from_user_id;
        $response_from_user_id = json_decode($response_from_user_id);
        if ($response_from_user_id == null || !in_array(auth()->user()->id, $response_from_user_id)) {
            $response_from_user_id[] = auth()->user()->id;
        }
        $surveyResponse->response_from_user_id = json_encode($response_from_user_id);
        $surveyResponse->save();

        $points = 0;
        foreach ($request->questions as $question_no => $question) {
            $surveyResponseDetail = SurveyResponseDetails::where('survey_response_id', $surveyResponse->id)->where('survey_question_id', $question_no)->first();
            if (!$surveyResponseDetail)
                $surveyResponseDetail = new SurveyResponseDetails();
            $surveyResponseDetail->survey_response_id = $surveyResponse->id;
            $surveyResponseDetail->survey_question_id = $question_no;
            $surveyQuestion = SurveyQuestion::find($question_no);
            if ($question['answer'] == 'option1') {
                $surveyResponseDetail->option1++;
                $points += $surveyQuestion->point1;
            } elseif ($question['answer'] == 'option2') {
                $surveyResponseDetail->option2++;
                $points += $surveyQuestion->point2;
            } elseif ($question['answer'] == 'option3') {
                $surveyResponseDetail->option3++;
                $points += $surveyQuestion->point3;
            } elseif ($question['answer'] == 'option4') {
                $surveyResponseDetail->option4++;
                $points += $surveyQuestion->point4;
            }
            $surveyResponseDetail->save();
        }
        $surveyResponse->points += $points;
        $surveyResponse->save();

        toastr()->success('Survey Submitted Successfully');
        return redirect()->route('survey.start');
    }

    public function surveyReport(Request $request)
    {
        // return response()->json($request->all());
        if ($request->employee_id && $request->survey_detail_id) {
            $surveyResponses = SurveyResponse::with('employee', 'surveySetup.surveyDetails')
                ->join('survey_setups', 'survey_setups.id', '=', 'survey_responses.survey_setup_id')
                ->where('employee_id', $request->employee_id)
                ->where('survey_setups.survey_detail_id', $request->survey_detail_id)
                ->orderBy('points', 'desc')
                ->get();
        } elseif ($request->employee_id && !$request->survey_detail_id) {
            $surveyResponses = SurveyResponse::with('employee', 'surveySetup.surveyDetails')
                ->where('employee_id', $request->employee_id)
                ->orderBy('points', 'desc')
                ->get();
        } elseif (!$request->employee_id && $request->survey_detail_id) {
            $surveyResponses = SurveyResponse::with('employee', 'surveySetup.surveyDetails')
                ->join('survey_setups', 'survey_setups.id', '=', 'survey_responses.survey_setup_id')
                ->where('survey_setups.survey_detail_id', $request->survey_detail_id)
                ->orderBy('points', 'desc')
                ->get();
        } else {
            $surveyResponses = SurveyResponse::with('employee', 'surveySetup.surveyDetails')
                ->orderBy('points', 'desc')
                ->get();
        }
        return view('backend.pages.survey.survey-report', compact('surveyResponses'));
    }

    public function surveyReportDetails(string $id)
    {
        $surveyResponse = SurveyResponse::with('employee', 'surveySetup.surveyDetails', 'surveyResponseDetails.surveyQuestion')->find($id);
        // return response()->json($surveyResponse);       
        return view('backend.pages.survey.survey-report-details', compact('surveyResponse'));
    }
}
