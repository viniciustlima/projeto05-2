<div class="main__box w100 fll">
	<h2>Home Page / <span>Dashboard</span></h2>
</div>

<div class="main__box w100 fll">
	<div class="info__box w33 fll">
		<div class="wrapper bg__cyan">
			<h2>Today's Visits</h2>
			<p>1892</p>
		</div>
	</div>
	<div class="info__box w33 fll">
		<div class="wrapper bg__red">
			<h2>Visits of the Month</h2>
			<p>13783</p>
		</div>
	</div>
	<div class="info__box w33 fll">
		<div class="wrapper bg__green">
			<h2>Total Visits</h2>
			<p>67897</p>
		</div>
	</div>
</div>

<div class="main__box w60 fll">
	<h2>Monthly Sales</h2>
	<canvas id="firstChart"></canvas>
</div>

<div class="main__box w40 flr">
	<h2>Sales Comparition<h2>
	<canvas id="secondChart"></canvas>
</div>

<script>
	var ctx = document.getElementById("firstChart").getContext("2d");
	var firstChart = new Chart(ctx, {
    type: "line",
 	 	data: {
	    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
  	    datasets: [{
	  	  	label: "Amount of Sales per Month",
  	      data: [6400, 6300, 6800, 6700, 7000, 7200, 6900, 7400, 7000, 7700, 7300, 7900],
 	        backgroundColor: [
						"rgba(75, 192, 192, 0.2)",
					],
	        borderColor: [
						"rgba(75, 192, 192, 1)",
	        ],
    	  }]
	  }
	});

	var ctx2 = document.getElementById("secondChart").getContext("2d");
	var secondChart = new Chart(ctx2, {
    type: "pie",
 	 	data: {
	    labels: ["Accessories", "Jewerly", "Woman", "Man", "Children"],
  	    datasets: [{
  	      data: [1250, 2300, 900, 1400, 1900],
 	        backgroundColor: [
	 	        "rgba(255, 99, 132, 0.2)",
						"rgba(54, 162, 235, 0.2)",
						"rgba(255, 206, 86, 0.2)",
						"rgba(75, 192, 192, 0.2)",
						"rgba(153, 102, 255, 0.2)"
					],
	        borderColor: [
	        	"rgba(255, 99, 132, 1)",
						"rgba(54, 162, 235, 1)",
						"rgba(255, 206, 86, 1)",
						"rgba(75, 192, 192, 1)",
						"rgba(153, 102, 255, 1)",
	        ],
    	  }]
	  }
	});
</script>
