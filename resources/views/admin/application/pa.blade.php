@extends('layouts.master')

@section('title', 'View Posts')


@section('content')
<div class="container-fluid px-4">
   

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4"> Pa hire Applications </h4>
           
        </div>

        <div class="card-body">
            
               <table  id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event</th>
                        <th>Number of Songs</th>
                        <th>Date</th>
                        <th>Organization Name</th>
                        <th>contact Person</th>
                        <th>Organization Position</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach($apps as $app)
                   
                    <tr>
                        <td>{{ $app->id }}</td>
                        <td>{{ $app->event }}</td>
                        <td>{{ $app->songs }}</td>
                        <td>{{ $app->date }}</td>
                        <td>{{ $app->company }}</td>
                        <td>{{ $app->contact }}</td>
                        <td>{{ $app->position }}</td>
                        <td>{{ $app->address}}</td>
                        <td>{{ $app->email}}</td>
                        <td>{{ $app->phone}}</td>
                        <td>{{ $app->message}}</td>
                    </tr>

                    @endforeach
                    
                </tbody>

               </table>
        </div>
    </div>
   

</div>

@endsection