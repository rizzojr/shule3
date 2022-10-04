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

       <form action="{{ url('admin/abouts/' .$about->id) }}" method="POST" enctype="multipart/form-data">

        {!! csrf_field() !!}
        @method("PATCH")



        <div class="mb-3">
                    <label for="">who_we_are</label>
                    <textarea  name="who_we_are" id="mySummernote" rows="4" class="form-control">  {{$about->who_we_are}} </textarea>
                </div>

                <div class="mb-3">
                    <label for="">what_we_do</label>
                    <textarea  name="what_we_do" id="mySummernote" rows="4" class="form-control"> {{$about->what_we_do}} </textarea>
                </div>

                <div class="mb-3">
                        <label for="">why_you_join</label>
                        <textarea  name="why_you_join" id="mySummernote" rows="5" class="form-control"> {{$about->why_you_join}}</textarea>
                    </div>


                <div class="mb-3">
                    <label for="">what_our_goal</label>
                    <textarea  name="what_our_goal" id="mySummernote" rows="4" class="form-control"> {{$about->what_our_goal}} </textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image_cover_one</label>
                    <input type="file" name="image_cover_one" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Image_cover_two</label>
                    <input type="file" name="image_cover_two" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Image_cover_three</label>
                    <input type="file" name="image_cover_three" class="form-control"/>
                </div>











       <div class="row">

           <div class="col-md-12">
            <div class="mb-3">
                <button type="submit" value="Update" class="btn btn-primary">Save About</button>
            </div>
           </div>


       </div>



    </form>
        </div>
    </div>


</div>

@endsection
