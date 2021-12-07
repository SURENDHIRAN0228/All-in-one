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


#developer {
	margin: 0px;
	padding: 10px 25px 15px 25px;
	background-color: green;
	text-decoration: underline;

}
#developer:hover {
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
	<?php include 'Admin_portal.php' ?>
	<form>
<table align="center">
<tr><td>Developer ID:</td><td><input type="text" palceholder="Enter Shop ID" /></td></tr>
<tr><td>Mail ID:</td><td><input type="Mail"  /></td></tr>
<tr><td colspan="2" align="center"><button  >Send OTP</button></td></tr>
<tr><td>Enter OTP</td><td><input type="number" /></td></tr>
<tr><td><button><a href="develop_pass.php">Verify OTP</a></button></td>
<td><button>Resend OTP</button></td></tr>

</table>
</form>


</body>
</html>
