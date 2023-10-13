<?php
namespace App\Services;

use App\Models\Employee;
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
    public function totalEvaluated()
    {
        $totalEvaluated = Employee::where('evaluated', 1)->count();
        return $totalEvaluated;
    }
}