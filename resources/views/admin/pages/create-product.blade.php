@extends('master')

@section('content')
    <h1>Create Product</h1>

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input placeholder="Enter Product Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input placeholder="Enter Product Price" type="number" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
