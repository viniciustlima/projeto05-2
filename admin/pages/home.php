<div class="main__box w100 fll">
	<h2>Home Page / <span>Dashboard</span></h2>
</div>

<div class="main__box w60 fll">
	<h2>Monthly Sales</h2>
	<canvas id="firstChart"></canvas>
</div>
<style>
	canvas#myChart {
		width: 100%;
		height: 100%;
	}
</style>

<div class="main__box w40 flr">
	<h2>Sales Comparition<h2>
	<canvas id="secondChart"></canvas>
</div>
<div class="clb"></div>

<div class="main__box w50 fll">
	<h2>Amount of Products</h2>
	<table>
		<tr>
			<td>#</td>
			<td>Category</td>
			<td>Amount</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Accessories</td>
			<td>217</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Jewerly</td>
			<td>143</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Woman</td>
			<td>177</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Man</td>
			<td>151</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Children</td>
			<td>187</td>
		</tr>
	</table>
</div>

<div class="main__box w50 flr">
	<h2>Panel Users</h2>
	<table>
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Role</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Vinicius Trindade</td>
			<td><?= getCargoIcon(2); ?> <?= getCargo(2); ?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Pedro Machado</td>
			<td><?= getCargoIcon(1); ?> <?= getCargo(1); ?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Miguel Magalhães</td>
			<td><?= getCargoIcon(0); ?> <?= getCargo(0); ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Guilherme Souza</td>
			<td><?= getCargoIcon(0); ?> <?= getCargo(0); ?></td>
		</tr>
	</table>
</div>

<script>
	var ctx = document.getElementById("firstChart").getContext("2d");
	var firstChart = new Chart(ctx, {
    type: "line",
 	 	data: {
	    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
  	    datasets: [{
	  	  	label: "Ammount of Sales per Month",
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
