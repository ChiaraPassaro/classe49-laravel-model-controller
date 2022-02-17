@extends('layouts.base')

@section('content')
   @foreach ($books as $book)
       <div class="card">
           <h2>{{ $book->title }}</h2>
           <h3>{{ $book->genre }}</h3>
       </div>
   @endforeach
@endsection