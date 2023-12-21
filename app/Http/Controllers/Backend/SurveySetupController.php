<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\QuestionSet;
use App\Models\SurveyDetail;
use App\Models\SurveyQuestion;
use App\Models\SurveySetup;
use App\Models\User;
use Illuminate\Http\Request;

class SurveySetupController extends Controller
{
    public function index()
    {
        $surveySetups = SurveySetup::with('surveyFor', 'questionSet')->join('survey_details', 'survey_setups.survey_detail_id', '=', 'survey_details.id')->select('survey_setups.*', 'survey_details.title as title', 'survey_details.description as description')->get();
        // return response()->json($surveySetups);
        return view('backend.pages.survey-setup.index', compact('surveySetups'));
    }

    public function create()
    {
        $surveyDetails = SurveyDetail::all();
        $surveyQuestions = SurveyQuestion::all();
        $questionSets = QuestionSet::all();
        $employees = User::where('role_id', 3)->get();
        return view('backend.pages.survey-setup.create', compact('surveyQuestions', 'employees', 'questionSets', 'surveyDetails'));
    }

    public function store(Request $request)
    {
        $surveySetup = new SurveySetup();
        $surveySetup->survey_detail_id = $request->survey_detail_id;
        $surveySetup->survey_for_id = $request->survey_for_id;
        $survey_by_ids = $request->survey_by_ids;
        $key = array_search($request->survey_for_id, $survey_by_ids);
        if ($key)
            unset($survey_by_ids[$key]);
        $survey_by_ids = array_values($survey_by_ids);
        $surveySetup->survey_by_ids = json_encode($survey_by_ids);
        $surveySetup->question_set_id = $request->question_set_id;
        $questionSet = QuestionSet::find($request->question_set_id);
        $surveySetup->questions = json_encode($questionSet->surveyQuestion->pluck('id'));
        // $surveySetup->questions = json_encode($request->survey_question_id);
        $surveySetup->save();
        toastr()->success('Survey Question Deleted Successfully');
        return redirect('survey-setup');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $surveyDetails = SurveyDetail::all();
        $surveySetup = SurveySetup::find($id);
        $surveyQuestions = SurveyQuestion::all();
        $questionSets = QuestionSet::all();
        $employees = User::where('role_id', 3)->get();
        return view('backend.pages.survey-setup.edit', compact('surveySetup', 'surveyQuestions', 'employees', 'questionSets', 'surveyDetails'));
    }

    public function update(Request $request, string $id)
    {
        $surveySetup = SurveySetup::find($id);
        $surveySetup->survey_detail_id = $request->survey_detail_id;
        $surveySetup->survey_for_id = $request->survey_for_id;
        $survey_by_ids = $request->survey_by_ids;
        $key = array_search($request->survey_for_id, $survey_by_ids);
        if ($key)
            unset($survey_by_ids[$key]);
        $survey_by_ids = array_values($survey_by_ids);
        $surveySetup->survey_by_ids = json_encode($survey_by_ids);
        $surveySetup->question_set_id = $request->question_set_id;
        $questionSet = QuestionSet::find($request->question_set_id);
        $surveySetup->questions = json_encode($questionSet->surveyQuestion->pluck('id'));
        // $surveySetup->questions = json_encode($request->survey_question_id);
        $surveySetup->status = $request->status;
        $surveySetup->save();
        toastr()->success('Survey Question Updated Successfully');
        return redirect('survey-setup');
    }

    public function destroy(string $id)
    {
        $surveySetup = SurveySetup::find($id);
        $surveySetup->delete();
        toastr()->success('Survey Setup Deleted Successfully');
        return redirect('survey-setup');
    }
}
