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
	padding: 0px;
	align:center;
	}

form {
	font-size: 28px;
    padding:20px;
    border: 30px;
    margin-top: 10px;
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
}

</style>


<body>
	<?php include 'shops nav.php' ?>
	<form>
	<table align="center">
	<tr>
		<td>Product Name:</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	
	<tr>
		<td>Rate:</td>
		<td>
			<input type="number" />
		</td>
	</tr>
	<tr>
		<td>Discount</td>
		<td>
			<input type="number" />
		</td>
	</tr>
	<tr>
		<td>color:</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	<tr>
		<td>Size:</td>
		<td>
			<input type="number" />
		</td>
	</tr>
	<tr>
		<td>Brand:</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	<tr>
		<td>Add photo1:</td>
		<td>
			<input type="url" />
		</td>
	</tr>
	<tr>
		<td>Add photo2:</td>
		<td>
			<input type="url" />
		</td>
	</tr>
	<tr>
		<td>Add photo3:</td>
		<td>
			<input type="url" />
		</td>
	</tr>
	
	<tr>
		<td>Discription:</td>
		<td>
			<input type="text area" />
		</td>
	</tr>
	
<tr><td>Quantity:</td><td><input type="number" /></td></tr>
<tr><td>Type:</td><td><select>
<option>For Men's</option>
<option>For Women's</option>
<option>For both</option>
<option>For Kide's</option>
<option>Others</option>
</select></td></tr>

<tr><td colspan="2" align="center"><button onclick="myfunc()"><a href="dress add data.php">Finish</a></button></td></tr>
<tr><td colspan="2" align="left"><button><a href="index.php">cancel</a></button></td></tr>

</table>
</form>
<script type="text/javascript">
	function myfunc() {
		alert("Successfully Added !...The Product Id is send to your mail.");
	}
</script>

</body>
</html>
