

@extends('layouts.master')

@section('title', 'the School dashboard')


@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Levels

            <a href="{{ url('admin/add-level')}}" class="btn btn-primary btn-sm float-end">Add Levels</a>

            </h4>
        </div>
        <div class="card-body">

            @if(session('message'))
         <div class="alert alert-success">{{ session('message') }}</div>

            @endif

            <table  id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Level Name</th>

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($level as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{url('admin/edit-level/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-level/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>




    <div class="row">

    </div>

</div>

@endsection
