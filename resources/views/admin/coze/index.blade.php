@extends('layouts.master')

@section('title', 'View Courzes')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Courzes

            <a href="{{ url('admin/courzes/create')}}" class="btn btn-primary btn-sm float-end">Add Courze</a>

            </h4>
        </div>

        <div class="card-body">

            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>

               @endif
               <table id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>

                        <th>Event Name</th>
                        <th>Image</th>
                        <th>description</th>
                        <th>cost</th>
                        <th>Edit</th>


                    </tr>
                </thead>

                <tbody>
                    @foreach($courzes as $item)

                    <tr>
                        <td>{{ $item->id }}</td>

                        <td>{{ $item->instructor_name }}</td>
                        <td>
                        <img src="{{asset('uploads/coz/'.$item->image_cover)}}" width="50px" height="50px" alt="Img">
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->cost}}</td>
                        <td>
                            <a href="{{url('admin/courzes/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

               </table>
        </div>
    </div>


</div>

@endsection
