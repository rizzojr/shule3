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

                <table  id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Quiz Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quizzes as $quiz)  
                    @php $i++ @endphp
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ $quiz->quiz}}</td>
                        <td>
                            <a href="{{url('admin/edit-quiztitle/'.$quiz->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-quiztitle/'.$quiz->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            </div>
        </div>
</div>
@endsection