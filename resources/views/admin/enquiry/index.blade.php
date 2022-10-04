@extends('layouts.master')

@section('title', 'View Enquiries')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Enquiries  </h4>
        </div>

        <div class="card-body">

            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>

               @endif
               <table id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Delete</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($enquiries as $item)

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->message}}</td>
                        <td>
                            <a href="{{url('admin/enquiry/'.$item->id)}}" class="btn  btn-danger">Delete</a>
                        </td>


                    </tr>

                    @endforeach

                </tbody>

               </table>
        </div>
    </div>


</div>

@endsection
