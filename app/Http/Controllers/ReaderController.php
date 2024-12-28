<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    // Hiển thị danh sách tất cả độc giả
    public function index()
    {
        $readers = Reader::paginate(5);;
        return view('readers.index', compact('readers'));
    }

  
    public function create()
    {
        return view('readers.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Reader::create($request->all());
        return redirect()->route('readers.index')->with('success', 'Reader added successfully');
    }

    
    public function show(Reader $reader)
    {
        return view('readers.show', compact('reader'));
    }

   
    public function edit(Reader $reader)
    {
        return view('readers.edit', compact('reader'));
    }

    
    public function update(Request $request, Reader $reader)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $reader->update($request->all());
        return redirect()->route('readers.index')->with('success', 'Reader updated successfully');
    }

   
    public function destroy(Reader $reader)
    {
        $reader->delete();
        return redirect()->route('readers.index')->with('success', 'Reader deleted successfully');
    }
}
