@extends('master')

@section('content')
    <h1>Product List</h1>


<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">
        <a href="{{route('product.create')}}" class="btn btn-primary">Create Product</a>
    </div>

</div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">category</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $key=>$product)
                <tr>
            <th>{{$key+1}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
        </tr>
            @endforeach


        </tbody>
    </table>

@endsection
