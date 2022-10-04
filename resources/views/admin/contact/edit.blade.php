@extends('layouts.master')

@section('title', 'Edit Contact')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">


        <div class="card-header">
            <h4 class="mt-4">Edit Events
            <a href="{{ url('admin/contacts')}}" class="btn btn-danger btn-sm float-end">Back</a>

            </h4>
        </div>

        <div class="card-body">

            @if($errors->any())

        <div class="alert alert-danger">

       @foreach($errors ->all() as $error)
       <div>{{$error}}</div>
       @endforeach

        </div>
       @endif

       <form action="{{ url('admin/contacts/' .$contact->id) }}" method="POST" enctype="multipart/form-data">

        {!! csrf_field() !!}
        @method("PATCH")

        <div class="mb-3">
            <label for="">Phone</label>
            <input type="text" name="phone" value="{{$contact->phone}}" class="form-control"/>
        </div>

        <div class="mb-3">
            <label for="">Phone_second</label>
            <input type="text" name="phone_second" value="{{$contact->phone_second}}" class="form-control"/>
        </div>

        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" name="email" value="{{$contact->email}}" class="form-control"/>
        </div>









       <div class="row">

           <div class="col-md-12">
            <div class="mb-3">
                <button type="submit" value="Update" class="btn btn-primary">Save Contact</button>
            </div>
           </div>


       </div>



    </form>
        </div>
    </div>


</div>

@endsection
