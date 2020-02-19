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
            <a href="/tasks/{{ $task->id }}/edit">
                <button class="btn btn-primary" type="">Edit</button>
            </a>
            <form method="POST" action="/tasks/{{ $task->id }}" class="float-right ml-2">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="">Delete</button>
              
            </form>

        </div>
        
        
    </div>
    <div>
        <ul>
            <!-- {{ $task }} -->
            
            Project Name : {{ $task->projectname }} 
            <small class="float-right">Created at {{ $task->created_at }}</small><br>
            <small class="float-right">Updated at {{ $task->updated_at }}</small><br>

            Project ID : {{ $task->projectid }}<br>

        </ul>
    </div>
</div>
@endsection