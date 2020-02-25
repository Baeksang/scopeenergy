@extends('layouts.app')
@section('title')
	발전원 설치 정보
@endsection

@section('script')

    <!-- CDN Link -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>


@endsection


@section('js')

@endsection



@section('content')

<div class="container mx-auto">
        <div class="card mb-4"> 
            <div class="card-header"><i class="fas fa-table mr-2"></i> 발전원 설치 정보</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Create At</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Create At</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        
                        <tbody>
                      
                            <tr>
                                
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                               
                            </tr>
                         
                        </tbody>
                       
                       
                    </table>
                </div>
            </div>
        </div>
   
    
    
    
    <div class="col text-right">
        <a href="/tasks/create">
            <button class="btn btn btn-success" type="">Create</button>
        </a>
    </div>

   
    
    <!-- <button class="btn btn-default">글쓰기</button> 

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
    </nav> -->
</div>
@endsection
