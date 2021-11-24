@extends('master')

@section('content')
    <h1>Create Category</h1>

    @if(session()->has('msg'))
            <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                
            </ul>
        </div>
    @endif

    <form action="{{route('category.add')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input name="name" placeholder="Enter Category Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Category details</label>
            <input name="details" placeholder="Enter category details" type="text" class="form-control" id="" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
