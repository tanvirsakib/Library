<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Catagory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books= Book::orderby('id','desc')->paginate(12);
        return view('claint.home',compact('books'));
    }
}
