@extends('app')

@section('title', 'Edit Product')

@section('content')

    <div class="row">
        <div>
            <div class="mx-auto my-3" style="text-align:center">
                <h2>Edit Product</h2>
            </div>
            <div class="ms-5">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row col-md-9 mx-auto">
            <div class="my-2">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="my-2">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="integer" name="price" value="{{ $product->price }}" class="form-control"
                        placeholder="Price">
                </div>
            </div>
            <div class="my-2">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="my-2">
                <select name="category_id" class="form-select" aria-label="Default select example">
                    @foreach ($category as $key => $value)
                        <option value="{{ $value->id }}" {{ $value->id == $product->category_id ? 'selected' : '' }}>
                            {{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
