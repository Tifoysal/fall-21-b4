@extends('master')

@section('content')
    <h1>Create An employee</h1>

    <form action="{{route('employee.add')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Employee Name</label>
            <input name="name" placeholder="Enter employee Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Employee email</label>
            <input name="email" placeholder="Enter employee email " type="email" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">employee address</label>
            <input name="address" placeholder="Enter employee address" type="text" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
