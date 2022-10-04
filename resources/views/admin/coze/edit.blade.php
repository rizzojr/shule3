@extends('layouts.master')

@section('title', 'Edit Coz')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">


        <div class="card-header">
            <h4 class="mt-4">Edit Courzes
            <a href="{{ url('admin/courzes')}}" class="btn btn-danger btn-sm float-end">Back</a>

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

       <form action="{{ url('admin/courzes/'.$coz->id) }}" method="POST" enctype="multipart/form-data">
       {!! csrf_field() !!}
        @method("PATCH")


        <div class="mb-3">
                    <label for="">Instructor Name</label>
                    <input type="text" name="instructor_name"  value="{{$coz->instructor_name}}" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{$coz->description}}" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Cost</label>
                    <input type="text" name="cost"  value="{{$coz->cost}}" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Image Cover</label>
                    <input type="file" name="image_cover" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Image Instructor</label>
                    <input type="file" name="image_instructor" class="form-control"/>
                </div>







       <div class="row">

           <div class="col-md-12">
            <div class="mb-3">
                <button type="submit" value="Update" class="btn btn-primary">Save Post</button>
            </div>
           </div>


       </div>



    </form>
        </div>
    </div>


</div>

@endsection
