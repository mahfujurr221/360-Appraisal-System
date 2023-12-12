<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SurveyQuestion;
use App\Models\SurveySetup;
use Illuminate\Http\Request;

class SurveySetupController extends Controller
{
    public function index()
    {
        $surveySetups = SurveySetup::all();
        return view('backend.pages.survey-setup.index', compact('surveySetups'));
    }

    public function create()
    {
        $surveyQuestions = SurveyQuestion::all();
        return view('backend.pages.survey-setup.create', compact('surveyQuestions'));
    }

    public function store(Request $request)
    {
        $surveySetup = new SurveySetup();
        $surveySetup->title = $request->title;
        $surveySetup->description = $request->description;
        $surveySetup->questions = json_encode($request->survey_question_id);
        $surveySetup->status = $request->status;
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
        return view('backend.pages.survey-setup.edit', compact('surveySetup', 'surveyQuestions'));
    }

    public function update(Request $request, string $id)
    {
        $surveySetup = SurveySetup::find($id);
        $surveySetup->title = $request->title;
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
