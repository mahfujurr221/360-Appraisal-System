@extends('backend.layouts.master')
@section('title', 'Dashboard')


@section('content')
    @php
        $summary = new \App\Services\SummaryService();
    @endphp
    <div class="mb-4 card-header">
        <h4 class="card-title">Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-body bg-warning">
                <h4 class="text-white text-uppercase">Total User</h4>
                <p class="text-white h4">{{ $summary->totalUser() }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-primary">
                <h4 class="text-white text-uppercase">Total Employee</h4>
                <p class="text-white h4">{{ $summary->totalEmployee() }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-info">
                <h4 class="text-white text-uppercase">Total Evaluated</h4>
                <p class="text-white h4">0</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-danger">
                <h4 class="text-white text-uppercase">Not Evaluated</h4>
                <p class="text-white h4">0</p>
            </div>
        </div>
    </div>
@endsection
