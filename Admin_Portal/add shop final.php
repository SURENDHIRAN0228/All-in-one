<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
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
	<form method="post" action="Create-db.php"><table align="center">
		<tr><td>Enter OTP:</td><td><input type="number" /></td></tr>
		<tr><td><button><a href="#">Verify OTP</a></button></td>
		<td><button>Resend OTP</button></td></tr>

<tr><td>Create Password:</td><td><input type="password" placeholder="Enter Password" name="pass1" /></td></tr>
<tr><td>Reenter Password:</td><td><input type="password" placeholder="Enter Password" name="pass2" /></td></tr>
<tr><td colspan="2" align="center">
<button  > <a href="add shop.php" onclick="myfunc()">Finish</a></button></td></tr>
<tr><td colspan="2" align="left">
<button  ><a href="add shop.php">Back</a></button></td></tr>
</table></form>

<script type="text/javascript">
	function generateOTP() { 

    var digits = '0123456789'; 

    let OTP = ''; 

    for (let i = 0; i < 4; i++ ) { 
        OTP += digits[Math.floor(Math.random() * 10)]; 
    } 
    return OTP; 
	}

	function myfunc() {
		alert("Successfully Added !...The Shop Id is send to your mail.");
	}
</script>
</body>
</html>