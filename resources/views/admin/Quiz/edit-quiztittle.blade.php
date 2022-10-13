@extends('layouts.master')

@section('title', 'action music dashboard')


@section('content')
<div class="container-fluid px-4">
    
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Quiz Title</h4>
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

                <form action="{{url('admin/edit-quiztitle/'.$quiz->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="">Quiz Title</label>
                        <input type="text" name="quiz" value="{{$quiz->quiz}}" class="form-control">
                    </div>
                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Quiz</button>
                        </div>
                    </div>
                </form>          
        </div>
    </div>
</div>

@endsection