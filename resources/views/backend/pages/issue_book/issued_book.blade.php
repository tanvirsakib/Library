@extends('backend.pages.index')

@section('content')
<div class="container">
  <div class="row">

    <div class="col-md-10">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User name</th>
      <th scope="col">Book</th>
      <th scope="col">Issued date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($issuedbooks as $i)


    <tr>

      <td>{{$i->user->name}}</td>
      <td>{{$i->book->title}}</td>
        <td>{{$i->issues_date}}</td>
        <td class="center">
          @if($i->return_date==""||$i->status==0)
        Not Return Yet
        @else
        {{$i->return_date}}
          @endif
        </td>
      <td>
        @if ($i->return_date==""||$i->status==0)
          <a href="{!! route('admin.issuedbook.update',$i->id) !!}"><button class="btn btn-primary" type="button" name="button">Return</button></a>
        @else
      <a href="{!! route('admin.issuedbook.notreturn',$i->id) !!}"><button class="btn btn-danger" type="button" name="button">Not Return</button></a>
          @endif


      </td>
    </tr>


    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>
  @stop