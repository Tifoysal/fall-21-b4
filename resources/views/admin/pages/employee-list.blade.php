@extends('master')

@section('content')
    <h1>Employee List</h1>


<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">
        <a href="{{route('employee.create')}}" class="btn btn-primary">Create An Employee</a>
    </div>

</div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">First</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th>{{$employee->id}}</th>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->address}}</td>
                </tr>
            @endforeach
        
       
        </tbody>
    </table>

@endsection
