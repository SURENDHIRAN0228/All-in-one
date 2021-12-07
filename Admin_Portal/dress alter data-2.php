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

#add {
	margin: 0px;
	padding: 10px 25px 15px 25px;
	background-color: green;
	text-decoration: underline;
}
#add:hover {
	padding-bottom: 13px;
	background-color: green;
}

button {
	background-color: black;
	color: white;

}
a {
	text-decoration: none;
	color: white;
}

</style>


<body>
	<?php include 'Header.php' ?>
	<form>
	<table align="center">
	<tr>
		<td>Change Product Name:</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	
	<tr>
		<td>Change Rate:</td>
		<td>
			<input type="number" />
		</td>
	</tr>
	<tr>
		<td>Change Discount:</td>
		<td>
			<input type="number" />
		</td>
	</tr>
	<tr>
		<td>Change color:</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	<tr>
		<td>Change Size:</td>
		<td>
			<input type="number" />
		</td>
	</tr>
	<tr>
		<td>Change Brand:</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	<tr>
		<td>Change photo1:</td>
		<td>
			<input type="url" />
		</td>
	</tr>
	<tr>
		<td>Chnage photo2:</td>
		<td>
			<input type="url" />
		</td>
	</tr>
	<tr>
		<td>Change photo3:</td>
		<td>
			<input type="url" />
		</td>
	</tr>
	
	<tr>
		<td>Change Discription:</td>
		<td>
			<input type="text area" />
		</td>
	</tr>
	
<tr><td>Change Quantity:</td><td><input type="number" /></td></tr>
<tr><td>Change Type:</td><td><select>
<option>For Men's</option>
<option>For Women's</option>
<option>For both</option>
<option>For Kide's</option>
<option>Others</option>
</select></td></tr>

<tr><td colspan="2" align="center"><button><a href="dress alter data.php">Finish</a></button></td></tr>
<tr><td colspan="2" align="left"><button><a href="dress alter data.php">cancel</a></button></td></tr>

</table>
</form>


</body>
</html>
