@extends('master')

@section('content')
    <h1>User List</h1>


    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            {{-- <a href="{{route('admin.category.form')}}" class="btn btn-primary">Create Category</a> --}}
        </div>

    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $key=>$user)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>
                    <a href="">delete</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection
