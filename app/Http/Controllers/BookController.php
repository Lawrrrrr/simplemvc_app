<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }

    public function display()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request) 
    {
        // Function to save data to DB
        // dd($request->title); To dump and die the request data
        // Create new book record
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->save();
        return redirect('books/'. $book->id);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->description = $request->description;
        $book->save();
        return redirect('/books');
    }

    public function edit(Request $request)
    {
        $book = Book::find($request['id']);
        return view('/books/edit', compact('book'));
    }

    public function show(Request $request)
    {
        // Find function will get the record of a data
        $book = Book::find($request['id']);
        // dd($book);
        return view('/books/show', compact('book'));
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}
