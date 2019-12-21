@extends('backend.pages.index')

@section('content')


   
      <div class="main-panel">
        <div class="content-wrapper">
       

<div class="card">
  <div class="card-header">
    Add Catagory
  </div>
  <div class="card-body">
    <form action="{{route ('admin.catagory.store')}}" method="post" enctype="multipart/form-data">

     @csrf

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="title"  placeholder="Catagory Name">
  </div>


  <div class="form-group">
    <label>Catagory Description</label>
   <textarea name="description" rows="8" cols="8" class="form-control"></textarea>
  </div>


  <button type="submit" class="btn btn-success">Create Catagory</button>
</form>
  </div>
</div>


      </div>
      <!-- main-panel ends -->
 </div>
@endsection
