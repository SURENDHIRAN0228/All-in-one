<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$pname=$_POST["product_name"];
		$price=$_POST["rate"];
		$dis=$_POST["discount"];
		$color=$_POST["color"];
		$size=$_POST["size"];
		$brand=$_POST["brand"];
		$url1=$_POST["photo-1"];
		$url2=$_POST["photo-2"];
		$url3=$_POST["photo-3"];
		$dcrp=$_POST["discription"];
		$qunty=$_POST["quantity"];
		$type=$_POST["type"];
		$z=mysql_connect("localhost","root","");
		mysql_select_db("store36");
		mysql_query("insert into msc values('$pname','$price','$dis','$color','$size',
			'$brand','$url1','$url2','$url3','$dcrp','$qunty','$type')");
		imap_alerts("SUCCESS") ;
		mysql_close($z);
	?>
</body>
</html>
