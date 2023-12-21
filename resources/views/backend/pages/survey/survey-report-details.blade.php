@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Survey Report Details</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header bg-secondary">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title text-light">Survey & Employee</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Survey Name:</th>
                            <td>{{ $surveyResponse->surveySetup->surveyDetails->title }}</td>
                        </tr>
                        <tr>
                            <th>Employee Name:</th>
                            <td>{{ $surveyResponse->employee->name }}</td>
                        </tr>
                        <tr>
                            <th>Total Questions:</th>
                            <td>{{ $surveyResponse->surveyResponseDetails->count() }}</td>
                        </tr>
                        <tr>
                            <th>Total Points:</th>
                            <td>{{ $surveyResponse->points }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-secondary">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title text-light">Questions Details</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surveyResponse->surveyResponseDetails as $key => $surveyResponseDetail)
                                <tr class="text-center">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $surveyResponseDetail->surveyQuestion->question }}</td>
                                    <td>{{ $surveyResponseDetail->surveyQuestion->option1 }}
                                        ({{ $surveyResponseDetail->option1 }})
                                    </td>
                                    <td>{{ $surveyResponseDetail->surveyQuestion->option2 }}
                                        ({{ $surveyResponseDetail->option2 }})</td>
                                    <td>{{ $surveyResponseDetail->surveyQuestion->option3 }}
                                        ({{ $surveyResponseDetail->option3 }})</td>
                                    <td>{{ $surveyResponseDetail->surveyQuestion->option4 }}
                                        ({{ $surveyResponseDetail->option4 }})</td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
