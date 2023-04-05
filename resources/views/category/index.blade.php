@extends('app')

@section('title', 'Category')

@section('content')
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    <div class="row">
        <div>
            <div class="mx-auto my-3" style="text-align:center">
                <h2>CRUD Category</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-md-9 mx-auto">
        <div class="pull-right my-2">
            <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>

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
