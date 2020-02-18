@extends('layouts.app')
@section('title')
	Monitoring
@endsection

@section('script')
	<!-- CDN Link -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> 
@endsection
	

@section('js')
@parent
	
	<!-- bar 차트 -->
	<script type="application/javascript">
		
			
			/* bar chart - Start */
			var ctx = document.getElementById('weekPower');
			var weekPower = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'],
					datasets: [{
						label: '일 일 발전량',
						data: [12, 19, 3, 5, 2, 3, 8],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 99, 132, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
							'rgba(255, 99, 132, 1)'
						],
						borderWidth: 1
					}]
				},
				options: { 
					// responsive, its default value is true. If you want to resize the canvas, it should be "true"
					responsive: true,   // false to resize a canvas
					scales: { 
						yAxes: [{ 
							ticks: { 
								beginAtZero: true 
							}
						}]
					}
				}
			}); 
			/* bar chart - End */

			/* mixed chart - Start */
			
			const mydata = [10, 20, 30, 40];
			const mydataHalf = [5, 10, 20, 7];

			var ctx = document.getElementsByClassName("myChart");

			var mixedChart = {
				type: 'bar',
				labels: [
					'1', '2', '3', '4'
				],
				datasets: [
					{
						label: 'Bar Dataset',
						data: mydata,
						backgroudColor: 'rgba(256, 0, 0, 0.1)'

					},
					{
						label: 'Line Dataset',
						data: mydataHalf,
						backgroudColor: 'transparent',
						borderColor: 'skyblue',
						type: 'line'
					}
				]
			};
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: mixedChart,
				options: {
					legend: {
						display: true
					}
				}
			});
			
			/* mixed chart - End */
	</script>
@endsection



@section('content')
<div class="container" > 
	<div>
			<canvas id="weekPower"></canvas> 
	</div>
	<div class="row my-3"> 
		<div class="col"> 
			<h4>Bootstrap 4 Chart.js - Chart</h4> 
		</div> 
	</div> 
	<div class="row my-2"> 
		<div class="col-md-6"> 
			<div class="card"> 
				<div class="card-body"> 
					<canvas class="myChart"></canvas> 
				</div> 
				<div class="card-body text-center text-align-center"> 
					<h3>Multi</h3> 
				</div> 
			</div> 
		</div> 
	</div> 	
	<div class="row my-2"> 
		<div class="col-md-6"> 
			<div class="card"> 
				<div class="card-body"> 
					<canvas class="myChart"></canvas> 
				</div> 
				<div class="card-body text- text-"> 
					<h3>Pie</h3> 
				</div> 
			</div> 
		</div> 
	</div>


</div>

@endsection



