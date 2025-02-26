@extends('layouts.master')

@section('title', 'action music dashboard')


@section('content')

<div class="container-fluid px-4">
    
        <div class="card mt-4">

            <div class="card-body">

                @if($errors->any())

                 <div class="alert alert-danger">

                    @foreach($errors ->all() as $error)
                    <div>{{$error}}</div>
                    @endforeach
                
                 </div> 
                @endif
            </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1>{{ $quiz->quiz }}</h1>
                            <form method="post" action="{{ url('quizzes/{quiz}') }}">
                                <input name="invisible" type="hidden" value="{{ $quiz->id }}">
                            {{ csrf_field() }}
                            <?php $i = 1 ?>
                                @foreach($quiz->questions as $question)
                                    <fieldset class="form-group row">
                                        <legend>{{ $question->question }}</legend>
                                        <?php $j = 1 ?>
                                        <div class="form-check">
                                            @foreach($question->answers as $answer)
                                                <div class="row">
                                                    <label class="form-check-label col-md-6" for="{{$question->id}}">  {{ $answer->answer }} </label>
                                                    <input type="radio" class="form-check-input col-md-6" name="{{$question->id}}" value="{{$answer->id}}" {{ $j==1 ? 'checked':'' }}>
                                                    <?php $j++ ?>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                    <?php $i++ ?>
                                @endforeach
                                <button type="submit" class="btn btn-primary mt-5">Submit Answers</button>
                            </form>
                        </div>
                    </div>
                </div>
                
        </div>
</div>
@endsection