<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	$sname=$_POST["shop_name"];
	$sowner=$_POST["shop_onwer"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$pin=$_POST["pin_code"];
	$mail=$_POST["mailID"];
	$category=$_POST["category"];
	$mobile=$_POST["mobile_number"];
	$y=mysql_connect("localhost","root","");
	mysql_select_db("store36");
	mysql_query("insert into dsc values('$sname','$sowner','$address','$city','$pin',
		'$mail','$category','$mobile')");
	imap_alerts("SUCCESS") ;
	mysql_close($z);
	?>
</body>
</html>
