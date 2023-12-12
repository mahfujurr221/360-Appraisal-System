<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SurveyQuestion;
use Illuminate\Http\Request;

class SurveyQuestionController extends Controller
{
    public function index()
    {
        $surveyQuestions = SurveyQuestion::all();
        return view('backend.pages.survey-question.index', compact('surveyQuestions'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $surveyQuestion = new SurveyQuestion();
        $surveyQuestion->question = $request->question;
        $surveyQuestion->option1 = $request->option1;
        $surveyQuestion->point1 = $request->point1;
        $surveyQuestion->option2 = $request->option2;
        $surveyQuestion->point2 = $request->point2;
        $surveyQuestion->option3 = $request->option3;
        $surveyQuestion->point3 = $request->point3;
        $surveyQuestion->option4 = $request->option4;
        $surveyQuestion->point4 = $request->point4;
        $surveyQuestion->save();
        toastr()->success('Survey Question Created Successfully');
        return redirect()->back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $surveyQuestion = SurveyQuestion::find($id);
        $surveyQuestion->question = $request->question;
        $surveyQuestion->option1 = $request->option1;
        $surveyQuestion->point1 = $request->point1;
        $surveyQuestion->option2 = $request->option2;
        $surveyQuestion->point2 = $request->point2;
        $surveyQuestion->option3 = $request->option3;
        $surveyQuestion->point3 = $request->point3;
        $surveyQuestion->option4 = $request->option4;
        $surveyQuestion->point4 = $request->point4;
        $surveyQuestion->save();
        toastr()->success('Survey Question Updated Successfully');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        //
        $surveyQuestion = SurveyQuestion::find($id);
        $surveyQuestion->delete();
        toastr()->success('Survey Question Deleted Successfully');
        return redirect()->back();
    }
}
