@extends('layouts.app')
@section('content')
    .<div class="container">

        <div class="card card-body">
                <h2 class="d-flex justify-content-center m-3">Create Category</h2>



            <form action="{{ url('category-store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-end">
                    <a href="{{ asset('category') }}" class="btn btn-success ">Back</a>
                </div>
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="slyg" name="slug">
                    </div>
                </div>
                
                <input class="btn btn-success mt-3" type="submit" name="submit">
            </form>

        </div>
    </div>
@endsection
