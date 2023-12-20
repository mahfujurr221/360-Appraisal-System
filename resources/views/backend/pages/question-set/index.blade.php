@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Questions Set</h4>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#questionSetAddModal">
                        <i class="bx bx-plus"></i>
                        Add New Question Set
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
                            <th>Set Name</th>
                            <th>Questions</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questionSets as $key => $questionSet)
                            <tr class="align-middle text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $questionSet->name }}</td>
                                <td>
                                    @foreach ($questionSet->surveyQuestion as $question)
                                        <span class="badge bg-primary">{{ $question->question }}</span><br>
                                    @endforeach
                                </td>
                                <td>{{ $questionSet->description }}</td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#questionSetEditModal{{ $questionSet->id }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    {{-- Edit Question Modal --}}
                                    <div class="modal fade text-start" id="questionSetEditModal{{ $questionSet->id }}"
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
                                                        action="{{ route('question-set.update', $questionSet->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Set Name</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-edit-alt"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Set Name" name="name"
                                                                    value="{{ $questionSet->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Description</label>
                                                            <div class="input-group">
                                                                <textarea name="description" class="form-control" id="input27" cols="30" rows="5" required>{{ $questionSet->description }}</textarea>
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
                                    <button onclick="deleteData({{ $questionSet->id }})" type="button"
                                        class="btn btn-danger btn-sm">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $questionSet->id }}"
                                        action="{{ route('question-set.destroy', $questionSet->id) }}" method="post"
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
        <div class="modal fade" id="questionSetAddModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Question Set</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="{{ route('question-set.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Set Name</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-edit-alt"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Set Name" name="name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Description</label>
                                <div class="input-group">
                                    <textarea name="description" class="form-control" id="input27" cols="30" rows="5" required
                                        placeholder="Description"></textarea>
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
