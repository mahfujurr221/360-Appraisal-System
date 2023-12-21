<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SurveyDetail;
use Illuminate\Http\Request;

class SurveyDetailsController extends Controller
{
    public function index()
    {
        $surveyDetails = SurveyDetail::all();
        return view('backend.pages.survey-details.index', compact('surveyDetails'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $surveyDetail = new SurveyDetail();
        $surveyDetail->title = $request->title;
        $surveyDetail->description = $request->description;
        $surveyDetail->save();
        toastr()->success('Survey Details Created Successfully');
        return redirect()->route('survey-details.index');
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
        $surveyDetail = SurveyDetail::find($id);
        $surveyDetail->title = $request->title;
        $surveyDetail->description = $request->description;
        $surveyDetail->save();
        toastr()->success('Survey Details Updated Successfully');
        return redirect()->route('survey-details.index');
    }

    public function destroy(string $id)
    {
        $surveyDetail = SurveyDetail::find($id);
        $surveyDetail->delete();
        toastr()->success('Survey Details Deleted Successfully');
        return redirect()->route('survey-details.index');
    }
}
