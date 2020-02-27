@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="/img/book.jpeg" alt="" class="card-img-top">
                    <h3 class="card-title">Book # {{ $book->id }}: {{ $book->title }}</h3>
                    <p class="card-text">{{ $book->description }}</p>
                    <a href="{{ url('books/') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection 