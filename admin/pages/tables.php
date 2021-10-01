<?php
	$sql = MySql::conn()->prepare("SELECT * FROM admin ORDER BY name, role ASC");
	$sql->execute();
	$users = $sql->fetchAll();
?>
<div class="main__box w100">
	<h2>Tables / <span>General</span></h2>
</div>

<div class="main__box w50 fll">
	<h2>Users</h2>
	<table>
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Role</td>
		</tr>
		<?php foreach ($users as $key => $value) { ?>
		<tr>
			<td><?= $value["id"] ?></td>
			<td><?= $value["name"] ?></td>
			<td><?= getCargo($value["role"]) ?> <?= getCargoIcon($value["role"]) ?></td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="main__box w50 flr">
	<h2>Products</h2>
	<table>
		<tr>
			<td>#</td>
			<td>Category</td>
			<td>Amount</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Lorem Ipsum</td>
			<td>217</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Lorem Ipsum</td>
			<td>143</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Lorem Ipsum</td>
			<td>98</td>
		</tr>
	</table>
</div>