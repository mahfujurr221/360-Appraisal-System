@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Choose Survey</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                @foreach ($survey as $data)
                    <div class="col">
                        <div class="card radius-15">
                            <div class="text-center card-body">
                                <div class="p-4 border radius-15">
                                    <h5 class="mt-5 mb-0">{{ $data->title }}</h5>
                                    <p class="mb-3">{{ $data->description }}</p>
                                    <div class="d-grid">
                                        <a href="{{ route('survey.employee', $data->id) }}"
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
