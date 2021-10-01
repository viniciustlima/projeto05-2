<?php 
	if (isset($_GET["logout"])) {
		Dashboard::LogOut();
	}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Admin Dashboard &#8211; Projeto05</title>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="<?= INCLUDE_PATH_DASHBOARD; ?>styles/main.css">
</head>
<body>

	<aside>
		<div class="user">
			<div class="avatar"><?= getCargoIcon($_SESSION["admin_role"]) ?></div>
			<p class="nome"><?= $_SESSION["admin_name"]; ?></p>
			<p><?= getCargo($_SESSION["admin_role"]); ?></p>
		</div>
		<div class="menu-items">
			<a<?= selectedMenu("") ?> href="<?= INCLUDE_PATH_DASHBOARD ?>dashboard"><i class="fal fa-chart-pie"></i> Dashboard</a>
			<a<?= selectedMenu("profile") ?> href="<?= INCLUDE_PATH_DASHBOARD ?>profile"><i class="fal fa-user"></i> Profile</a>
			<a<?= selectedMenu("tables") ?> href="<?= INCLUDE_PATH_DASHBOARD ?>tables"><i class="fal fa-table"></i> Tables</a>
			<a<?= selectedMenu("products") ?> href="<?= INCLUDE_PATH_DASHBOARD ?>products"><i class="fal fa-tshirt"></i> Products</a>
			<a<?= selectedMenu("orders") ?> href="<?= INCLUDE_PATH_DASHBOARD ?>orders"><i class="fal fa-money-bill-wave"></i> Orders</a>
			<a<?php verifyPermission(1) ?><?= selectedMenu("admin") ?> href="<?= INCLUDE_PATH_DASHBOARD ?>admin"><i class="fal fa-user-tie"></i> Admin</a>
		</div>
	</aside>
	<header>
		<div class="aside-btn fll">
			<i class="far fa-bars"></i>
		</div>

		<div class="button flr">
			<a href="<?= INCLUDE_PATH_DASHBOARD ?>?logout" alt="Sair" title="Sair">
				<i class="far fa-sign-out"></i>
				<span>Sign Out</span>
			</a>
		</div>

		<div class="button flr">
			<a <?php if (@$_GET["url"] == "") { ?>class="dnn"<?php } ?>href="<?= INCLUDE_PATH_DASHBOARD ?>" alt="Página Inicial" title="Página Inicial">
				<i class="far fa-home"></i>
				<span>Home Page</span>
			</a>
		</div>
		<div class="clb"></div>
	</header>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="<?= INCLUDE_PATH ?>scripts/fontawesome.js"></script>

  <main>
		<?php Dashboard::LoadPage(); ?>
	</main>
</body>
</html>