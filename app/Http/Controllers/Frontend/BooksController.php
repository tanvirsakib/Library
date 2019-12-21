<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Catagory;

class BooksController extends Controller
{
    public function show($id)
   {
       $catagory = Catagory::find($id);
       return view('claint.catagorie_show',compact('catagory'));
   }
}
