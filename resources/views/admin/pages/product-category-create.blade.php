@extends('master')

@section('content')
    <h1>Create Category</h1>

    <form action="{{route('category.add')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input name="name" placeholder="Enter Category Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        

        <div class="mb-3">
            <label for="" class="form-label">Category details</label>
            <input name="details" placeholder="Enter category details" type="text" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
