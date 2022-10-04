@extends('layouts.master')

@section('title', 'Add Post')


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
            <a href="{{ url('admin/add-post')}}" class="btn btn-primary btn-sm float-end">Add Post</a>

            </h4>
        </div>

        <div class="card-body">

            <form action="{{ url('admin/add-post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Category</label>

                    <select type="text" name="category_id" required class="form-control">
                        <option value=""> -- select category -- </option>
                        @foreach ($category as $catitem)
                        <option value="{{$catitem->id}}">{{$catitem->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>



                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name="description" id="mySummernote" rows="4" class="form-control"> </textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control"/>
                </div>





                <h4>Status Mode</h4>
               <div class="row">
                   <div class="col-md-4">
                    <div class=" mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status"/>
                    </div>

                   </div>
                   <div class="col-md-8">
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
