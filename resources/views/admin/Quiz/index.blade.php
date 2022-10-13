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

                <div class="row">
                   <div class="col-md-6 offset-md-3">
                      <h1 class="text-center">Select a Quiz</h1>
                      <ul class="list-group">
                         @foreach ($quizzes as $quiz)
                         <li class="list-group-item"><h3><a href="/admin/quizzes/{{$quiz->id}}">{{$quiz->quiz}}</a></h3></li>
                         @endforeach
                      </ul>
                   </div>
               </div>
            </div>
        </div>
</div>
@endsection