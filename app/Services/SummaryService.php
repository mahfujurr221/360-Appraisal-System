<?php

namespace App\Services;

use App\Models\Employee;
use App\Models\SurveyResponse;
use App\Models\SurveySetup;
use App\Models\User;

class SummaryService
{
    // get total employee
    public function totalEmployee()
    {
        $totalEmployee = Employee::count();
        return $totalEmployee;
    }
    //total user
    public function totalUser()
    {
        $totalUser = User::count();
        return $totalUser;
    }
    //total evaluated in this session
    public function totalActiveSurvey()
    {
        $totalEvaluated = SurveySetup::where('status', 'active')->count();
        return $totalEvaluated;
    }

    //total completed survey
    public function totalCompletedSurvey()
    {
        $totalCompletedSurvey = SurveySetup::where('status', 'completed')->count();
        return $totalCompletedSurvey;
    }

    //total pending survey
    public function totalInactiveSurvey()
    {
        $totalPendingSurvey = SurveySetup::where('status', 'inactive')->count();
        return $totalPendingSurvey;
    }

    //total evaluated in this session
    public function totalEvaluated()
    {
        $totalEvaluated = SurveyResponse::join('survey_setups', 'survey_setups.id', '=', 'survey_responses.survey_setup_id')
            ->where('survey_setups.status', 'active')
            ->count();
        return $totalEvaluated;
    }
    //total not evaluated in this session
    public function totalNotEvaluated()
    {
        $totalNotEvaluated = SurveyResponse::join('survey_setups', 'survey_setups.id', '=', 'survey_responses.survey_setup_id')
            ->where('survey_setups.status', 'inactive')
            ->count();
        return $totalNotEvaluated;
    }

    //total active survey for survey_by_ids
    public function totalActiveSurveyForUser()
    {
        $totalActiveSurveyForUser = SurveySetup::where('status', 'active')
            ->whereJsonContains('survey_by_ids', strval(auth()->user()->id))
            ->count();
        return $totalActiveSurveyForUser;
    }
    //total active survey completed for survey_by_ids
    public function totalActiveSurveyCompletedForUser()
    {
        $totalActiveSurveyCompletedForUser = SurveySetup::where('status', 'completed')
            ->whereJsonContains('survey_by_ids', strval(auth()->user()->id))
            ->count();
        return $totalActiveSurveyCompletedForUser;
    }
}
