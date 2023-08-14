@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card card-body">
        <div class="d-flex justify-content-around m-3">
            <h2>Create Form</h2>
            <a href="{{ route('category') }}" class="btn btn-success ">Back</a>
        </div>

        <form action="{{route('updates',$category->id)}}" method="post">
             @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input class="form-control form-control-lg type=" type="text" name="name" id="" value="{{$category->name}}"
                    aria-describedby="nameHelp">

            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input class="form-control form-control-lg type=" type="text" name="slug" id="" value="{{$category->slug}}"
                    aria-describedby="nameHelp">
            </div>
            
            <input class="btn btn-success mt-3" type="submit">
        </form>

    </div>
</div>
    
@endsection