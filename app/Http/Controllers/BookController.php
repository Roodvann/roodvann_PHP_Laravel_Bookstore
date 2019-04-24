<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;
use Illuminate\Http\Request;
//use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index', ['books' => $books]);
        //var_dump($book);
        //
    }
//    // функція customize (): void - метод-заглушка, виводить (через echo) рядок про те, що викликана
//    public static function customize() {
//        echo "The function <strong> customize (): void</strong> is called for class " . get_class() . "!<br>";
//    }
//    public function index(Book $book)
//    {
//        $books = $book->orderBy('id', 'asc')->get();
////        dd($posts);
////        return view('post.index', ['posts' => $posts]);
//        return view('book.index', compact('books'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Book $book, BookRequest  $request)
    {
        $book->create($request->all());
        return redirect()->route('book.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('book.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
        //
    }
}
