@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Choose Employee For Survey</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                @foreach ($employees as $employee)
                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="assets/images/avatars/avatar-1.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">{{ $employee->name }}</h5>
                                    <p class="mb-3">{{ $employee->designation->name }}</p>
                                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;"
                                            class="list-inline-item bg-facebook text-white border-0"><i
                                                class="bx bxl-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i
                                                class="bx bxl-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i
                                                class="bx bxl-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i
                                                class="bx bxl-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid">
                                        <a href="{{ route('survey.questions', $employee->id) }}"
                                            class="btn btn-outline-primary radius-15">
                                            Start Survey
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
