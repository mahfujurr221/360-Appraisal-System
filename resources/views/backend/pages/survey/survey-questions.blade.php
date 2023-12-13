@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title text-light">{{ $surveySetup->title }}</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('survey.submit') }}" method="post">
                @csrf
                <input type="hidden" name="survey_setup_id" value="{{ $surveySetup->id }}">
                <input type="hidden" name="employee_id" value="{{ $employee->id }}">

                <h5>{{ $surveySetup->description }}</h5>
                <hr>
                <ol>
                    @php
                        $questions = json_decode($surveySetup->questions);
                        $surveyQuestions = App\Models\SurveyQuestion::whereIn('id', $questions)->get();
                    @endphp
                    @foreach ($surveyQuestions as $key => $question)
                        <li>
                            <h6>{{ $question->question }}</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="questions[{{ $question->id }}][answer]"
                                    value="option1" id="{{ $question->id }}">
                                <label class="form-check-label" for="{{ $question->id }}">
                                    {{ $question->option1 }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="questions[{{ $question->id }}][answer]" value="option2"
                                    id="{{ $question->id }}">
                                <label class="form-check-label" for="{{ $question->id }}">
                                    {{ $question->option2 }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="questions[{{ $question->id }}][answer]" value="option3"
                                    id="{{ $question->id }}">
                                <label class="form-check-label" for="{{ $question->id }}">
                                    {{ $question->option3 }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="questions[{{ $question->id }}][answer]" value="option4"
                                    id="{{ $question->id }}">
                                <label class="form-check-label" for="{{ $question->id }}">
                                    {{ $question->option4 }}
                                </label>
                            </div>


                        </li>
                    @endforeach
                </ol>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
