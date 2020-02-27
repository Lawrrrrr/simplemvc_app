@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Create a book</h2>
            <form action="/books/new" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Title: </label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description: </label>
                    <input name="description" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ url('books/') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection