@extends('layouts.master')

@section('title', 'action music dashboard')


@section('content')

<div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Cate</h4>
                <a href="{{ url('admin/cates')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </div>

            <div class="card-body">

                @if($errors->any())

                 <div class="alert alert-danger">

                @foreach($errors ->all() as $error)
                <div>{{$error}}</div>
                @endforeach

                 </div>
                @endif

                <form action="{{ url('admin/update-cate/'.$cate->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Cate Name</label>
                        <input type="text" name="name" value="{{$cate->name}}" class="form-control">
                    </div>







                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Cate</button>
                        </div>
                    </div>

                </form>


        </div>

    </div>

</div>
@endsection
