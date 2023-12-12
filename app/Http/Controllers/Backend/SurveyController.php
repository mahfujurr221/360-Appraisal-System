<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\SurveySetup;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function surveyStart()
    {
        $employees = Employee::with('designation')->get();
        return view('backend.pages.survey.survey-start', compact('employees'));
    }

    public function surveyQuestions(string $id)
    {
        $employee = Employee::with('designation')->find($id);
        $surveySetup = SurveySetup::where('status', 'active')->first();
        return view('backend.pages.survey.survey-questions', compact('employee', 'surveySetup'));
    }
}
