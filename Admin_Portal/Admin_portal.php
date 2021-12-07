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
			<li><a id="shops" href="index.php">Shops admin</a></li>
			<li><a id="developer" href="developer admin.php">Developer admin</a></li>
		</ul>
	</div>

</body>
</html>