@extends('layouts.master')

@section('title', 'View Contacts')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Posts

            <a href="{{ url('admin/contacts/create')}}" class="btn btn-primary btn-sm float-end">Add Event</a>

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

                        <th>First Contact</th>
                        <th>Second Contact</th>
                        <th>Email</th>
                        <th>Edit</th>



                    </tr>
                </thead>

                <tbody>
                    @foreach($contacts as $item)

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->phone_second }}</td>
                        <td>{{ $item->email}}</td>
                        <td>
                            <a href="{{url('admin/contacts/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>


                    </tr>

                    @endforeach

                </tbody>

               </table>
        </div>
    </div>


</div>

@endsection
