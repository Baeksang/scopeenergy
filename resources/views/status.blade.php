@extends('layouts.app')
@section('title')
	발전현황
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
@parent

	<!-- bar 차트 -->
	<!-- script type="application/javascript"> -->
	<!--
		//function charUpdate(){
			//var updateWeekPowerChart = function(){
			//$.getJSON('/monitoring',function(mData){
			//		data =mData;
			//	});
			//console.log(data);
			//}
		//}

		/* Chart 정보를 URL 을 통해서 'o'에 반환한다. */
		//function getChartInformation(){
		//	$.getJSON('', function(o){
		//		chartInform = o;
		//	});
		//}

		-->

		<script src="{{ url('vendor/creat-area-charts.js') }}"></script>
		<script src="{{ url('vendor/creat-bar-charts.js') }}"></script>
		<script src="{{ url('vendor/creat-line-charts.js') }}"></script>
		<script src="{{ url('vendor/creat-pie-charts.js') }}"></script>
		<script src="{{ url('vendor/creat-doughnut-charts.js') }}"></script>
		<script src="{{ url('vendor/creat-gauge-charts.js') }}"></script>

@endsection



@section('content')

<div class="container" >



<div class="container-fluid">
		<h1 class="mt-4">Charts</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
			<li class="breadcrumb-item active">Charts</li>
		</ol>
		<div class="card mb-4">
			<div class="card-body">Chart.js is a third party plugin that is used to generate the charts in this template. The charts below have been customized - for further customization options, please visit the official <a target="_blank" href="https://www.chartjs.org/docs/latest/">Chart.js documentation</a>.</div>
		</div>
		<div class="card mb-4">
			<div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
			<div class="card-body"><canvas id="myChart" width="100vw" height="50vh"></canvas></div>
			<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-chart-bar mr-1"></i>    Week Power Generation</div>
					<div class="card-body"><canvas id="weekPower" width="50vw" height="30vh"></canvas></div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-chart-line mr-1"></i>    Day Power Generation</div>
					<div class="card-body"><canvas id="dayPower" width="50vw" height="30vh"></canvas></div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-chart-pie mr-1"></i>설비 용량</div>
					<div class="card-body"><canvas id="myDoughnutChart" width="50vw" height="30vh"></canvas></div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-chart-pie mr-1"></i>Pie Chart Example</div>
					<div class="card-body"><canvas id="myPieChart" width="50vw" height="30vh"></canvas></div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>현재 전력</div>
                    <div class="card-body"><canvas id="myGaugeChart" width="50vw" height="30vh"></canvas></div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>금일 발전량</div>
                    <div class="card-body"><canvas id="myTodayPowerChart" width="50vw" height="30vh"></canvas></div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>변환 효율</div>
                    <div class="card-body"><canvas id="myTRatioChart" width="50vw" height="30vh"></canvas></div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
