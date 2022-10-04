@extends('layouts.master')

@section('title', 'View Posts')


@section('content')
<div class="container-fluid px-4">
   

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Foundation Applications </h4>
           
        </div>

        <div class="card-body">
            
               <table  id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Instrument</th>
                        <th>Full name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Guardian</th>
                        <th>Message</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach($apps as $app)
                   
                    <tr>
                        <td>{{ $app->id }}</td>
                        <td>{{ $app->instrument }}</td>
                        <td>{{ $app->name }}</td>
                        <td>{{ $app->gender }}</td>
                        <td>{{ $app->address}}</td>
                        <td>{{ $app->email}}</td>
                        <td>{{ $app->phone}}</td>
                        <td>{{ $app->dob}}</td>
                        <td>{{ $app->guardian}}</td>
                        <td>{{ $app->message}}</td>
                    </tr>

                    @endforeach
                    
                </tbody>

               </table>
        </div>
    </div>
   

</div>

@endsection