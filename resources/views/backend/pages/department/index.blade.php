@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Department List</h4>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#deptAddModal">
                        <i class="bx bx-plus"></i>
                        Add New Department
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
                            <th>Department Code</th>
                            <th>Department Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $key => $department)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $department->dept_code }}</td>

                                <td>{{ $department->name }}</td>
                                <td>
                                    {{-- <a href="{{ route('department.show', $department->id) }}" class="btn btn-info btn-sm">
                                        <i class="bx bx-user"></i>
                                    </a> --}}

                                    <a class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deptEditModal{{ $department->id }}">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <button onclick="deleteData({{ $department->id }})" type="button"
                                        class="btn btn-danger btn-sm {{ $department->id == auth()->user()->id ? 'disabled' : '' }}">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $department->id }}"
                                        action="{{ route('department.destroy', $department->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('delete')
                                    </form>

                                    {{-- Edit Admin Modal --}}
                                    <div class="modal fade" id="deptEditModal{{ $department->id }}" tabindex="-1"
                                        style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Department</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <form class="row g-3"
                                                        action="{{ route('department.update', $department->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Department Code</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Department Code" name="dept_code"
                                                                    value="{{ $department->dept_code }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="input25" class="form-label">Department Name</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="First Name" name="name" required
                                                                    value="{{ $department->name }}">
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
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Add New Admin Modal --}}
        <div class="modal fade" id="deptAddModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Department</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="{{ route('department.store') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Department Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Department Code"
                                        name="dept_code" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="input25" class="form-label">Department Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Department Name"
                                        name="name" required>
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
