@extends('master')

@section('content')
    <h1>Create Product</h1>

    <form action="{{route('admin.product.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input name="name" placeholder="Enter Product Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input name="price" placeholder="Enter Product Price" type="number" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input name="picture" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
