@extends('layouts.master')

@section('title', 'Edit Post')


@section('content')
<div class="container-fluid px-4">


    <div class="card mt-4">


        <div class="card-header">
            <h4 class="mt-4">Details
            <a href="{{ url('admin/events')}}" class="btn btn-danger btn-sm float-end">Back</a>

            </h4>
        </div>

        <div class="card-body">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$event->name}}</h3>
                        <h6 class="card-subtitle">{{$event->date}} {{$event->time}}</h6>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6">
                                <div class="white-box text-center"><img src="{{Storage::url($event->image)}}" class="img-responsive"></div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6">
                                <h4 class="box-title mt-5">description</h4>
                                <p>{{$event->description}}</p>


                            </div>

                        </div>
                    </div>
                </div>

        </div>
    </div>


</div>

@endsection
