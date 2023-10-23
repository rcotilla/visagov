<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => Book::simplePaginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();

        return back();
    }

    /**
     * Search and return the book from db
     */
    public function getBook(int $id)
    {
        return Book::find($id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request)
    {
        $book = Book::find($request->id);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }

    public function delete(Request $request)
    {
        $book = Book::find($request->id);
        $this->destroy($book);

        return back();
    }
}
