@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Create Survey Setup</h4>
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
            <form class="row g-3" action="{{ route('survey-setup.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="input25" class="form-label">Survey Name</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bx bx-edit-alt"></i>
                        </span>
                        <input type="text" class="form-control" id="input25" name="title" placeholder="Survey Name"
                            required>
                    </div>
                </div>
                <div class="col-md-111">
                    <label for="input25" class="form-label">Description</label>
                    <div class="input-group">
                        <textarea name="description" class="form-control" id="input25" cols="30" rows="5" required
                            placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input25" class="form-label">Select Question</label>
                    <div class="row">
                        @foreach ($surveyQuestions as $surveyQuestion)
                            <div class="col-md-6">
                                <div class="form-check fw-bold">
                                    <input class="form-check-input" type="checkbox" id="{{ $surveyQuestion->id }}"
                                        name="survey_question_id[]" value="{{ $surveyQuestion->id }}">
                                    <label class="form-check-label" for="{{ $surveyQuestion->id }}">
                                        {{ $surveyQuestion->question }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection