@extends('master')

@section('content')
    <h1>Category List</h1>


    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <a href="{{route('admin.category.form')}}" class="btn btn-primary">Create Category</a>
        </div>

    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">details</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $key=>$category)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->details}}</td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection
