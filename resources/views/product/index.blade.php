@extends('app')

@section('title', 'Product')

@section('content')
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    <div class="row">
        <div>
            <div class="mx-auto my-3" style="text-align:center">
                <h2>CRUD Product</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-md-9 mx-auto">
        <div class="mb-3">
            <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
        </div>
        <table class="table table-bordered" style="text-align: center">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
