@extends('layouts.app')

@section('title')
	Diagram
@endsection

@section('content')
	Diagram

	<ul>
		@foreach($books as $book)
			<li>{{ $book }}</li> 
		@endforeach
	</ul>
	
@endsection