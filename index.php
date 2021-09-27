<?php include "./config.php"; ?>
<?php $url = isset($_GET["url"]) ? $_GET["url"] : "home"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Projeto 05</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Website description">
	<meta name="author" content="Vinicius Trindade">
	<meta name="mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="robots" content="index,follow">
	<meta name="theme-color" content="#ffffff">
	<meta name="format-detection" content="telephone=no">

	<meta property="og:title" content="Another Clothes Store">
	<meta property="og:site_name" content="Another Clothes Store">
	<meta property="og:description" content="Website description">
	<meta property="og:url" content="clothingstore.com">

	<link rel="stylesheet" href="<?= INCLUDE_PATH ?>styles/style.css">
	<link rel="stylesheet" href="<?= INCLUDE_PATH ?>styles/page.css">
	<link rel="stylesheet" href="<?= INCLUDE_PATH ?>styles/login.css">
</head>
<body>
	<?php if ($url == "home" || $url == "account") { ?>
		<div class="warn">
			<a href="new/diamonds">Check our new <span>diamond</span> collection</a>
		</div>
	<?php } ?>
	<header>
		<div class="center">
			<div class="logo">
				<a href="<?= INCLUDE_PATH ?>home">Brand Logo</a>
			</div>
			<nav class="desktop">
				<ul>
					<li><a<?php getMenu($url, "home") ?> href="<?= INCLUDE_PATH ?>home">Home</a></li>
					<li><a<?php getMenu($url, "accessories") ?> href="<?= INCLUDE_PATH ?>accessories">Accessories</a></li>
					<li><a<?php getMenu($url, "jewerly") ?> href="<?= INCLUDE_PATH ?>jewerly">Jewerly</a></li>
					<li><a<?php getMenu($url, "woman") ?> href="<?= INCLUDE_PATH ?>woman">Woman</a></li>
					<li><a<?php getMenu($url, "man") ?> href="<?= INCLUDE_PATH ?>man">Man</a></li>
					<li><a<?php getMenu($url, "children") ?> href="<?= INCLUDE_PATH ?>children">Children</a></li>
					<li><a<?php getMenu($url, "signin") ?> href="<?= INCLUDE_PATH ?>signin"><i class="far fa-user"></i></a></li>
					<li><a<?php getMenu($url, "cart") ?> href="<?= INCLUDE_PATH ?>cart"><i class="far fa-shopping-cart"></i></a></li>
				</ul>
			</nav>
			<div class="mob-button">
				<i class="far fa-bars"></i>
			</div>
			<div class="clear"></div>
		</div>
	</header>

	<section class="mobile">
		<div class="center">
			<nav class="mobile">
				<ul>
					<li><a<?php getMenu($url, "home") ?> href="<?= INCLUDE_PATH ?>home">Home</a></li>
					<li><a<?php getMenu($url, "accessories") ?> href="<?= INCLUDE_PATH ?>accessories">Accessories</a></li>
					<li><a<?php getMenu($url, "jewerly") ?> href="<?= INCLUDE_PATH ?>jewerly">Jewerly</a></li>
					<li><a<?php getMenu($url, "woman") ?> href="<?= INCLUDE_PATH ?>woman">Woman</a></li>
					<li><a<?php getMenu($url, "man") ?> href="<?= INCLUDE_PATH ?>man">Man</a></li>
					<li><a<?php getMenu($url, "children") ?> href="<?= INCLUDE_PATH ?>children">Children</a></li>
					<?php if (!(isset($_SESSION["login"]))) { ?>
						<li><a<?php getMenu($url, "signin") ?> href="<?= INCLUDE_PATH ?>signin"><i class="far fa-user"></i></a></li>
					<?php } else { ?>
						<li><a<?php getMenu($url, "account") ?> href="<?= INCLUDE_PATH ?>account"><i class="far fa-user"></i></a></li>
					<?php } ?>
					<li><a<?php getMenu($url, "cart") ?> href="<?= INCLUDE_PATH ?>cart"><i class="far fa-shopping-cart"></i></a></li>
				</ul>
			</nav>
		</div>
	</section>

	<?php 
		if (file_exists("pages/$url.php")) {
			include "pages/$url.php";
		} else {
			include "pages/error.php";
		}
	?>

	<footer>
		<div <?php if ($url == "account" || "signin" || "signup") { echo "style=\"display: none;\""; } ?> class="start">
			<div class="center">
				<div class="section">
					<h2>Contact Us</h2>
					<p>contact@company.com</p>
					<p>+9 (999) 999-9999</p>

					<div class="social">
						<a href="https://facebook.com" class="ico fb" title="Facebook @companyname">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="https://twitter.com" class="ico tt" title="Twitter @companyname">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="grrps://pinterest.com" class="ico pt" title="Pinterest @companyname">
							<i class="fab fa-pinterest"></i>
						</a>
						<a href="https://instagram.com/" class="ico ig" title="Instagram @companyname">
							<i class="fab fa-instagram"></i>
						</a>
						<div class="clear"></div>
					</div>
				</div>
				<div class="section">
					<h2>Help and Support</h2>
					<ul>
						<li><a href="<?= INCLUDE_PATH ?>help/about-us">Meet [company name]</a></li>
						<li><a href="<?= INCLUDE_PATH ?>help/size-guide">Size Guide</a></li>
						<li><a href="<?= INCLUDE_PATH ?>help/exchanges-and-returns">Exchanges and Return</a></li>
						<li><a href="<?= INCLUDE_PATH ?>help/support"></a></li>
						<li><a href="<?= INCLUDE_PATH ?>help/privacity">Privacity</a></li>
					</ul>
				</div>
				<div class="section">
					<h2>Newsletter</h2>
					<div class="newsletter">
						<p>Want to know about all the news and special promotions? Leave your email with us, we promise only to send you amazing things!</p>
						<form>
							<input type="email" name="email">
							<button type="submit"><i class="fas fa-envelope"></i></button>
						</form>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="final">
			<div class="center">
				<p>Brand Logo</p>
				<p>&copy; 2017 - 2021. All Rights Reserveds</p>
			</div>
			<div class="clear"></div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="<?= INCLUDE_PATH ?>scripts/fontawesome.js"></script>
	<script src="<?= INCLUDE_PATH ?>scripts/menu.js"></script>
</body>
</html>