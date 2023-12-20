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
                        <input type="text" class="form-control" id="input24" name="title" placeholder="Survey Name"
                            required>
                    </div>
                </div>
                {{-- Survey For --}}
                <div class="col-md-6">
                    <label for="input25" class="form-label">Survey For</label>
                    <div class="input-group">
                        <select name="survey_for_id" id="input25" class="form-select" required>
                            <option selected disabled>Select Employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
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
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-111">
                    <label for="input25" class="form-label">Description</label>
                    <div class="input-group">
                        <textarea name="description" class="form-control" id="input27" cols="30" rows="5" required
                            placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input25" class="form-label">Select Question Set</label>
                    <div class="input-group">
                        <select name="question_set_id" id="input25" class="form-select" required>
                            <option selected disabled>Select Question Set</option>
                            @foreach ($questionSets as $questionSet)
                                <option value="{{ $questionSet->id }}">{{ $questionSet->name }}</option>
                            @endforeach
                        </select>
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
{{-- @push('js')
    <script>
        //name="survey_for_id"
        $('#input25').on('change', function() {
            var survey_for_id = $(this).val();

            //disable this id in survey_by_ids
            //remove disabled attr
            $('#input26 option[value="' + survey_for_id + '"]').attr('disabled', false);
            $('#input26 option[value="' + survey_for_id + '"]').attr('disabled', true);



        });
    </script>
@endpush --}}
