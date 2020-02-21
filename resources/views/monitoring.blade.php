@extends('layouts.app')
@section('title')
	Monitoring
@endsection

@section('script')
	<!-- CDN Link -->
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

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

		<script src="{{ url('vendor/creat-bar-charts.js') }}"></script>
		<script src="{{ url('vendor/creat-line-charts.js') }}"></script>

@endsection



@section('content')

<div class="container" >







	<div>
			<canvas id="weekPower" style="height: 30vh; width: 50vw"></canvas>
	</div>
	<!-- <div>
			<canvas id="dayPower"></canvas>
	</div> -->
	<div class="row my-3">
		<div class="col">
			<h4>태양광 발전 현황</h4>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<canvas class="myChart"></canvas>
				</div>
				<div class="card-body text-center text-align-center">
					<h4>Multi</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<canvas class="dayPower"></canvas>
				</div>
				<div class="card-body text-center text-algin-center">
					<h4>Pie</h4>
				</div>
			</div>
		</div>
	</div>


</div>



@endsection



