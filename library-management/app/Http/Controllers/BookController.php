<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        
        $books = Book::paginate(5); 

        return view('books.index', compact('books'));
    }

    
    public function create()
    {
        return view('books.create');  
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer|min:1000|max:' . date('Y'),
            'quantity' => 'required|integer|min:1',
        ]);

        Book::create($request->all());  
        return redirect()->route('books.index')->with('success', 'Book added successfully');
    }

    
    public function show(Book $book)
    {
        return view('books.show', compact('book')); 
    }

   
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));  
    }

    
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer|min:1000|max:' . date('Y'),
            'quantity' => 'required|integer|min:1',
        ]);

        $book->update($request->all()); 
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    
    public function destroy(Book $book)
    {
        $book->delete();  
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
