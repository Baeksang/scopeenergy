@extends('layouts.app')

@section('title')
	Status
@endsection

@section('content')
	Status

	<ul>
		@foreach($books as $book)
			<li>{{ $book }}</li> 
		@endforeach
	</ul>
	
@endsection