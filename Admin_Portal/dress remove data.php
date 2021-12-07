<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body {
		background-color: #ccffff;
	}
table {
    background-color:#CCFFFF;
	border: 40px;
	padding: 40px;
	align:center;
	}

form {
	font-size: 28px;
    padding:50px;
    border: 30px;
}


#alter {
	margin: 0px;
	padding: 10px 25px 15px 25px;
	background-color: green;
	text-decoration: underline;

}
#alter:hover {
	padding-bottom: 13px;
	background-color: green;
}
button {
	background-color: black;
	color: white;

}
a {
	text-decoration: none;
}

</style>


<body>
	<?php include 'shops nav.php' ?>
	<form>
<table align="center">
<tr><td>Product ID:</td><td><input type="text" palceholder="Enter Shop ID" /></td></tr>

<tr><td colspan="2" align="center"><button><a href="dress alter data-2.php">Delete Item</a></button></td></tr>
<tr><td colspan="2" align="left"><button><a href="index.php">Exit</a></button></td></tr>
</table>
</form>


</body>
</html>
