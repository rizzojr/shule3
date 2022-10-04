@extends('layouts.master')

@section('title', 'View Events')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Posts

            <a href="{{ url('admin/events/create')}}" class="btn btn-primary btn-sm float-end">Add Event</a>

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
                        <th>date</th>
                        <th>Edit</th>


                    </tr>
                </thead>

                <tbody>
                    @foreach($events as $item)

                    <tr>
                        <td>{{ $item->id }}</td>

                        <td>{{ $item->name }}</td>
                        <td>
                        <img src="{{asset('uploads/event/'.$item->image)}}" width="50px" height="50px" alt="Img">
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->date}}</td>
                        <td>
                            <a href="{{url('admin/events/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

               </table>
        </div>
    </div>


</div>

@endsection
