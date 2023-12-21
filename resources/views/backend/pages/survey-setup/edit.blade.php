@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Update Survey Setup</h4>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('survey-setup.index') }}">
                        <i class="bx bx-list-ul"></i>
                        Survey Setup List
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('survey-setup.update', $surveySetup->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <label for="input25" class="form-label">Select Survey</label>
                    <div class="input-group">
                        <select name="survey_detail_id" id="input25" class="form-select" required>
                            <option selected disabled>Select Survey</option>
                            @foreach ($surveyDetails as $surveyDetail)
                                <option value="{{ $surveyDetail->id }}"
                                    {{ $surveySetup->survey_detail_id == $surveyDetail->id ? 'selected' : '' }}>
                                    {{ $surveyDetail->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="input25" class="form-label">Survey Status</label>
                    <div class="input-group">
                        <select name="status" id="input25" class="form-select" required>
                            <option selected disabled>Select Status</option>
                            <option value="active" {{ $surveySetup->status == 'active' ? 'selected' : '' }}>Active
                            </option>
                            <option value="inactive" {{ $surveySetup->status == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                            <option value="completed" {{ $surveySetup->status == 'completed' ? 'selected' : '' }}>
                                Completed</option>
                        </select>
                    </div>
                </div>
                {{-- Survey For --}}
                <div class="col-md-6">
                    <label for="input25" class="form-label">Survey For</label>
                    <div class="input-group">
                        <select name="survey_for_id" id="input25" class="form-select" required>
                            <option selected disabled>Select Employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}"
                                    {{ $surveySetup->survey_for_id == $employee->id ? 'selected' : '' }}>
                                    {{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- Survey By --}}
                <div class="col-md-6">
                    <label for="input25" class="form-label">Survey By</label>
                    <div class="input-group">
                        <select name="survey_by_ids[]" id="input26" class="form-select multiple-select-field"
                            multiple="multiple">
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}"
                                    {{ in_array($employee->id, json_decode($surveySetup->survey_by_ids)) ? 'selected' : '' }}>
                                    {{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input25" class="form-label">Select Question Set</label>
                    <div class="input-group">
                        <select name="question_set_id" id="input25" class="form-select" required>
                            <option selected disabled>Select Question Set</option>
                            @foreach ($questionSets as $questionSet)
                                <option value="{{ $questionSet->id }}"
                                    {{ $surveySetup->question_set_id == $questionSet->id ? 'selected' : '' }}>
                                    {{ $questionSet->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
