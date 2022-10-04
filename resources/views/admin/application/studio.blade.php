@extends('layouts.master')

@section('title', 'View Posts')


@section('content')
<div class="container-fluid px-4">
   

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">studio hire Applications </h4>
           
        </div>

        <div class="card-body">
            
               <table  id="myDataTable" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>record</th>
                        <th>songs</th>
                        <th>instrument</th>
                        <th>Full name</th>                        
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach($apps as $app)
                   
                    <tr>
                        <td>{{ $app->id }}</td>
                        <td>{{ $app->record }}</td>
                        <td>{{ $app->songs }}</td>
                        <td>{{ $app->instrument }}</td>
                        <td>{{ $app->name }}</td>
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