@extends('layouts.master')

@section('title', 'View Users')


@section('content')
<div class="container-fluid px-4">
   

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">View Supporters </h4>
        </div>

        <div class="card-body">

            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
   
               @endif
               <table id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach($supporters as $item)
                   
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->message}}</td>
                        
                      
                    </tr>

                    @endforeach
                    
                </tbody>

               </table>
        </div>
    </div>
   

</div>

@endsection