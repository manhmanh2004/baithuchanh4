<?php
namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use App\Models\Reader;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    
    public function index()
    {
        $readers = Reader::all();
        $borrows = Borrow::paginate(5);;
        return view('borrows.index', compact('borrows', 'readers'));
    }

    
    public function create()
    {
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.create', compact('readers', 'books'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date',
        ]);

        Borrow::create($request->all());
        return redirect()->route('borrows.index')->with('success', 'Book borrowed successfully');
    }

   
    public function show(Borrow $borrow)
    {
        return view('borrows.show', compact('borrow'));
    }

    
    public function edit(Borrow $borrow)
    {
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.edit', compact('borrow', 'readers', 'books'));
    }

    
    public function update(Request $request, Borrow $borrow)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date',
        ]);

        $borrow->update($request->all());
        return redirect()->route('borrows.index')->with('success', 'Borrow record updated successfully');
    }

   
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return redirect()->route('borrows.index')->with('success', 'Borrow record deleted successfully');
    }

   
    public function showHistory($readerId)
    {
        
        $borrows = Borrow::where('reader_id', $readerId)->paginate(5);

        $reader = Reader::findOrFail($readerId);

        return view('borrows.history', compact('borrows', 'reader'));
    }
}
