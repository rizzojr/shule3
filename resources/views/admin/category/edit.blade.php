@extends('layouts.master')

@section('title', 'action music dashboard')


@section('content')

<div class="container-fluid px-4">
    
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Category</h4>
                <a href="{{ url('admin/category')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </div>

            <div class="card-body">

                @if($errors->any())

                 <div class="alert alert-danger">

                @foreach($errors ->all() as $error)
                <div>{{$error}}</div>
                @endforeach
                
                 </div> 
                @endif

                <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control">
                    </div>

                   

                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea  name="description" id="mySummernote" rows="5" class="form-control"> {{$category->description}}</textarea>
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox"  name="navbar_status" value="{{$category->navbar_status =='1' ? 'checked':'1'}}"/>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" value="{{$category->status =='1' ? 'checked':'1'}}"/>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>

                </form>

            
        </div>
    
    </div>

</div>
@endsection