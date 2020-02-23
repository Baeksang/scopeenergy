@extends('layouts.app')

@section('title')
	Diagram
@endsection

@section('content')

    <div class="container">

        <ul>Diagram</ul>

        <ul>
            @foreach($books as $book)
                <li>{{ $book }}</li>
            @endforeach
        </ul>
    </div>


@endsection
