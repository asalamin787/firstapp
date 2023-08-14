@extends('layouts.app')
@section('content')
    .<div class="container">

        <div class="card card-body">
                <h2 class="d-flex justify-content-center m-3">Edit Post</h2>

            <form action="{{ route('update', $post->id) }}" method="post">
                @csrf

                <div class="d-flex justify-content-end">
                    <a href="{{ asset('post') }}" class="btn btn-success ">Back</a>
                </div>
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Name" name="name" value="{{$post->name}}">
                    </div>
                </div>
                
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-10">
                    
                        <select name="category" id="" class="form-control">
                            
                         @foreach($categories as $category)
                         <option @if($post->category_id== $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                         @endforeach
                       
                        </select>
                     </div>
                </div>
                
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="slyg" name="slug" value="{{$post->slug}}">
                    </div>
                </div>
                
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Detalails</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Detalails " name="details" value="{{$post->details}}">
                    </div>
                </div>
               
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label"> User Id</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword" placeholder="User Id" name="user_id" value="{{$post->user_id}}">
                    </div>
                </div>
                
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="inputPassword" placeholder="" name="image" value="{{$post->image}}">
                    </div>
                </div>
               

                <input class="btn btn-success mt-3" type="submit" name="submit">
            </form>

        </div>
    </div>
@endsection