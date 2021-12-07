<!DOCTYPE html>
<html>
<head>
	<title>All in one</title>
</head>

<style type="text/css">
	#body {
		width: 100%;
		height: 500px;
		margin-top: 0;
	}
	.row {
		float: left;
	}   
	#one {
		width: 19%;
		height: 100%;
		margin: 5px;
		border-radius: 5px;
		background-color:#98afc7;
	}
	#two {
		width: 48%;
		margin: 5px;
		height: 100%;	
	}
	#three {
		width: 30%;
		height: 100%;
		margin: 5px;
		background-color: #98afc7;
		border-radius: 5px;
	}
	#button {
		margin-top: 12px;
		margin-left: 34px;
		position: relative;
		background-color: #1589ff;
		border: none;
		color: white;
		padding: 10px 20px;
		font-size: 1.4rem;
		box-shadow: -6px 6px 0 hsl(16,10%,70%);
	}
	#button-1 {
		margin-top: 70px;
		margin-left: 20px;
		position: relative;
		background-color: #1589ff;
		border: none;
		color: white;
		padding: 8px 20px;
		font-size: 1.4rem;
		box-shadow: -6px 6px 0 hsl(16,10%,70%);
	}
	#horizon {
		margin-left: 15px;
		border-radius: 3px; 
		height: 100%;
		width: 100%;
		overflow-y: auto;
		background-color: #98afc7;
		display: block;
		float: right;
	}	
	.hori-bar {
		height: 200px;
		background-color: white;
		margin: 13px 10px;
		min-width: 250px;
		border-radius: 5px;
	}
</style>
<script type="text/javascript">
	function change() {
		document.getElementById("cover").innerHTML.scr="images/man-3.png";
	}
</script>
<body>
	<?php include 'Header.php' ?>
	<div id="body">
		<div class="row" id="one">
			<div style="height: 14%; border-radius: 5px; width: 100%; background-color: #616d7e; text-align: center; color: white;">
				<h1 style="margin: 0; padding-top: 13px">
					Your Photo
				</h1>
			</div>
			<img src="images/man-1.jpg" style="height: 230px; width: 200px; margin: 20px 10px 10px 27px">
			<button id="button">
				<a href="agumented-page.php" target="blank" style="color: white">
					Change Photo
				</a>
			</button>
			<h3 style="margin-left: 5px; margin-bottom: 0;">
				Discription:
			</h3>
			<p style="margin-top: 5px; margin-left: 5px">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou upload only one photo at a time. In that photo your position is must same as sample photo position.
			</p>
		</div>
		<div class="row" id="two">
			<div style="background-color: gray; border-radius: 5px">
				<img src="images/man-3.png"  id="cover" style="height: 400px;width: 320px; margin: 50px 150px; border: double 3px black; ">
			</div>
		</div>
		<div class="row" id="three">
			<div id="horizon">
				<div class="hori-bar">
					<div style="height: 100%; width: 45%; float: left">
						<img src="images/coat-3.png" style="height: 200px;width: 150px; margin-left: 15px; margin-top: -20px">
					</div>
					<div style="height: 100%; width: 50%;float: right;">
						<button id="button-1">
							<a href="#" target="blank" style="color: white">
								Try this
							</a>
						</button>
					</div>
				</div>
				<div class="hori-bar">
					<div style="height: 100%; width: 45%; float: left">
						<img src="images/coat-4.png" style="height: 200px;width: 150px; margin-left: 15px">
					</div>
					<div style="height: 100%; width: 50%;float: right;">
						<button id="button-1">
							<a href="#" onclick="change()" style="color: white">
							Try this
							</a>
						</button>
					</div>
				</div>
				<div class="hori-bar">
					<div style="height: 100%; width: 45%; float: left">
						<img src="images/coat-5.png" style="height: 200px;width: 150px; margin-left: 15px">
					</div>
					<div style="height: 100%; width: 50%;float: right;">
						<button id="button-1">
							<a href="#"  style="color: white">
								Try this
						</button>
							</a>
			
					</div>
				</div>
		 		<div class="hori-bar">
		 			box-4
		 		</div>
				<div class="hori-bar">
					box-5
				</div>
				<div class="hori-bar">
					box-6
				</div>
				<div class="hori-bar">
					box-7
				</div>
				<div class="hori-bar">
					box-8
				</div>
				<div class="hori-bar">
					box-9
				</div>
				<div class="hori-bar">
					box-10
				</div>
			</div>
		</div>
	</div>
</body>
</html>