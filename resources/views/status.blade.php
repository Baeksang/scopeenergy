@extends('layouts.app')

@section('title')
	Status
@endsection

@section('content')

    <div class="container">
        <ul>Status</ul>
        <ul>
            @foreach($books as $book)
                <li>{{ $book }}</li>
            @endforeach
        </ul>
    </div>

@endsection
