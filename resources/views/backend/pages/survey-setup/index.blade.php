@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">Survey Setup</h4>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('survey-setup.create') }}">
                        <i class="bx bx-plus"></i>
                        Add New Survey Setup
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Survey Name</th>
                            <th>Survey Questions</th>
                            <th>Survey Description</th>
                            <th>Survey Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveySetups as $key => $surveySetup)
                            <tr class="text-center align-middle">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $surveySetup->title }}</td>
                                @php
                                    $questions = json_decode($surveySetup->questions);
                                @endphp
                                <td>
                                    @foreach ($questions as $question)
                                        @php
                                            $question = App\Models\SurveyQuestion::find($question);
                                        @endphp
                                        <span class="badge bg-primary">{{ $question->question?? '' }}</span><br>
                                    @endforeach
                                </td>
                                <td>{{ $surveySetup->description }}</td>
                                <td>
                                    @if ($surveySetup->status == 'active')
                                        <span class="badge bg-info">{{ $surveySetup->status }}</span>
                                    @elseif($surveySetup->status == 'inactive')
                                        <span class="badge bg-danger">{{ $surveySetup->status }}</span>
                                    @elseif($surveySetup->status == 'completed')
                                        <span class="badge bg-success">{{ $surveySetup->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('survey-setup.edit', $surveySetup->id) }}" type="button"
                                        class="btn btn-primary btn-sm">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <button onclick="deleteData({{ $surveySetup->id }})" type="button"
                                        class="btn btn-danger btn-sm">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $surveySetup->id }}"
                                        action="{{ route('survey-setup.destroy', $surveySetup->id) }}" method="post"
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
    </div>
@endsection
