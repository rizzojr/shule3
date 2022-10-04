@extends('layouts.master')

@section('title', 'View Subscribers')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Subscribers </h4>
        </div>

        <div class="card-body">

            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>

               @endif
               <table id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>

                        <th>Email</th>



                    </tr>
                </thead>

                <tbody>
                    @foreach($subscribers as $item)

                    <tr>
                        <td>{{ $item->id }}</td>

                        <td>{{ $item->email }}</td>



                    </tr>

                    @endforeach

                </tbody>

               </table>
        </div>
    </div>


</div>

@endsection
