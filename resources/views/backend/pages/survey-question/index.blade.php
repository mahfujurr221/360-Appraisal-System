@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Survey Questions</h4>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#questionAddModal">
                        <i class="bx bx-plus"></i>
                        Add New Question
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Question</th>
                            <th>Oprations</th>
                            <th>Points</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveyQuestions as $key => $question)
                            <tr class="align-middle text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $question->question }}</td>
                                <td>
                                    {{ $question->option1 }} <br>
                                    {{ $question->option2 }} <br>
                                    {{ $question->option3 }} <br>
                                    {{ $question->option4 }}
                                </td>
                                <td>
                                    {{ $question->point1 }} <br>
                                    {{ $question->point2 }} <br>
                                    {{ $question->point3 }} <br>
                                    {{ $question->point4 }}
                                </td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#questionEditModal{{ $question->id }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    {{-- Edit Question Modal --}}
                                    <div class="modal fade text-start" id="questionEditModal{{ $question->id }}"
                                        tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Question</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="row g-3"
                                                        action="{{ route('survey-question.update', $question->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Question</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-question-mark"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Question" name="question" required
                                                                    value="{{ $question->question }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Option 1</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-list-check"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Option 1" name="option1" required
                                                                    value="{{ $question->option1 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Point</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-info-circle"></i>
                                                                </span>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Point" name="point1" required
                                                                    value="{{ $question->point1 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Option 2</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-list-check"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Option 2" name="option2" required
                                                                    value="{{ $question->option2 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Point</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-info-circle"></i>
                                                                </span>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Point" name="point2" required
                                                                    value="{{ $question->point2 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Option 3</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-list-check"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Option 3" name="option3" required
                                                                    value="{{ $question->option3 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Point</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-info-circle"></i>
                                                                </span>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Point" name="point3" required
                                                                    value="{{ $question->point3 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Option 4</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-list-check"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Option 4" name="option4" required
                                                                    value="{{ $question->option4 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="input25" class="form-label">Point</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-info-circle"></i>
                                                                </span>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Point" name="point4" required
                                                                    value="{{ $question->point4 }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button onclick="deleteData({{ $question->id }})" type="button"
                                        class="btn btn-danger btn-sm">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $question->id }}"
                                        action="{{ route('survey-question.destroy', $question->id) }}" method="post"
                                        class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Add New Question Modal --}}
        <div class="modal fade" id="questionAddModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Question</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="{{ route('survey-question.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Question</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-question-mark"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Question" name="question"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Option 1</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-list-check"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Option 1" name="option1"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Point</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-info-circle"></i>
                                    </span>
                                    <input type="number" class="form-control" placeholder="Point" name="point1"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Option 2</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-list-check"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Option 2" name="option2"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Point</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-info-circle"></i>
                                    </span>
                                    <input type="number" class="form-control" placeholder="Point" name="point2"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Option 3</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-list-check"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Option 3" name="option3"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Point</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-info-circle"></i>
                                    </span>
                                    <input type="number" class="form-control" placeholder="Point" name="point3"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Option 4</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-list-check"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Option 4" name="option4"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="input25" class="form-label">Point</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-info-circle"></i>
                                    </span>
                                    <input type="number" class="form-control" placeholder="Point" name="point4"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
