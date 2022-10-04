@extends('layouts.master')

@section('title', 'the School dashboard')


@section('content')

<div class="container-fluid px-4">

        <div class="card mt-4">

            <div class="card-header">
                <h4 class="">Add Level</h4>
            </div>

            <div class="card-body">

                @if($errors->any())

                 <div class="alert alert-danger">

                @foreach($errors ->all() as $error)
                <div>{{$error}}</div>
                @endforeach

                 </div>
                @endif

                <form action="{{ url('admin/add-level') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="">Level Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>





                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Save Level</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>



</div>
@endsection
