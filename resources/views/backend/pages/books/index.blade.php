@extends('backend.pages.index')


@section('content')

   
      <div class="main-panel">
        <div class="content-wrapper">
       

<div class="card">
  <div class="card-header">
    Manage Books
  </div>
  <div class="card-body">
    
    <table class="table table-hover table-striped" id="dataTable">
      <thead>
        <tr>
          <th>#</th>
          <th>Book Title</th>
          <th>Descripton</th>
          <th>ISBN NO</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($books as $book)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>ISBN {{ $book->isbn_no }}</td>
            <td><a href="{{route('admin.book.edit', $book->id)}}" class="btn btn-success">Edit</a>
            <a href="#deleteModal{{$book->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>


            <!--Delete Modal -->
              <div class="modal fade" id="deleteModal{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('admin.book.delete', $book->id)}}" method="post">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-success" >Delete</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


            </td>
            </tr>
          @endforeach
      </tbody>



    </table>
  </div>
</div>


      </div>
      <!-- main-panel ends -->
 </div>


@endsection
  