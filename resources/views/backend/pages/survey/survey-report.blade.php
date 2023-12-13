@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Survey Report</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            {{-- filter --}}
            <div class="row mb-3">
                <form class="row g-3" action="{{ route('survey-report.index') }}" method="GET">
                    <div class="col-md-4">
                        @php
                            $surveySetups = App\Models\SurveySetup::all();
                        @endphp
                        <label for="name" class="form-label">Survey Name</label>
                        <select name="survey_setup_id" class="form-select">
                            <option value="" selected>Select Survey</option>
                            @foreach ($surveySetups as $survey)
                                <option value="{{ $survey->id }}"
                                    {{ request()->get('survey_setup_id') == $survey->id ? 'selected' : '' }}>
                                    {{ $survey->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        @php
                            $employees = App\Models\Employee::all();
                        @endphp
                        <label for="name" class="form-label">Employee Name</label>
                        <select name="employee_id" class="form-select">
                            <option value="" selected>Select Employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}"
                                    {{ request()->get('employee_id') == $employee->id ? 'selected' : '' }}>
                                    {{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="name" class="form-label">Filter</label>
                        <input type="submit" class="form-control btn btn-primary" value="Search">
                    </div>
                    <div class="col-md-2">
                        <label for="name" class="form-label">Reset</label>
                        <input class="form-control btn btn-warning" value="Reset"
                            onclick="window.location.href='{{ route('survey-report.index') }}'">
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Survey Name</th>
                            <th>Employee Name</th>
                            <th>Total Points</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveyResponses as $key => $surveyResponse)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $surveyResponse->surveySetup->title }}</td>
                                <td>{{ $surveyResponse->employee->name }}</td>
                                <td>{{ $surveyResponse->points }}</td>
                                <td>
                                    <a href="{{ route('survey-report.details', $surveyResponse->id) }}"
                                        class="btn btn-outline-primary btn-sm radius-15">Details</a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
