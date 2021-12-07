<!DOCTYPE html>
<html>
<head>
	<title> All in one admin site</title>
</head>

<style type="text/css">
	.nav-bar {
		background-color: blue;
		height: 50px;
		width: 100%;
	}
	.nav-bar ul {
		list-style: none;
		margin: 0;
		color: white;
	}
	.nav-bar ul li {
		float: left;
		margin: 10px 25px;
		font-size: 22px;

	}
	.nav-bar ul li:hover {
		margin: 0;
		padding: 12px 25px;
		background-color: green;
	}
	a {
		color: white;
	}
	
</style>
<body>
	<?php include 'Header.php' ?>
	<div class="nav-bar">
		<ul>
			<li><a id="add" href="add shop.php">Add Shop</a></li>
			<li><a id="alter" href="alter shop.php">Alter Shops</a></li>
			<li><a id="remove" href="remove shop.php">Remove Shops</a></li>
		</ul>
	</div>

</body>
</html>