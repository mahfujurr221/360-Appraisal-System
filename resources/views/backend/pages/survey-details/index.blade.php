@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Survey Details</h4>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#surveyDetailsAddModal">
                        <i class="bx bx-plus"></i>
                        Add New Survey Details
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
                            <th>Survey Title</th>
                            <th>Survey Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveyDetails as $key => $surveyDetail)
                            <tr class="align-middle text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $surveyDetail->title }}</td>
                                <td>{{ $surveyDetail->description }}</td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#surveyDetailsEditModal{{ $surveyDetail->id }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    {{-- Edit Question Modal --}}
                                    <div class="modal fade text-start" id="surveyDetailsEditModal{{ $surveyDetail->id }}"
                                        tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Survey Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="row g-3"
                                                        action="{{ route('survey-details.update', $surveyDetail->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Survey Title</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bx bx-edit-alt"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Survey Title" name="title"
                                                                    value="{{ $surveyDetail->title }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Description</label>
                                                            <div class="input-group">
                                                                <textarea name="description" class="form-control"
                                                                    id="input27" cols="30" rows="5"
                                                                    required>{{ $surveyDetail->description }}</textarea>
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
                                    <button onclick="deleteData({{ $surveyDetail->id }})"
                                     type="button"
                                        class="btn btn-danger btn-sm">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $surveyDetail->id }}"
                                        action="{{ route('question-set.destroy', $surveyDetail->id) }}" method="post"
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
        <div class="modal fade" id="surveyDetailsAddModal"
         tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Survey Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="{{ route('survey-details.store') }}"
                        method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Survey Title</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bx bx-edit-alt"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Survey Title" name="title"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Description</label>
                                <div class="input-group">
                                    <textarea name="description" class="form-control" id="input27" cols="30" rows="5"
                                        required></textarea>
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
