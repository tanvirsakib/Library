<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Catagory;
use Image;

class CatagoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   public function index()
    {
    	$catagories = Catagory::orderBy('id','desc')->get();
    	return view('backend.pages.catagories.manageCatagory', compact('catagories'));
    } 

    public function create()
    {
    	return view('backend.pages.catagories.create');
    }

    public function store(Request $request)
    {
     $this->validate($request,
    		[
    		'name'=>'required',
        ]
 	);
        $catagory = new Catagory();
        $catagory->name = $request->name;
        $catagory->description = $request->description;

        $catagory->save();
        session()->flash('success','A new catagory added successfully');
        return redirect()->route('admin.catagories');
    }

    public function edit($id)
    {
        $catagory = Catagory::find($id);
        if (!is_null($catagory)) {
            return view('backend.pages.catagories.edit',compact('catagory'));
        }
        else{
            return redirect()->route('admin.catagories');
        }
    }

     public function update(Request $request,$id)
    {
     $this->validate($request,
            [
            'name'=>'required',
            ]
    );
        $catagory = Catagory::find($id);
        $catagory->name = $request->name;
        $catagory->description = $request->description;

        $catagory->save();
        session()->flash('success','Catagory updated successfully');
        return redirect()->route('admin.catagories');
    }

    public function delete($id)
   {
    $catagory = Catagory::find($id);
    if (!is_null($catagory)) {
      $catagory->delete();
    }

    session()->flash('success','Catagory deleted successfully !');
    return back();
   }



}
