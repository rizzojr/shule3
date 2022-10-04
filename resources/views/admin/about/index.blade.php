@extends('layouts.master')

@section('title', 'View Abouts')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View About

            <a href="{{ url('admin/abouts/create')}}" class="btn btn-primary btn-sm float-end">Add About</a>

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

                        <th>who_we_are</th>
                        <th>image_cover_one</th>
                        <th>what_our_goal</th>
                        <th>Edit</th>



                    </tr>
                </thead>

                <tbody>
                    @foreach($abouts as $item)

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->who_we_are }}</td>
                        <td>{{ $item->image_cover_one }}</td>
                        <td>{{ $item->what_our_goal}}</td>
                        <td>
                            <a href="{{url('admin/abouts/'.$item->id. '/edit')}}" class="btn btn-success">Edit</a>
                        </td>


                    </tr>

                    @endforeach

                </tbody>

               </table>
        </div>
    </div>


</div>

@endsection
