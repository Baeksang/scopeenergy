@extends('layouts.app')
@section('title')
	Task
@endsection

@section('script')
	
@endsection
	

@section('js')

@endsection



@section('content')

<div class="container mx-auto">
    <div class="d-flex">
        <h1 class="font-weight-bold text-3xl d-flex">수용가 정보</h1>
        <div class="col text-right">
            <a href="/tasks/create">
                <button class="btn btn btn-success" type="">Create</button>
            </a>
                    </div>
    </div>
   
    <ul>
        <!-- {{ $tasks }} -->
        @foreach($tasks as $task)
            <a href="/tasks/{{ $task->id}}">
                <li class="border my-3 p-3">Project ID : {{ $task->projectid }} 
                    <small class="float-right">Created at {{ $task->created_at }}</small><br>
                    <small class="float-right">Updated at {{ $task->updated_at }}</small><br>
                </li>                
            </a>
        @endforeach
    </ul>
</div>



@endsection