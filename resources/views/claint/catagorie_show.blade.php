@extends('claint.index')

@section('content')
  <div class="container row mt-4">
    <div class="col-md-4">
    </div>
    <div class="col-md-12">
      <div class="widget">
         <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <h1>All Books in {{$catagory->name}} Catagory</h1>
            </div>
          </div>
        </div>
        @php
        $books = $catagory->books()->paginate(9);
        @endphp

        @if($books->count() > 0)
          <div class="event_items">
            <div class="row">

             @foreach ($books as $book)

                <div class="col-md-3">
                  <div class="card">
                    @php $i = 1; @endphp

                    @foreach ($book->images as $image)
                      @if ($i > 0)
                          <a href="">
                            <img class="card-img-top feature-img" src="{{ asset('images/books/'. $image->image) }}" >
                          </a>
                      @endif

                      @php $i--; @endphp
                    @endforeach

                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="">{{ $book->title }}</a>
                      </h4>
                      <p class="card-text">ISBN - {{ $book->isbn_no }}</p>
                      <p class="card-text">Catarory: {{ $book->catagory->name }}</p>
                      @if ($book->status == 1)
                        <p class="btn btn-info">Available</p>
                      @else
                        <p class="btn btn-danger">Unavailable</p>
                      
                  @endif
                    </div>
                  </div>
                </div>

              @endforeach
              </div>
              <div class="mt-4 pagination">
                {{ $books->links() }}
              </div>

          </div>
        @else 
        <div class="alert alert-warning">
          No Books available in this catagory !!
        </div>
        @endif
      </div>
    </div>
  </div>
  


@endsection

