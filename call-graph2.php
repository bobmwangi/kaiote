<!DOCTYPE html>

<html>
	<head>
		<title>Kaiote Random data- LineGraph</title>
		<style>
			.chart-container {
				width: 640px;
				height: auto;
			}
		</style>
	</head>
	<body>
		<div class="chart-container">
			<canvas id="mycanvas"></canvas>
		</div>
		
		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.min.js"></script>
		<script type="text/javascript" src="js/linegraph2.js"></script>
		<script type="text/javascript"> 
		$(document).ready(function(){
	$.ajax({
		url : "http://mamacare.or.ke/thingsnetwork/getdata2.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var timestamp = [];
			var value = [];

			for(var i in data) {
				timestamp.push("" + data[i].timestamp);
				value.push(data[i].value);
			}

			var chartdata = {
				labels: time_taken,
				datasets: [
					{
						label: "value",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: value
					},
					
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});
		</script>
	</body>
</html>