@extends('app')

@section('title', 'Category')

@section('content')

    <div class="row">
        <div class="mx-auto my-3" style="text-align:center">
            <h2>Add New Category</h2>
        </div>

    </div>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <div class="row col-md-9 mx-auto">
            <div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name Category">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <a class="btn btn-danger pull-right" href="{{ route('category.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary pull-left">Submit</button>
            </div>

        </div>

    </form>

@endsection
