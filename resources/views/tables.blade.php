@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $first)
                <tr>
                    
                    <td>{{$first->id}}</td>
                    <td>{{$first->name}}</td>
                    <td>{{$first->created_at}}</td>
                    <td>{{$first->updated_at}}</td>
                    
                    <td><a href="{{route('edit',$first->id)}}" class="btn btn-success">Edit</a></td>
                    
                </tr>
                @endforeach
    
            </tbody>
        </table>
    </div>
@endsection