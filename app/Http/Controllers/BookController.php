<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.products.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'stock' => ['required', 'integer'],
            'bookImage' => ['image', 'mimes:jpg,jpeg,png', 'max:10240'],
        ]);

        $validated['bookImage'] = $request->file('bookImage')->store('images', 'public');
        Book::create($validated);
        return redirect()->route('books.index')->with('success', 'The book has been successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('admin.products.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.products.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'stock' => ['required', 'integer'],
            'bookImage' => ['image', 'mimes:jpg,jpeg,png', 'max:10240'],
        ]);

        if ($request->hasFile('booImage')) {
            $validated['bookImage'] = $request->file('bookImage')->store('images', 'public');
        } else {
            unset($validated['bookImage']);
        }

        $book->update($validated);
        return redirect()->route('books.index')->with('success', 'The book has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'The book has been successfully deleted');
    }
}
