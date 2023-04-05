@extends('app')

@section('title', 'Category')

@section('content')
    

    <div class="row">

        <div class="mx-auto my-3" style="text-align:center">
            <h2>Edit Category</h2>
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

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row col-md-9 mx-auto">
            <div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="my-2">
                <a class="btn btn-danger" href="{{ route('category.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
