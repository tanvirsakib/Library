<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BookIssued;

class IssuedbookController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth:admin');
  }
    public function index()
    {
      $issuedbooks = BookIssued::all();
      return view('backend.pages.issue_book.issued_book',compact('issuedbooks'));
    }
    public function create()
    {
      return view('backend.pages.issue_book.issue_book');
    }

    public function store(Request $request)
    {
      $issuedbook = new BookIssued();
      $issuedbook->book_id = $request->bookid;
      $issuedbook->user_id = $request->user;
      $issuedbook->issues_date = now();
      $issuedbook->save();
      session()->flash('success',('Book Issued Successfully..'));
      return back();
    }

    // public function edit($id)
    // {
    //   $issuedbook = Issuedbook::find($id);
    //   return view('backend.pages.issuedbooksedit',compact('issuedbook'));
    // }

    public function update(Request $request,$id){
      $issuedbook = BookIssued::find($id);
      $issuedbook->status = 1;
      $issuedbook->return_date = now();
      $issuedbook->update();
      session()->flash('success',(' Issued Book Returned Successfully..'));
      return back();
    }
    public function notreturn(Request $request,$id){
      $issuedbook = BookIssued::find($id);
      $issuedbook->status = 0;
      $issuedbook->return_date = now();
      $issuedbook->update();
      session()->flash('success',(' Issued Book Returned Successfully..'));
      return back();
    }
}
