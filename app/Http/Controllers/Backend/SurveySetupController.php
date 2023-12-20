<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SurveyQuestion;
use App\Models\SurveySetup;
use App\Models\User;
use Illuminate\Http\Request;

class SurveySetupController extends Controller
{
    public function index()
    {
        $surveySetups = SurveySetup::with('surveyFor')->get();
        return view('backend.pages.survey-setup.index', compact('surveySetups'));
    }

    public function create()
    {
        $surveyQuestions = SurveyQuestion::all();
        $employees = User::where('role_id', 3)->get();
        return view('backend.pages.survey-setup.create', compact('surveyQuestions', 'employees'));
    }

    public function store(Request $request)
    {
        $surveySetup = new SurveySetup();
        $surveySetup->title = $request->title;
        $surveySetup->survey_for_id = $request->survey_for_id;
        $survey_by_ids = $request->survey_by_ids;
        $key = array_search($request->survey_for_id, $survey_by_ids);
        unset($survey_by_ids[$key]);
        $survey_by_ids = array_values($survey_by_ids);
        $surveySetup->survey_by_ids = json_encode($survey_by_ids);
        $surveySetup->description = $request->description;
        $surveySetup->questions = json_encode($request->survey_question_id);
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
        $surveySetup = SurveySetup::find($id);
        $surveyQuestions = SurveyQuestion::all();
        $employees = User::where('role_id', 3)->get();
        return view('backend.pages.survey-setup.edit', compact('surveySetup', 'surveyQuestions', 'employees'));
    }

    public function update(Request $request, string $id)
    {
        $surveySetup = SurveySetup::find($id);
        $surveySetup->title = $request->title;
        $surveySetup->survey_for_id = $request->survey_for_id;
        $survey_by_ids = $request->survey_by_ids;
        $key = array_search($request->survey_for_id, $survey_by_ids);
        unset($survey_by_ids[$key]);
        $survey_by_ids = array_values($survey_by_ids);
        $surveySetup->survey_by_ids = json_encode($survey_by_ids);
        $surveySetup->description = $request->description;
        $surveySetup->questions = json_encode($request->survey_question_id);
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
