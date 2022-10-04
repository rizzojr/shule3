@extends('layouts.master')

@section('title', 'action music dashboard')


@section('content')

<div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Price</h4>
                <a href="{{ url('admin/prices')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </div>

            <div class="card-body">

                @if($errors->any())

                 <div class="alert alert-danger">

                @foreach($errors ->all() as $error)
                <div>{{$error}}</div>
                @endforeach

                 </div>
                @endif

                <form action="{{ url('admin/update-price/'.$price->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Price Name</label>
                        <input type="text" name="name" value="{{$price->name}}" class="form-control">
                    </div>







                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Price</button>
                        </div>
                    </div>

                </form>


        </div>

    </div>

</div>
@endsection
