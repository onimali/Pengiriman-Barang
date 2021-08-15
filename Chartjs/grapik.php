<?php 
	include 'koneksibar.php';
	?>

	<div style="width: 800px;margin: 10px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>

	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Penjualan</th>
				<th>Pembelian</th>
				<th>Laba</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($connect,"select * from tbjual");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['harju']; ?></td>
					<td><?php echo $d['harbel']; ?></td>
					<td><?php echo $d['laba']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
	
	<script type="text/css">
		var ctx = document.getElementById("myChart").getContext('2d');
		 // var ctx = document.getElementById("demobar").getContext("2d");
    	  var data = {
    	            labels: [<?php while ($d = mysqli_fetch_array($data)) { echo '"' . $p['Merk'] . '",';}?>],
    	            datasets: [
    	            {
    	              label: "Penjualan Smartphone",
    	              data: [<?php while ($d = mysqli_fetch_array($data)) { echo '"' . $p['Penjualan'] . '",';}?>],
                    backgroundColor: [
                      "rgba(59, 100, 222, 1)",
                      "rgba(203, 222, 225, 0.9)",
                      "rgba(102, 50, 179, 1)",
                      "rgba(201, 29, 29, 1)",
                      "rgba(81, 230, 153, 1)",
                      "rgba(246, 34, 19, 1)"]
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'bar',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No", "Penjualan", "Pembelian", "Laba"],
				datasets: [{
					label: 'Penjualan',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($connect,"select * from tbjual where fakultas='No'");
					echo mysqli_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($connect,"select * from tbjual where fakultas='Penjualan'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_fisip = mysqli_query($connect,"select * from tbjual where fakultas='fisip'");
					echo mysqli_num_rows($jumlah_fisip);
					?>, 
					<?php 
					$jumlah_pertanian = mysqli_query($connect,"select * from tbjual where fakultas='pertanian'");
					echo mysqli_num_rows($jumlah_pertanian);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
<!DOCTYPE html>
<html>
<head>
 <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highstock Example</title>

		<style type="text/css">
#container {
	min-width: 310px;
	max-width: 800px;
}
		</style>
	</head>
	<body>

<script src="../../code/highstock.js"></script>
<script src="../../code/modules/data.js"></script>

<div id="container"></div>

<button id="large">Large</button>
<button id="small">Small</button>
<button id="auto">Auto</button>


		<script type="text/javascript">
Highcharts.getJSON('https://www.highcharts.com/samples/data/aapl-c.json', function (data) {

    // Create the chart
    var chart = Highcharts.stockChart('container', {

        chart: {
            height: 400
        },

        title: {
            text: 'Highstock Responsive Chart'
        },

        subtitle: {
            text: 'Click small/large buttons or change window size to test responsiveness'
        },

        rangeSelector: {
            selected: 1
        },

        series: [{
            name: 'AAPL Stock Price',
            data: data,
            type: 'area',
            threshold: null,
            tooltip: {
                valueDecimals: 2
            }
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    chart: {
                        height: 300
                    },
                    subtitle: {
                        text: null
                    },
                    navigator: {
                        enabled: false
                    }
                }
            }]
        }
    });


    $('#small').click(function () {
        chart.setSize(400);
    });

    $('#large').click(function () {
        chart.setSize(800);
    });

    $('#auto').click(function () {
        chart.setSize(null);
    });
});

		</script>
	<title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS - www.malasngoding.com</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	
</head>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS<br/>- www.malasngoding.com -</h2>
	</center>


	

	<script type="text/css">
		var ctx = document.getElementById("myChart").getContext('2d');
		  var ctx = document.getElementById("demobar").getContext("2d");
    	  var data = {
    	            labels: [<?php while ($p = mysqli_fetch_array($data)) { echo '"' . $p['Merk'] . '",';}?>],
    	            datasets: [
    	            {
    	              label: "Penjualan Smartphone",
    	              data: [<?php while ($p = mysqli_fetch_array($data)) { echo '"' . $p['Penjualan'] . '",';}?>],
                    backgroundColor: [
                      "rgba(59, 100, 222, 1)",
                      "rgba(203, 222, 225, 0.9)",
                      "rgba(102, 50, 179, 1)",
                      "rgba(201, 29, 29, 1)",
                      "rgba(81, 230, 153, 1)",
                      "rgba(246, 34, 19, 1)"]
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'bar',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No", "Penjualan", "Pembelian", "Laba"],
				datasets: [{
					label: 'Penjualan',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($connect,"select * from tbjual where laba='No'");
					echo mysqli_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($connect,"select * from tbjual where laba='Penjualan'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_fisip = mysqli_query($connect,"select * from tbjual where fakultas='fisip'");
					echo mysqli_num_rows($jumlah_fisip);
					?>, 
					<?php 
					$jumlah_pertanian = mysqli_query($connect,"select * from tbjual where fakultas='pertanian'");
					echo mysqli_num_rows($jumlah_pertanian);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	 <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
</body>
</html>