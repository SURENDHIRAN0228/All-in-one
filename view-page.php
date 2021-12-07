<!DOCTYPE html>
<html>
<head>
	<title>All in one</title>
</head>

<style type="text/css">
	#body {
		height: 450px;
		width: 100%;		
	}
	#foot {
		height: 80px;
		width: 100%;
	}
	img {
		height: 200px;
		width: 180px;
	}
	#main {
		width: 55%;
		height: 100%;
	}
	.main {
		float: left;
	}
	#horizon {
		margin-left: 15px;
		border-radius: 3px; 
		height: 100%;
		width: 40%;
		overflow-y: auto;
		background-color: #98afc7;
		display: block;
		float: right;
	}	
	.hori-bar {
		height: 200px;
		background-color: white;
		margin: 13px 5px;
		min-width: 250px;
	}
	.order {
		height: 100%;
		width: 49%;
		margin-right: 2px;
		margin-left: 2px;
		float: left;
	}
	#block-1 {
		background-color: orange;
		text-align: center;
		border-radius: 5px;
		border-style: double;
		padding-top: 12px;
	}
	#block-2 {
		background-color: gray;
		text-align: center;
	    border-radius: 5px;
		padding-top: 12px;
		border-style: double;
	}
	.side {
		float: left;
	}
	#left-side {
		height: 100%;
		width: 40%;
	}
	#right-side {
		height: 100%;
		width: 55%;
		margin-left: 10px;
	}
	#main-img {
		margin-left: 10px;
		margin-top: 30px; 
		height: 350px;
		width: 270px;
		border: ridge 3px gray;
	}
	strike {
		color: gray;
	}
	h5, h2, h3 {
		margin-top: 10px;
		margin-bottom: 0px;
	}
	h1, h2 {
		display: inline-block;
		margin-top: 5px;
	}
	.head5 {
		color: black;
		margin-top: 40px;
		margin-bottom: 10px;
	}
	.head2 {
		color: #52595d;
	}
	h1 {
		margin-bottom: 0px;
		margin-left: 20px;
	}
	.head3 {
		color: green;
	}
	.head4 {
		margin-left: 8px;
	}
	#img-9 {
		width: 300px;
	}
	span {
		color: green;
	}
	#size {
		display: inline-block;
	}
	select {
		height: 20px;
		width: 100px;
		font-size: 16px;
		margin-left: 5px;
	}
	#button {
		margin-top: 20px;
		margin-left: 100px;
		position: relative;
		background-color: #1589ff;
		border: none;
		color: white;
		padding: 15px 24px;
		font-size: 1.4rem;
		box-shadow: -6px 6px 0 hsl(16,10%,70%);
	}
	.side-img {
		height: 170px;
		width: 150px;
		margin: 15px 10px;
	}
	.side-bar {
		float: left;
	}
</style>

<body>
	<?php include 'Header.php' ?>
	<div id="body">
		<div class="main" id="main">
			<div id="left-side" class="side">
				<img id="main-img" src="images/coat-1.jpg">
			</div>
			<div id="right-side" class="side">
				<h4 class="head5">
					<a href="#" >
						Logesh Men's Fasions(Karur)
					</a>
				</h4>
				<h2 class="head2">
					Chadwik Car Coat - Black, Mens Jackets&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				</h2>
				<h1>
					&#8377 7500 &nbsp
					<h2 class="head3">
						<strike>
							10000
						</strike>
						&nbsp 25% off
					</h2>
				</h1>
				<h3>
					Colour:
					<b style="color: black"> 
						Black
					</b>
				</h3>
				<h3>
					Rating: 
					<span>
						4.3&#9733
					</span>
				</h3>
				<h3 id="size">
					Size:
				</h3>
				<select>
					<option>L</option>
					<option>M</option>
					<option>XL</option>
					<option>XLL</option>
					<option>XLLL</option>
				</select>
				<h3>
					<a href="#">
						Free delivery on orders over &#8377 499
					</a>
				</h3>
				<button id="button">
					<a href="agumented-page.php" target="blank" style="color: white">
						Try Your Body
				</button>
					</a>
			</div>
		</div>
		<div class="main" id="horizon">
			<div class="hori-bar">
				<div class="side-bar" style="height: 100%; width: 30%">
					<img class="side-img" src="images/line-1.jpg">
				</div>
				<div class="side-bar">
					<h4 style="margin: 30px 5px 5px 5px;">
						<a href="#" >
							Logesh Men's Fasions(Karur)
						</a>
					</h4>
					<h2 style="margin: 10px 5px 5px 5px; color: #616e7d">
						Men's Stylish T-shirt &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</h2>
					<h1 style="display: block; color: brown">
						&#8377 450 &nbsp
					</h1>
					<h3 style="margin-left: 5px;">
						Rating: 
						<span>
							4.1&#9733
						</span>
					</h3>				
				</div>
			</div>
			<div class="hori-bar" class="side-img">
				<div class="side-bar" style="height: 100%; width: 30%">
					<img class="side-img" src="images/line-2.jpg">
				</div>
				<div class="side-bar">
					<h4 style="margin: 30px 5px 5px 5px;">
						<a href="#" >
							Mahesh Men's Fasions(Erode)
						</a>
					</h4>
					<h2 style="margin: 10px 5px 5px 5px; color: #616e7d">
						Men's Full Hand T-shirt &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</h2>
					<h1 style="display: block; color: blue">
						&#8377 350 &nbsp
					</h1>
					<h3 style="margin-left: 5px;">
						Rating: 
						<span>
							3.9&#9733
						</span>
					</h3>				
				</div>
			</div>
			<div class="hori-bar" class="side-img">
				<img src="images/line-3.jpg">
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
	<div id="foot">
		<div class="order" id="block-1">
			<h1>
				Order Now
			</h1>
		</div>
		<div class="order" id="block-2">
			<h1>
				Add to Cart
			</h1>
		</div>
	</div>
</body>
</html>