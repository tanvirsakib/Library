@extends('claint.index')

@section('content')
  <div class="events page_section">
    <div class="container">
      
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h1>All Books</h1>
          </div>
        </div>
      </div>
      
      <div class="event_items">
        <div class="row">

         @foreach ($books as $book)

         <div class="col-md-3">
              <div class="card">
                @php $i = 1; @endphp

                @foreach ($book->images as $image)
                  @if ($i > 0)
                      <a href="">
                        <img class="card-img-top feature-img" src="{{ asset('images/books/'. $image->image) }}" alt="{{ $book->title }}" >
                      </a>
                  @endif

                  @php $i--; @endphp
                @endforeach

                <div class="container card-body">
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
        
    </div>
  </div>

@endsection

