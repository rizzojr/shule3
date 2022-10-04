@extends('layouts.master')

@section('title', 'Add About')


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
            <h4 class="mt-4">Add Abouts
            <a href="{{ url('admin/abouts/create')}}" class="btn btn-primary btn-sm float-end">Add About</a>

            </h4>
        </div>

        <div class="card-body">

            <form action="{{ url('admin/abouts') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">who_we_are</label>
                    <textarea  name="who_we_are" id="mySummernote" rows="4" class="form-control"> </textarea>
                </div>

                <div class="mb-3">
                    <label for="">what_we_do</label>
                    <textarea  name="what_we_do" id="mySummernote" rows="4" class="form-control"> </textarea>
                </div>

                <div class="mb-3">
                    <label for="">why_you_join</label>
                    <textarea  name="why_you_join" id="mySummernote" rows="4" class="form-control"> </textarea>
                </div>

                <div class="mb-3">
                    <label for="">what_our_goal</label>
                    <textarea  name="what_our_goal" id="mySummernote" rows="4" class="form-control"> </textarea>
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
                        <button type="submit" class="btn btn-primary">Save About</button>
                    </div>
                   </div>


               </div>



            </form>
        </div>
    </div>


</div>

@endsection
