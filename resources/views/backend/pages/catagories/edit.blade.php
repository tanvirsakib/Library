@extends('backend.pages.index')


@section('content')

   
      <div class="main-panel">
        <div class="content-wrapper">
       

<div class="card">
  <div class="card-header">
    Update Catagory
  </div>
  <div class="card-body">
    <form action="{{route ('admin.catagory.update',$catagory->id)}}" method="post" enctype="multipart/form-data">

     @csrf

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="title"  value="{{$catagory->name}}">
  </div>


  <div class="form-group">
    <label>Catagory Description</label>
   <textarea name="description" rows="8" cols="8" class="form-control">{!!$catagory->description!!}</textarea>
  </div>



  <button type="submit" class="btn btn-primary">Update Catagory</button>
</form>
  </div>
</div>


      </div>
      <!-- main-panel ends -->
 </div>


@endsection
  