<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Book;
use App\BookImage;
use Image;


class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books= Book::orderby('id','desc')->get();
        return view('backend.pages.books.index')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.books.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'catagory_id'    => 'required|numeric',
        ]);

        $book= new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->isbn_no = $request->isbn_no;
        $book->slug = Str::slug($request->title) ;
        $book->catagory_id = $request->catagory_id;
        $book->save();


        if (count($request->book_image)>0) {
            foreach ($request->book_image as $image) {
             // $image= $request->file('book_image');
              $img=time().'.'.$image->getClientOriginalExtension();
              $location= public_path('images/books/'.$img);
              Image::make($image)->save($location);
              $book_image = new BookImage;
              $book_image->book_id = $book->id;
              $book_image ->image= $img;
              $book_image->save();
            }
        }
        session()->flash('success','New book Added successfully');
        return redirect()->route('admin.books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('backend.pages.books.edit')->with('book',$book);
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
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'catagory_id'    => 'required|numeric',
        ]);
        
        $book= Book::find($id);
        $book->title = $request->title;
        $book->description = $request->description;
        $book->isbn_no = $request->isbn_no;
        $book->slug = Str::slug($request->title) ;
        $book->catagory_id = $request->catagory_id;
        $book->save();

        session()->flash('success','Book edited successfully');
        return redirect()->route('admin.books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $book= Book::find($id);
        if (!is_null($book)) {
          $book->delete();
        }

        session()->flash('success','book deleted successfully !');
        return back();
    }
}
