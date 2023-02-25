<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  
use Illuminate\Support\Facades\DB;  


class DashboardBookController extends Controller
{
    public function index()
    {
       return view('dashboard.book.all', [
        'publisher' => Publisher::all(),
        'books' => Book::filter(request(['search', 'category']))->paginate(5)
       ]);
    }

    public function show(Book $book)
    {
        return view('dashboard.book.detail', [
            'book'=> $book
        ]);    
    }

    public function create() 
    {
        return view('dashboard.book.create', [
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
        return redirect('/dashboard/book/all')->with('succes', 'Book has been added !');
    }
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/dashboard/book/all')->with('succes', 'Data has been deleted !');
    }

    public function edit( Book $book)
    {
        return view('dashboard.book.edit', [
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
        return redirect('/dashboard/book/all')->with('succes', 'Data has been updated !');
    }

    public function publisher(Publisher $publisher){
        return view('publisher.all', [
            'publishers' => publisher::paginate(5),
            'book' => $book->id
        ]);

    }
}
