@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Edit a book #{{ $book->id }}</h2>
            <form action="/books/{{ $book->id }}/update" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Title: </label>
                    <input name="title" type="text" class="form-control" value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label for="">Description: </label>
                    <input name="description" type="text" class="form-control" value="{{ $book->description }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url('books/') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection