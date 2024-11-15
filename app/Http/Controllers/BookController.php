<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::latest()->get();
        $categories = Category::latest()->get();

        return view('books.create', ['authors' => $authors, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['max:500'],
            'publication_year' => ['max:100'],
            'author_id' => ['exists:authors,id'],
            'category_id' => ['exists:categories,id'],
            'image' => ['file', 'mimes:jpeg,png,jpg,gif,svg', 'max:10000'],
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('books_images', $request->image);
        }

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'publication_year' => $request->publication_year,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'image' => $path,
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
