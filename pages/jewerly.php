<section class="accessories">
	<div class="center">
		<aside>
			<div class="info">
				<h2>Jewerly</h2>
				<h4>y Results</h4>
				<div class="info2">
					<p>x<sup>3</sup> Rings</p>
					<p>x<sup>5</sup> Necklaces</p>
					<p>x<sup>6</sup> Earrings</p>
				</div>
			</div>
			<div class="filter">
				<h2>Filter By</h2>
				<div class="box">
					<h2>Category</h2>
					<a href="<?= INCLUDE_PATH.$url ?>?group=rings">Rings</a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=necklaces">Necklaces</a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=earrings">Earrings</a>
				</div>
			</div>
		</aside>

		<main>
			<?php for ($i = 1; $i <= 7; $i++) { ?>
			<div class="product">
				<a href="<?= INCLUDE_PATH ?>shop/product?pid=<?= $i ?>" class="wrapper">
					<div class="img"></div>
					<p>Lorem Ipsum</p>
				</a>
			</div>
			<?php } ?>
			<div class="clear"></div>
		</main>
		<div class="clear"></div>
	</div>
</section>