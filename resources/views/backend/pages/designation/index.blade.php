@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Designation List</h4>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#desgAddModal">
                        <i class="bx bx-plus"></i>
                        Add New Designation
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
                            <th>Designation Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($designations as $key => $designation)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $designation->name }}</td>
                                <td>
                                    <a href="{{ route('designation.show', $designation->id) }}" class="btn btn-info btn-sm">
                                        <i class="bx bx-user"></i>
                                    </a>

                                    <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#desgEditModal{{ $designation->id }}">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <button onclick="deleteData({{ $designation->id }})" type="button"
                                        class="btn btn-danger btn-sm {{ $designation->id == auth()->user()->id ? 'disabled' : '' }}">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $designation->id }}"
                                        action="{{ route('designation.destroy', $designation->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('delete')
                                    </form>

                                    {{-- Edit Admin Modal --}}
                                    <div class="modal fade" id="desgEditModal{{ $designation->id }}" tabindex="-1"
                                        style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Designation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <form class="row g-3"
                                                        action="{{ route('role.update', $designation->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Designation
                                                                Name</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Designation Name" name="name" required
                                                                    value="{{ $designation->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add New Admin Modal --}}
        <div class="modal fade" id="desgAddModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Designation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="{{ route('designation.store') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Designation Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Designation Name" name="name"
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
