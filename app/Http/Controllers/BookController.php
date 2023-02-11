<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
       return view('book.all', [
        'books'=>Book::all()
       ]);
    }

    public function show(Book $book)
    {
        return view('book.detail', [
            'book'=> $book
        ]);    
    }

    public function create() 
    {
        return view('book.create', [
            'publisher' => Publisher::all()
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'publisher_id'=>'required',
            'nama'=>'required|max:255',
            'author'=>'required|max:255',
            'harga'=>'required',
            'rilis'=>'required'
        ]);
        Book::create($validateData);
        return redirect('/book/all')->with('succes', 'Book has been added !');
    }
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/book/all')->with('succes', 'Data has been deleted !');
    }

    public function edit( Book $book)
    {
        return view('book.edit', [
            'publisher' => Publisher::all(),
            "book"      => $book
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $validateData = $request->validate([
            'publisher_id'=>'required',
            'nama'=>'required|max:255',
            'author'=>'required|max:255',
            'harga'=>'required',
            'rilis'=>'required'
        ]);

        Book::where('id', $book->id)
        ->update($validateData);
        return redirect('/book/all')->with('succes', 'Data has been updated !');
    }
}
