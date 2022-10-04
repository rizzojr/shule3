@extends('layouts.master')

@section('title', 'Add Contact')


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
            <h4 class="mt-4">Add Posts
            <a href="{{ url('admin/contacts/create')}}" class="btn btn-primary btn-sm float-end">Add Post</a>

            </h4>
        </div>

        <div class="card-body">

            <form action="{{ url('admin/events') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label for="">Event Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Event Date</label>
                    <input type="date" name="date" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Event Time</label>
                    <input type="time" name="time" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name="description" id="mySummernote" rows="4" class="form-control"> </textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control"/>
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
