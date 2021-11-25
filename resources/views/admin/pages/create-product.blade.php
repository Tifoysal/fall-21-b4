@extends('master')

@section('content')
    <h1>Create Product</h1>

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input name="name" placeholder="Enter Product Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input name="price" placeholder="Enter Product Price" type="number" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Category</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach


            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Product image</label>
            <input name="image" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
