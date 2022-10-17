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
            <div class="container mt-sm-5 my-1">
                @foreach($data->questions as $q)
                <div class="question ml-sm-5 pl-sm-5 pt-2">
                    <div class="py-2 h5"><b>Q{{$i++}} {{$q->question}}?</b></div>
                    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">

                        @foreach($q->answers as $a)
                        <label class="list-group-item options border-0">{{$a->answer}}
                            <input type="radio" name="radio"@if($q->correctAnswer->answer_id == $a->id) checked @endif>
                            <span class="checkmark"></span>
                        </label>
                        
                        @endforeach
                    </div>
                </div> 
                <a href="{{url('admin/edit-question/'.$q->id)}}"><button style="margin-left:40%";type="button" class="btn btn-danger">EDIT</button></a>
                <a href="{{url('admin/delete-question/'.$q->id)}}"><button style="margin-left:20%";type="button" class="btn btn-danger">DELETE</button></a>
                @endforeach   
           </div>
                
        </div>
</div>
@endsection