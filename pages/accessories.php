<?php
	$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$params = parse_url($link, PHP_URL_QUERY);
	
	# INCLUDE_PATH."$url?$params"

?>
<section class="accessories">
	<div class="center">
		<aside class="left">
			<div class="info">
				<h2>Accessories</h2>
				<h5>127 Results</h5>
				<p>31 Bracelets</p>
				<p>26 Clocks</p>
				<p>24 Rings</p>
				<p>17 Gloves</p>
				<p>15 Necklaces</p>
				<p>14 Earrings</p>
			</div>
		</aside>

		<main class="right">
			<div class="order right">
				<p>Order by 
					<select name="order" id="order">
						<option value="0">Most Relevant</option>
						<option value="1">Small Price</option>
						<option value="2">Bigger Price</option>
					</select>
				</p>
			</div>
			<div class="clear"></div>
		</main>
		<div class="clear"></div>
	</div>
</section>