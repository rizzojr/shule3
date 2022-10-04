@extends('layouts.master')

@section('title', 'Add Courze')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">
        @if($errors->any())

        <div class="alert alert-danger">

       @foreach($errors ->all() as $error)
       <div>{{$error}}</div>
       @endforeach

        </div>
       @endif

        <div class="card-header">
            <h4 class="mt-4">Add Events
            <a href="{{ url('admin/courzes/create')}}" class="btn btn-primary btn-sm float-end">Add Post</a>

            </h4>
        </div>

        <div class="card-body">

            <form action="{{ url('admin/courzes') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label for="">Instructor Name</label>
                    <input type="text" name="instructor_name" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Cost</label>
                    <input type="text" name="cost" class="form-control"/>
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
                        <button type="submit" class="btn btn-primary">Save Post</button>
                    </div>
                   </div>


               </div>



            </form>
        </div>
    </div>


</div>

@endsection
