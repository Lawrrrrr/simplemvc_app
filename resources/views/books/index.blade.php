@extends('master')

@section('content')
    <div class="container text-center">
        <h2 class="py-3">Online Library</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td><a href=" {{ url('books/' . $book->id) }} ">{{ $book->id }}</a></td>
                        <td><a href="{{ url('books/' . $book->id) }}" class="text-dark">{{ $book->title }}</a></td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <a href="{{ url('books/'. $book->id . '/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('books/'. $book->id . '/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h5><a href="{{ url('books/create') }}" class="btn btn-primary">Store a new book</a></h5>
    </div>
@endsection