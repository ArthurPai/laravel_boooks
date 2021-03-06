<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user_id = AUTH::user()->id;
//        $books = Book::where('user_id', '=', $user_id)->get();
        $books = AUTH::user()->books()->get();
//        $books = Book::get();

        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'cover' => 'required|url',
        ]);

        $book = new Book;

        $book->title = $request->title;
        $book->description = $request->description;
        $book->cover = $request->cover;

        $user = Auth::user();
        $user->books()->save($book);

        return redirect()->route('books.index')->with('success', '新增成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Auth::user()->books()->findOrFail($id);

        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Auth::user()->books()->findOrFail($id);

        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Auth::user()->books()->findOrFail($id);

        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'cover' => 'required|url',
        ]);

        $book->title = $request->title;
        $book->description = $request->description;
        $book->cover = $request->cover;
        $book->save();

        return redirect()->route('books.index')->with('success', '更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Auth::user()->books()->findOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
