<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Facade\FlareClient\View;
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
        $books = Book::orderBy('id','DESC')->get();
        return view('welcome',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('create');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'writer' => 'required',
            'photo_name' => ['sometimes','image', 'mimes:jpg,jpeg, png', 'max:5000']
        ]);

        if(request()->has('photo_name')){
            $photouload = request()->file('photo_name');
            $photoname = time() . '.' . $photouload->getClientOriginalExtension();
            $photopath = public_path('/images/');
            $photouload->move($photopath,$photoname);
        }

        $book = new Book([
            'name' =>  $request->get('name'),
            'subject' => $request->get('subject'),
            'writer' => $request->get('writer'),
            'photo_name' => '/images/' . $photoname,
            'user_id' => auth()->id()
        ]);

         $book->save();
         return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $user = \Auth::user();
        $books = Book::orderBy('id','DESC')->where('user_id',$user->id)->get();
        return view('show',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $validatData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            //'writer' => 'required',
            //'photo_name' => 'required'
        ]);

        $book->update($request->all());
        return redirect(route('show'));
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
        return redirect(route('show'));
    }
}
