<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DesignationController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\MaintenanceController;
use App\Http\Controllers\Backend\SurveyController;
use App\Http\Controllers\Backend\SurveyQuestionController;
use App\Http\Controllers\Backend\SurveySetupController;

Route::get('/', function () {
    // return login page 
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.sudashboard');
    })->name('dashboard');
    Route::resource('admin', AdminController::class);
    //profile
    Route::get('user-profile', [AdminController::class, 'profile'])->name('user.profile');
    Route::post('user-profile/{id}', [AdminController::class, 'profileUpdate'])->name('user.profile.update');
    //user.profile.password.update
    Route::post('user-profile-password/{id}', [AdminController::class, 'profilePasswordUpdate'])->name('user.profile.password.update');
    Route::resource('role', RoleController::class);
    //department
    Route::resource('department', DepartmentController::class);
    //designation   
    Route::resource('designation', DesignationController::class);
    //employee
    Route::resource('employee', EmployeeController::class);

    //survey question
    Route::resource('survey-question', SurveyQuestionController::class);

    //survey setup
    Route::resource('survey-setup', SurveySetupController::class);

    //survey
    Route::get('survey-start', [SurveyController::class, 'surveyStart'])->name('survey.start');
    Route::get('survey-questions/{id}', [SurveyController::class, 'surveyQuestions'])->name('survey.questions');
    Route::post('survey-submit', [SurveyController::class, 'surveySubmit'])->name('survey.submit');

    //other routes
    Route::get('reset', [MaintenanceController::class, 'reset'])->name('reset');
});
