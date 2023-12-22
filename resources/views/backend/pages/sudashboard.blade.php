@extends('backend.layouts.master')
@section('title', 'Dashboard')


@section('content')
@php
$summary = new \App\Services\SummaryService();
@endphp
@if(auth()->user()->role_id == 1)
<div class="mb-4 card-header">
    <h4 class="card-title">Dashboard</h4>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card card-body bg-warning">
            <h6 class="text-white text-uppercase">Total User</h6>
            <p class="text-white h4">{{ $summary->totalUser() }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-body bg-primary">
            <h6 class="text-white text-uppercase">Total Employee</h6>
            <p class="text-white h4">{{ $summary->totalEmployee() }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-body bg-secondary">
            <h6 class="text-white text-uppercase">Total Active Survey</h6>
            <p class="text-white h6">{{ $summary->totalActiveSurvey() }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-body bg-info">
            <h6 class="text-white text-uppercase">Total Inactive Survey</h6>
            <p class="text-white h6">{{ $summary->totalInactiveSurvey() }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-body bg-primary">
            <h6 class="text-white text-uppercase">Total Completed Survey</h6>
            <p class="text-white h6">{{ $summary->totalCompletedSurvey() }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-body bg-info">
            <h6 class="text-white text-uppercase">Total Evaluated</h6>
            <p class="text-white h6">{{ $summary->totalEvaluated() }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-body bg-danger">
            <h6 class="text-white text-uppercase">Not Evaluated</h6>
            <p class="text-white h5">{{ $summary->totalNotEvaluated() }}</p>
        </div>
    </div>
</div>
@else
<div class="mb-4 card-header">
    <h4 class="card-title">Dashboard</h4>
    <div class="mt-5 col-md-3">
        <div class="card card-body bg-success">
            <h6 class="text-white text-uppercase">Total Survey</h6>
            <p class="text-white h5">{{ $summary->totalActiveSurveyForUser() }}</p>
        </div>
    </div>
</div>
@endif
@endsection