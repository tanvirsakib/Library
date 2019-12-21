@extends('backend.pages.index')

@section('content')
 @if (Session::has('success'))
    <div class="alert alert-success">
      <p>{{ Session::get('success') }}</p>
    </div>
  @endif

  @if (Session::has('error'))
    <div class="alert alert-danger">
      <p>{{ Session::get('error') }}</p>
    </div>
  @endif
  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Issued Book
        </div>
                <div class="card-body">

              <form role="form" method="post" action="{!! route('admin.issuedbook.store') !!}">
                @csrf
                <div class="form-group">
                  <label>User <span style="color:red;">*</span></label>
                  <select  class="form-control" name="user" id="get_student_name" readonly>
                    @foreach (App\User::get() as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach

                 </select>
                  </div>

                  <div class="form-group">

                  </div>

                  <div class="form-group">
                  <label>Select Book <span style="color:red;">*</span></label>
                  <select  class="form-control" name="bookid" id="get_book_name" readonly>
                    <option>Select Book Name</option>
                    @foreach (App\Book::get() as $book)
                      <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
                 </select>
                  </div>

                   <div class="form-group">


                   </div>
                  <button type="submit" name="issue" id="submit" class="btn btn-info">Issue Book </button>

                </form>

            </div>
        </div>
  </div>
  </div>
@endsection