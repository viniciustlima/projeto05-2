<section class="accessories">
	<div class="center">
		<aside>
			<div class="info">
				<h2>Accessories</h2>
				<h4>y Results</h4>
				<div class="info2">
					<p>x<sup>1</sup> Bracelets</p>
					<p>x<sup>2</sup> Handbags</p>
					<p>x<sup>4</sup> Gloves</p>
					<p>x<sup>5</sup> Watches</p>
					<p>x<sup>6</sup> Backpacks</p>
					<p>x<sup>7</sup> Hats</p>
				</div>
			</div>
			<div class="filter">
				<h2>Filter By</h2>
				<div class="box">
					<h2>Category</h2>
					<a href="<?= INCLUDE_PATH.$url ?>?group=bracelets">Bracelets</a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=handbags">Handbags<a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=gloves">Gloves</a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=watches">Watches</a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=backpacks">Backpacks</a>
					<a href="<?= INCLUDE_PATH.$url ?>?group=hats"> Hats</a>
				</div>
			</div>
		</aside>

		<main>
			<?php for ($i = 1; $i <= 5; $i++) { ?>
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