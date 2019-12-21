@extends('backend.pages.index')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Book
        </div>
        <div class="card-body">
          <form action="{{ route('admin.book.update',$book->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            

            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" required aria-describedby="emailHelp" placeholder="Book Title" value="{{$book->title}}">
            </div>
            
            
            <div class="form-group">
              <label for="exampleInputEmail1">Select Category</label>
              <select class="form-control" name="catagory_id" required>
                <option value="">Please select a category for the product</option>
                @foreach (App\Catagory::orderBy('name', 'asc')->get() as $catagory)
                  <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>                 
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label >ISBN NO</label>
              <input type="text" class="form-control" name="isbn_no" id="title"  placeholder="ISBN NO"value="{{$book->isbn_no}}" >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{$book->description}}</textarea>
            </div>

            <div class="form-group">
              <label for="book_image">Book Image</label>

              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="book_image[]" multiple="true" id="book_image" >
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  @endsection