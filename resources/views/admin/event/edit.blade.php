@extends('layouts.master')

@section('title', 'Edit Post')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">


        <div class="card-header">
            <h4 class="mt-4">Edit Events
            <a href="{{ url('admin/events')}}" class="btn btn-danger btn-sm float-end">Back</a>

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

       <form action="{{ url('admin/events/'.$event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="">Event Name</label>
            <input type="text" name="name" value="{{$event->name}}" class="form-control"/>
        </div>

        <div class="mb-3">
            <label for="">Event Date</label>
            <input type="number" name="date" value="{{$event->date}}" class="form-control"/>
        </div>

        <div class="mb-3">
            <label for="">Event Month</label>
            <input type="months" name="month" value="{{$event->month}}" class="form-control"/>
        </div>
        <div class="mb-3">
                    <label for="">Event Start</label>
                    <input type="time" name="start_time" value="{{$event->start_time}}"  class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Event End</label>
                    <input type="time" name="end_time" value="{{$event->end_time}}" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="">Location</label>
                    <input type="text" name="location"  value="{{$event->location}}" class="form-control"/>
                </div>

        <div class="mb-3">
            <label for="">Description</label>
            <textarea  name="description"  id="mySummernote" rows="4" class="form-control">{{$event->description}} </textarea>
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
