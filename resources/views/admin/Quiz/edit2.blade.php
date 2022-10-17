@extends('layouts.master')

@section('title', 'action music dashboard')


@section('content')

<div class="container-fluid px-4">
    
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Question</h4>
                <a href="{{ url('admin/quiz')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </div>

            <div class="card-body">

                @if($errors->any())

                 <div class="alert alert-danger">

                @foreach($errors ->all() as $error)
                <div>{{$error}}</div>
                @endforeach
                
                 </div> 
                @endif

                <form action="{{ url('admin/update-question/'.$question->id) }}" method="POST"> 
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea  name="question" id="mySummernote" rows="5" class="form-control"> {{$question->question}}</textarea>
                    </div>
                    @foreach($question->answers as $a)
                
                    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                        <label class="list-group-item options border-0">


                        <div class="form-group">
                                <label for="question[{{$question->id}}][answers][{{$a->id}}]"></label>
                                <input type="text" class="form-control" name="answer[{{$a->id}}]" id="{{$a->id}}"  value="{{$a->answer}}" required>
                        </div>
                        <div class="form-check">
                                <label for="{{$a->id}}" class="form-check-label">
                                <input type="radio" class="form-check-input" name="correctAnswer" id="{{$a->id}}" value="{{$a->id}}" @if($question->correctAnswer->answer_id == $a->id) checked @endif>
                                    Correct?
                                </label>
                        </div>
                            
                        </label>                    
                    </div>
                    @endforeach
                    <button style="margin-left:3.7%"; type="submit" class="btn btn-primary">EDIT QUESTION</button>
                </form>            
        </div>
    
    </div>

</div>
@endsection