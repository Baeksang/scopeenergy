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

        {!! $tasks->render() !!}





    <div class="table-responsive-sm">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">번호</th>
                <th scope="col">제목</th>
                <th scope="col">작성자</th>
                <th scope="col">등록일</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    </div>
    <hr/>


    <div class="col text-right">
        <a href="/tasks/create">
            <button class="btn btn btn-success" type="">Create</button>
        </a>
    </div>


    <!-- <button class="btn btn-default">글쓰기</button> -->

    <nav aria-label="Page navigation example" >
        <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
    </nav>
</div>
@endsection
