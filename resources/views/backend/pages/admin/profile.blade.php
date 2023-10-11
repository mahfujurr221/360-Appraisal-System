@extends('backend.layouts.master')
@push('css')
@endpush
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">User Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center d-flex flex-column align-items-center">
                                <img src="assets/images/avatars/avatar-.png" alt="Admin"
                                    class="p-1 rounded-circle bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>{{ $admin->name }}</h4>
                                    <span class="mb-3 text-success">{{ $admin->role->name }}</span>
                                    <p class="mb-1 text-secondary">
                                        Department: {{ $admin->department->dept_code ?? 'No Department' }}
                                    </p>
                                    <p class="mb-1 text-secondary">Email: {{ $admin->email }}</p>
                                    <p class="mb-1 text-secondary">Phone: {{ $admin->phone }}</p>
                                    <p class="mb-1 text-secondary">Address: {{ $admin->address }}</p>
                                </div>
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="{{ route('user.profile.update', $admin->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $admin->name }}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $admin->email }}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $admin->phone }}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $admin->address }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="px-4 btn btn-primary" value="Save Changes" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
                <div class="mt-5 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Update Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.profile.password.update', $admin->id) }}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Current Password</h6>
                                    </div>
                                    <div class="col-sm-12 text-secondary">
                                        <input type="password" class="form-control" name="current_password"
                                            value="{{ old('current_password') }}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">New Password</h6>
                                    </div>
                                    <div class="col-sm-12 text-secondary">
                                        <input type="password" class="form-control" name="new_password"
                                            value="{{ old('new_password') }}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Confirm Password</h6>
                                    </div>
                                    <div class="col-sm-12 text-secondary">
                                        <input type="password" class="form-control" name="confirm_password"
                                            value="{{ old('confirm_password') }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-secondary">
                                        <input type="submit" class="px-4 btn btn-primary" value="Update Password" />
                                    </div>
                                </div>
                            </form>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
