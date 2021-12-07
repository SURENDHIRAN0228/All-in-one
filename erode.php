<!DOCTYPE html>
<html>
<head>
	<title>All in one</title>
</head>
<style type="text/css">
	.menu-bar {
		background-color: blue;
		height: 50px;
		width: 100%;
	}	
	.menu-bar ul {
		list-style: none;
		margin: 0;
		color: white;
	}
	#nav-bar-left {
		height: 100%;
		width: 78%;
		float: left;
	}
	.nav-left {
		float: left;
		padding-left: 15px;
		padding-right: 20px;
		padding-top: 13px;
		font-size: 20px;
		font-family: sans-serif;
	}
	.active, .menu-bar ul li:hover {
		background-color: #2bab0d;
		border:5px;
		border-radius: 3px;
		margin-top: 7px;
		padding-top: 8px;
	}
	.sub-menu {
		display: none;
	}
	.menu-bar ul li:hover .sub-menu {
		display: block;
		position: absolute;
		background-color: gray;
		margin-top: 15px;
		margin-left: -5px;
	}
	.menu-bar ul li:hover .sub-menu ul
	{
		display: block;
		margin: 10px;
		margin-left: 0px;
	}
	.menu-bar ul li:hover .sub-menu ul li {
		width: 150px;
		padding: 5px;
		border-bottom: 1px dotted #fff;
		background: transparent;
		border-radius: 0;
		text-align: left;
	}
	.right-side-box  {
		height: 450px;
		width: 25%;
	    float: right;
		background-color: pink;
		margin: 10px;
	}
	.left-side-box-1  {
		height: 450px;
		width: 25%;
	    float: left;
		background-color: pink;
		margin: 10px;
	}
	.left-side-box  {
		height: 450px;
		width: 72%;
	    float: left;
		background-color: #4d80e4;
		margin: 10px;
	}
	.right-side-box-1  {
		height: 450px;
		width: 72%;
	    float: right;
		background-color: #4d80e4;
		margin: 10px;
	}
	#grid-1 ,#grid-5, #grid-7, #grid-10 ,#grid-14, #grid-16{
		height: 220px;
		width: 100%;
		background-color: #ace5ff;
		margin: 0px;
	}
	#grid-1:hover ,#grid-5:hover, #grid-7:hover, #grid-10:hover ,#grid-14:hover, #grid-16:hover {
		margin: 5px;
	}
	#grid-2 , #grid-6, #grid-8, #grid-11 , #grid-15, #grid-17{
		height: 220px;
		width: 100%;
		background-color: #ace5ff;
		margin-top:  10px;
	}
	#grid-2:hover ,#grid-6:hover, #grid-8:hover, #grid-11:hover ,#grid-15:hover, #grid-17:hover {
		margin: 5px;
	}
	#horizon {
		margin-left: 15px;
		border-radius: 3px; 
		height: 390px;
		width: 98%;
		float: center;
		overflow-x: auto;
		background-color: black;
		display: flex;
	}	
	.hori-bar {
		height: 345px;
		background-color: white;
		margin: 13px 5px;
		min-width: 250px;
		text-align: center;
	}
	.first {
		float: left;
	}
	img {
		height: 200px;
		width: 170px;
		margin: 10px;
		margin-left: 30px;
	}
	#one {
		width: 25%;
		height: 100%;
	}
	#two {
		width: 50%;
		height: 100%;
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
	}
	.head2 {
		color: #52595d;
	}
	strike {
		color: gray;
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
	select {
		height: 30px;
		width: 180px;
		font-size: 18px;
	}
</style>

<body>
	<div style="width: 100%; height: 1560px">
    	<?php include 'Header.php'?>
		<nav class="menu-bar">
			<ul>
				<div id="nav-bar-left">
					<li class="nav-left" class="active">
						Home
					</li>
					<li class="nav-left">
						Select City:
						<select>
							<option>Theni</option>
							<option>Andimadam</option>
							<option>Ariyalur</option>
							<option>Alandur</option>
							<option>Ambattur</option>
							<option>Ayanavaram</option>
							<option>Anaimalai</option>
							<option>Annur</option>
							<option>Attur</option>
							<option>Anthiyur</option>
							<option>Agesteeswaram</option>
							<option>Aravakurichi</option>
							<option>Anchetty</option>
							<option>Alathur</option>
							<option>Alangudi</option>
							<option>Aranthangi</option>
							<option>Avadaiyarkoil</option>
							<option>Arakkonam</option>
							<option>Arcot</option>
							<option>Alangulam</option>
							<option>Andipatti</option>

							<option>Ambasamudram</option>
							<option>Ambur</option>
							<option>Avanashi</option>
							<option>Avadi</option>
							<option>Aarani</option>
							<option>Anaicut</option>
							<option>Aruppukottai</option>
							<option>Bhuvanagiri</option>
							<option>Bhavani</option>
							<option>Bargur</option>
							<option>Budalur</option>
							<option>Bodniayakkanur</option>
							<option>Coonoor</option>
							<option>Cheramahadevi</option>
							<option>Changam</option>
							<option>Chetpet</option>
							<option>Cheyyar</option>
							<option>Chengalpattu</option>
							<option>Cheyyur</option>
							<option>Coimbature(North)</option>

							<option>Coimbature(south)</option>
							<option>Chidambaram</option>
							<option>Cudalore</option>
							<option>Chinnaselam</option>
							<option>Dharmapuri</option>
							<option>Dindigul East</option>
							<option>Dindigul Weat</option>
							<option>Denkanikottai</option>
							<option>Devakottai</option>
							<option>Dharapuram</option>
							<option>Egmore</option>
							<option>Erode</option>
							<option>Eral</option>
							<option>Ettayapuram</option>
							<option>Gudalur</option>
							<option>Gandarvakottai</option>
							<option>Gangavalli</option>
							<option>Gummidipoondi</option>
							<option>Gudiyatham</option>
							<option>Gingee</option>

							<option>Guindy</option>
							<option>Gujiliamparai</option>
							<option>Gobichettipalayam</option>
							<option>Harur</option>
							<option>Hosur</option>
							<option>Illuppur</option>
							<option>Idappadi</option>
							<option>Ilyangudi</option>
							<option>Jamunamarathur</option>
							<option>Kuthalam</option>
							<option>Kilvelur</option>
							<option>Kollimallai</option>
							<option>Kumarapalayam</option>
							<option>Kotagiri</option>
							<option>Kundah</option>
							<option>Kunnam</option>
							<option>Karambakkudi</option>
							<option>Kulathur</option>
							<option>Kadaladi</option>
							<option>kamuthi</option>

							<option>Kilakarai</option>
							<option>Kalavai</option>
							<option>Kadyampatti</option>
							<option>Kalayarkoil</option>
							<option>karaikudi</option>
							<option>Kadayanallur</option>
							<option>Kumbakonam</option>
							<option>Kayathar</option>
							<option>Kovilpatti</option>
							<option>Kangeyam</option>
							<option>Kalasapakkam</option>
							<option>Kilpennathur</option>
							<option>Koothanallur</option>
							<option>Kudavasal</option>
							<option>Katpadi</option>
							<option>Kilvaithinankuppam</option>
							<option>Kandachippuram</option>
							<option>Kariapatti</option>
							<option>Kinathukadavu</option>
							<option>Kattumannarkodi</option>

							<option>Kurinjipadi</option>
							<option>Karimangalam</option>
							<option>Kodaikanal</option>
							<option>Kodumudi</option>
							<option>Kallakurichi</option>
							<option>Kalvarayan Hills</option>
							<option>Kancheepuram</option>
							<option>Kundrathur</option>
							<option>Kalkulam</option>
							<option>Killiyoor</option>
							<option>Kadavur</option>
							<option>Karur</option>
							<option>Krishnarayapuram</option>
							<option>Kulithalai</option>
							<option>Krishnagiri</option>
							<option>Kalligudi</option>
							<option>Lalgudi</option>
							<option>Mayiladuthurai</option>
							<option>Mohanur</option>
							<option>Manamelkudi</option>

							<option>Mudukulathur</option>
							<option>Mettur</option>
							<option>Manamadurai</option>
							<option>Manachanallur</option>
							<option>Manapparai</option>
							<option>musiri</option>
							<option>Manur</option>
							<option>Madathukulam</option>
							<option>Mannargudi</option>
							<option>Marakkanam</option>
							<option>Melmalaianur</option>
							<option>Madhurantakam</option>
							<option>Madhavaram</option>
							<option>Maduravoyal</option>
							<option>Mambalam</option>
							<option>Mylapore</option>
							<option>Madukkarai</option>
							<option>Mettupalayam</option>
							<option>Modakkurichi</option>
							<option>Manmangalam</option>

							<option>Madurai East</option>
							<option>Madurai North</option>
							<option>Madurai South</option>
							<option>Madurai West</option>
							<option>Nallampalli</option>
							<option>Natham</option>
							<option>Nilakottai</option>
							<option>Nambiyur</option>
							<option>Nannilam</option>
							<option>Needamangalam</option>
							<option>Natrampalli</option>
							<option>Nanguneri</option>
							<option>Nemili</option>
							<option>Namakkal</option>
							<option>Nagapattinam</option>
							<option>Omalur</option>
							<option>Orathanadu</option>
							<option>Ottapidaram</option>
							<option>Oddenchatram</option>
							<option>Paramathi Velur</option>

							<option>Pandalur</option>
							<option>Peramblur</option>
							<option>Pudukkottai</option>
							<option>Paramakudi</option>
							<option>Pethanaickenpalayam</option>
							<option>Papanasam</option>
							<option>Pattukkottai</option>
							<option>Peravurani</option>
							<option>Periyakulam</option>
							<option>Palayamkottai</option>
							<option>Palladam</option>
							<option>Pallipattu</option>
							<option>Ponneri</option>
							<option>Polur</option>
							<option>Pernambut</option>
							<option>Pallavaram</option>
							<option>Perambur</option>
							<option>Purasaiwalkam</option>
							<option>Perur</option>
							<option>Pollachi</option>

							<option>Panruti</option>
							<option>Palakcode</option>
							<option>Pappireddipatti</option>
							<option>Pennagaram</option>
							<option>Palani</option>
							<option>Perundurai</option>
							<option>Pugalur</option>
							<option>Pochampalli</option>
							<option>Peraiyur</option>
							<option>Rasipuram</option>
							<option>Rajasingamangalam</option>
							<option>Ramanathapuram</option>
							<option>Rameswaram</option>
							<option>Radhapuram</option>
							<option>RK Pet</option>
							<option>Rajapalayam</option>
							<option>SriKazhi</option>
							<option>Sendamangalam</option>
							<option>Sholingur</option>
							<option>Salem</option>

							<option>Salem South</option>
							<option>Salem West</option>
							<option>Sankagiri</option>
							<option>Singampunari</option>
							<option>Sivagangai</option>
							<option>Sankarankoil</option>
							<option>Shenkottai</option>
							<option>Sivagiri</option>
							<option>SathanKulam</option>
							<option>Srirangam</option>
							<option>Sattur</option>
							<option>Sivakasi</option>
							<option>Srivilliputhur</option>
							<option>Sendurai</option>
							<option>Sholinganallur</option>
							<option>Sulur</option>
							<option>Srimushanam</option>
							<option>Sathyamangalam</option>
							<option>Sankarapuram</option>
							<option>Sriperumbudur</option>

							<option>Shoolagiri</option>
							<option>Tambaram</option>
							<option>Thirukkalikundram</option>
							<option>Thirupporur</option>
							<option>Thiruvottiyur</option>
							<option>Tondiarpet</option>
							<option>Titakudi</option>
							<option>Thalavadi</option>
							<option>Thirukkoilur</option>
							<option>Thiruvattar</option>
							<option>Thovalai</option>
							<option>Thirupparankundram</option>
							<option>Thirumangalam</option>
							<option>Tharangambadi</option>
							<option>Thiruchengode</option>
							<option>Thirukkuvalai</option>
							<option>Thirumayam</option>
							<option>Tiruvadanai</option>
							<option>Tirupathur</option>
							<option>Tiruppuvanam</option>
							
							<option>Tenkasi</option>
							<option>Thiruvengadam</option>
							<option>Thanjavur</option>
							<option>Thiruvaiyaru</option>
							<option>Thiruvidaimarudur</option>
							<option>Theni</option>
							<option>Thuruvaikundam</option>
							<option>Tiruchendhur</option>
							<option>Thoothukudi</option>
							<option>Thiruchirappalli West</option>
							<option>Thiruchirappalli East</option>
							<option>Thituverumbur</option>
							<option>Thottiyam</option>
							<option>Thuraiyur</option>
							<option>Thisayanvilai</option>
							<option>Thirunelveli</option>
							<option>Tirupattur</option>
							<option>Thiruppur North</option>
							<option>Thiruppur South</option>
							<option>Tiruttani</option>

							<option>Tiruvallur</option>
							<option>Thandarampattu</option>
							<option>Tiruvannamalai</option>
							<option>Thiruthiraipoondi</option>
							<option>Tiruvarur</option>
							<option>Thiruvennainallur</option>
							<option>Tiruchuli</option>
							<option>Udagamandalam</option>
							<option>Uthamapalayam</option>
							<option>Udumalaipettai</option>
							<option>Uthukuli</option>
							<option>Uthukottai</option>
							<option>Udayarpalayam</option>
							<option>Ulundurpet</option>
							<option>Uthiramerur</option>
							<option>Uthangarai</option>
							<option>Usilampatti</option>
							<option>Vandalur</option>
							<option>Velachery</option>
							<option>Valparai</option>
							
							<option>Veppur</option>
							<option>Vridachalam</option>
							<option>Vedasandur</option>
							<option>Vilavancode</option>
							<option>Vadipatti</option>
							<option>Vedaranyam</option>
							<option>Veppanthattai</option>
							<option>Viralimalai</option>
							<option>Valapady</option>
							<option>Veerakeralampudur</option>
							<option>Vilathikulam</option>
							<option>Vaniyambadi</option>
							<option>Vandavasi</option>
							<option>Vembakkam</option>
							<option>Valangaiman</option>
							<option>Vellore</option>
							<option>Vanur</option>
							<option>Vikravandi</option>
							<option>Villupuram</option>
							<option>Virudhunagar</option>
							
							<option>Vembakottai</option>
							<option>Walajapet</option>
							<option>Watrap</option>
							<option>Walajabad</option>
							<option>Yercaud</option>

 						</select>	
					</li>
					<li class="nav-left">Shops
						<select>
							<option>Dress</option>
							<option>Dress</option>
							<option>Food</option>
							<option>Beauty Parler</option>
							<option>Car Showroom</option>
							<option>Bike Showroom</option>
							<option>Mobile Shops</option>
							<option>Jewells</option>
							<option>Frunitures</option>
							<option>Hos & Medical</option>
							<option>Stores</option>
							<option>Footwear</option>
							<option>Bookstores</option>
							<option>Sports</option>
							<option>Fruits</option>
						</select>
					</li>
					<li class="nav-left">Price
						<select>
							<option>1000-2000</option>
							<option>Below 1000</option>
							<option>1000-2000</option>
							<option>2000-5000</option>
							<option>5000-10000</option>
							<option>10000-20000</option>
							<option>More then 20000</option>
						</select>
					</li>
					<button style="margin-top: 10px; height: 30px; width: 100px; border: 10px"><a href="erode.php">Filter</button></a>
				</div>
				<div id="nav-bar-right">
					<li class="nav-left">
						About us
					</li>
					<li class="nav-left">
						Sign in
					</li>
				</div>
			</ul>
		</nav>
		<div>
			<div class="left-side-box">
				<div id="grid-1">
					<a href="view-page.php">
						<div class="first" id="one">
							<img src="images/img-8.jpg">
						</div>
						<div class="first" id="two">
							<h5 class="head5">
								Anand Saree's(Theni)
							</h5>
							<h2 class="head2">
								Floral Print Daily Wear Georgatte Saree&nbsp&nbsp&nbsp
							</h2>
							<h1>
								&#8377 750 &nbsp
								<h2 class="head3">
									<strike>
										1000
									</strike>
									&nbsp 25% off
								</h2>
							</h1>
							<h3>
								Colour:
								<b style="color: #3bb9ff">
									Skyblue
								</b>
							</h3>
							<h3>
								Rating: 
								<span>
									4.3&#9733
								</span>
							</h3>
							<h3>
								<a href="#">
									Free delivery on orders over &#8377 499
								</a>
							</h3>
						</div>
						<div class="first" class="three">
							<img src="images/extra-4.png">
						</div>
					</a>
				</div>
				<div id="grid-2">
					<div class="first" id="one">
						<img src="images/img-7.jpeg">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Boyzz Fasions(Theni)
						</h5>
						<h2 class="head2">
							Self Design Men Hooded Neck Red T-Shirt
						</h2>
						<h1>
							&#8377 250 &nbsp
							<h2 class="head3">
								<strike>
									500
								</strike>
								&nbsp 50% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: red">
								Red
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.7&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-6.png">
					</div>
				</div>
			</div>
			<div class="right-side-box" id="grid-3">
				<div class="head4">
					<img src="images/img-10.jpeg" id="img-9">
				</div>
				<div style="margin-left: 25px">
					<h5 class="head5">
						Kumar Wedding Fasions(Theni)
					</h5>
					<h2 class="head2">
						Special Wedding Dress(couple)
					</h2>
					<h1>
						&#8377 1950 &nbsp
						<h2 class="head3">
							<strike>
								2440
							</strike>
							&nbsp 20% off
						</h2>
					</h1>
					<h3>
						Colour:
						<b style="color: #ff00ff">
						 Pink
						</b>
					</h3>
					<h3>Rating: 
						<span>
							4.5&#9733
						</span>
					</h3>
					<h3>
						<a href="#">
							Free delivery on orders over &#8377 499
						</a>
					</h3>
				</div>
			</div>
		</div>
		<div>
			<div class="left-side-box-1" id="grid-4">
				<div class="head4">
					<img src="images/img-11.jpg" id="img-9">
				</div>
				<div style="margin-left: 25px">
					<h5 class="head5">
						Kumar Wedding Fasions(Theni)
					</h5>
					<h2 class="head2">
						Special Wedding Dress(couple)
					</h2>
					<h1>
						&#8377 1950 &nbsp
						<h2 class="head3">
							<strike>
								2440
							</strike>
							&nbsp 20% off
						</h2>
					</h1>
					<h3>
						Colour:
						<b style="color: #ff00ff">
						 Pink
						</b>
					</h3>
					<h3>
						Rating: 
						<span>
							4.5&#9733
						</span>
					</h3>
					<h3>
						<a href="#">
							Free delivery on orders over &#8377 499
						</a>
					</h3>
				</div>
			</div>
			<div class="right-side-box-1">
				<div id="grid-5">
					<div class="first" id="one">
						<img src="images/img-12.jpg">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Soundharya Silks(Theni)
						</h5>
						<h2 class="head2">
							Soundharya Women Cotten Salwar Suit Set&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						</h2>
						<h1>
							&#8377 750 &nbsp
							<h2 class="head3">
								<strike>
									1000
								</strike>
								&nbsp 25% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: green"> 
								Green
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.3&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-8.png">
					</div>
				</div>
				<div id="grid-6">
					<div class="first" id="one">
						<img src="images/img-6.jpg">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Boyzz Fasions(Theni)
						</h5>
						<h2 class="head2">
							Self Design Men Hooded Neck Red Shirt
						</h2>
						<h1>
							&#8377 250 &nbsp
							<h2 class="head3">
								<strike>
									500
								</strike>
								&nbsp 50% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: red">
								Red
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.7&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-6.png">
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="left-side-box">
				<div id="grid-7">
					<a href="view-page.php">
						<div class="first" id="one">
							<img src="images/coat-1.jpg">
						</div>
						<div class="first" id="two">
							<h5 class="head5">
								Anand Saree's(Theni)
							</h5>
							<h2 class="head2">
								Floral Print Daily Wear Georgatte Saree&nbsp&nbsp&nbsp
							</h2>
							<h1>
								&#8377 750 &nbsp
								<h2 class="head3">
									<strike>
										1000
									</strike>
									&nbsp 25% off
								</h2>
							</h1>
							<h3>
								Colour:
								<b style="color: #3bb9ff">
									Skyblue
								</b>
							</h3>
							<h3>
								Rating: 
								<span>
									4.3&#9733
								</span>
							</h3>
							<h3>
								<a href="#">
									Free delivery on orders over &#8377 499
								</a>
							</h3>
						</div>
						<div class="first" class="three">
							<img src="images/extra-5.png">
						</div>
					</a>
				</div>
				<div id="grid-8">
					<div class="first" id="one">
						<img src="images/img-4.jpg">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Boyzz Fasions(Theni)
						</h5>
						<h2 class="head2">
							Self Design Men Hooded Neck Red T-Shirt
						</h2>
						<h1>
							&#8377 250 &nbsp
							<h2 class="head3">
								<strike>
									500
								</strike>
								&nbsp 50% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: red">
								Red
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.7&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-2.png">
					</div>
				</div>
			</div>
			<div class="right-side-box" id="grid-9">
				<div class="head4">
					<img src="images/img-13.jpg" id="img-9">
				</div>
				<div style="margin-left: 25px">
					<h5 class="head5">
						Kumar Wedding Fasions(Theni)
					</h5>
					<h2 class="head2">
						Special Inner Dress()
					</h2>
					<h1>
						&#8377 1950 &nbsp
						<h2 class="head3">
							<strike>
								2440
							</strike>
							&nbsp 20% off
						</h2>
					</h1>
					<h3>
						Colour:
						<b style="color: #ff00ff">
						 Pink
						</b>
					</h3>
					<h3>Rating: 
						<span>
							4.5&#9733
						</span>
					</h3>
					<h3>
						<a href="#">
							Free delivery on orders over &#8377 499
						</a>
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div id="horizon">
		<div class="hori-bar">
			<img src="images/line-1.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 350</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-2.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 450</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-3.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 500</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-4.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 600</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-5.jpeg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 350</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-6.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 380</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-7.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 420</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-8.jpeg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 300</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-9.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 250</h1>
		</div>
		<div class="hori-bar">
			<img src="images/line-10.jpg" style="margin-top: 20px; height: 200px;width: 180px">
			<h1>Rs. 320</h1>
		</div>
	</div>
	<div style="height: 1410px">
		<div>
			<div class="left-side-box">
				<div id="grid-10">
					<a href="view-page.php">
						<div class="first" id="one">
							<img src="images/img-1.jpg">
						</div>
						<div class="first" id="two">
							<h5 class="head5">
								Anand Saree's(Theni)
							</h5>
							<h2 class="head2">
								Floral Print Daily Wear Georgatte Shirt&nbsp&nbsp&nbsp
							</h2>
							<h1>
								&#8377 750 &nbsp
								<h2 class="head3">
									<strike>
										1000
									</strike>
									&nbsp 25% off
								</h2>
							</h1>
							<h3>
								Colour:
								<b style="color: #3bb9ff">
									Skyblue
								</b>
							</h3>
							<h3>
								Rating: 
								<span>
									4.3&#9733
								</span>
							</h3>
							<h3>
								<a href="#">
									Free delivery on orders over &#8377 499
								</a>
							</h3>
						</div>
						<div class="first" class="three">
							<img src="images/extra-4.png">
						</div>
					</a>
				</div>
				<div id="grid-11">
					<div class="first" id="one">
						<img src="images/img-2.png">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Boyzz Fasions(Theni)
						</h5>
						<h2 class="head2">
							Self Design Men Hooded Neck Red T-Shirt
						</h2>
						<h1>
							&#8377 250 &nbsp
							<h2 class="head3">
								<strike>
									500
								</strike>
								&nbsp 50% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: red">
								Red
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.7&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-6.png">
					</div>
				</div>
			</div>
			<div class="right-side-box" id="grid-12">
				<div class="head4">
					<img src="images/img-14.jpg" id="img-9">
				</div>
				<div style="margin-left: 25px">
					<h5 class="head5">
						Kumar Wedding Fasions(Theni)
					</h5>
					<h2 class="head2">
						Special Wedding Dress(couple)
					</h2>
					<h1>
						&#8377 1950 &nbsp
						<h2 class="head3">
							<strike>
								2440
							</strike>
							&nbsp 20% off
						</h2>
					</h1>
					<h3>
						Colour:
						<b style="color: #ff00ff">
						 Pink
						</b>
					</h3>
					<h3>Rating: 
						<span>
							4.5&#9733
						</span>
					</h3>
					<h3>
						<a href="#">
							Free delivery on orders over &#8377 499
						</a>
					</h3>
				</div>
			</div>
		</div>
		<div>
			<div class="left-side-box-1" id="grid-13">
				<div class="head4">
					<img src="images/img-15.jpg" id="img-9">
				</div>
				<div style="margin-left: 25px">
					<h5 class="head5">
						Kumar Wedding Fasions(Theni)
					</h5>
					<h2 class="head2">
						Special Wedding Dress(couple)
					</h2>
					<h1>
						&#8377 1950 &nbsp
						<h2 class="head3">
							<strike>
								2440
							</strike>
							&nbsp 20% off
						</h2>
					</h1>
					<h3>
						Colour:
						<b style="color: #ff00ff">
						 Pink
						</b>
					</h3>
					<h3>Rating: 
						<span>
							4.5&#9733
						</span>
					</h3>
					<h3>
						<a href="#">
							Free delivery on orders over &#8377 499
						</a>
					</h3>
				</div>
			</div>
			<div class="right-side-box-1">
				<div id="grid-14">
					<a href="view-page.php">
						<div class="first" id="one">
							<img src="images/img-16.jpg">
						</div>
						<div class="first" id="two">
							<h5 class="head5">
								Anand Saree's(Theni)
							</h5>
							<h2 class="head2">
								Floral Print Daily Wear Georgatte Shirt&nbsp&nbsp&nbsp
							</h2>
							<h1>
								&#8377 750 &nbsp
								<h2 class="head3">
									<strike>
										1000
									</strike>
									&nbsp 25% off
								</h2>
							</h1>
							<h3>
								Colour:
								<b style="color: #3bb9ff">
									Skyblue
								</b>
							</h3>
							<h3>
								Rating: 
								<span>
									4.3&#9733
								</span>
							</h3>
							<h3>
								<a href="#">
									Free delivery on orders over &#8377 499
								</a>
							</h3>
						</div>
						<div class="first" class="three">
							<img src="images/extra-4.png">
						</div>
					</a>
				</div>
				<div id="grid-15">
					<div class="first" id="one">
						<img src="images/img-17.jpeg">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Boyzz Fasions(Theni)
						</h5>
						<h2 class="head2">
							Self Design Men Hooded Neck Red Shirt
						</h2>
						<h1>
							&#8377 250 &nbsp
							<h2 class="head3">
								<strike>
									500
								</strike>
								&nbsp 50% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: red">
								Red
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.7&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-6.png">
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="left-side-box">
				<div id="grid-16">
					<a href="view-page.php">
						<div class="first" id="one">
							<img src="images/img-8.jpg">
						</div>
						<div class="first" id="two">
							<h5 class="head5">
								Anand Saree's(Theni)
							</h5>
							<h2 class="head2">
								Floral Print Daily Wear Georgatte Saree&nbsp&nbsp&nbsp
							</h2>
							<h1>
								&#8377 750 &nbsp
								<h2 class="head3">
									<strike>
										1000
									</strike>
									&nbsp 25% off
								</h2>
							</h1>
							<h3>
								Colour:
								<b style="color: #3bb9ff">
									Skyblue
								</b>
							</h3>
							<h3>
								Rating: 
								<span>
									4.3&#9733
								</span>
							</h3>
							<h3>
								<a href="#">
									Free delivery on orders over &#8377 499
								</a>
							</h3>
						</div>
						<div class="first" class="three">
							<img src="images/extra-4.png">
						</div>
					</a>
				</div>
				<div id="grid-17">
					<div class="first" id="one">
						<img src="images/img-7.jpeg">
					</div>
					<div class="first" id="two">
						<h5 class="head5">
							Boyzz Fasions(Theni)
						</h5>
						<h2 class="head2">
							Self Design Men Hooded Neck Red T-Shirt
						</h2>
						<h1>
							&#8377 250 &nbsp
							<h2 class="head3">
								<strike>
									500
								</strike>
								&nbsp 50% off
							</h2>
						</h1>
						<h3>
							Colour:
							<b style="color: red">
								Red
							</b>
						</h3>
						<h3>
							Rating: 
							<span>
								4.7&#9733
							</span>
						</h3>
						<h3>
							<a href="#">
								Free delivery on orders over &#8377 499
							</a>
						</h3>
					</div>
					<div class="first" class="three">
						<img src="images/extra-6.png">
					</div>
				</div>
			</div>
			<div class="right-side-box" id="grid-18">
				<div class="head4">
					<img src="images/img-10.jpeg" id="img-9">
				</div>
				<div style="margin-left: 25px">
					<h5 class="head5">
						Kumar Wedding Fasions(Theni)
					</h5>
					<h2 class="head2">
						Special Wedding Dress(couple)
					</h2>
					<h1>
						&#8377 1950 &nbsp
						<h2 class="head3">
							<strike>
								2440
							</strike>
							&nbsp 20% off
						</h2>
					</h1>
					<h3>
						Colour:
						<b style="color: #ff00ff">
						 Pink
						</b>
					</h3>
					<h3>Rating: 
						<span>
							4.5&#9733
						</span>
					</h3>
					<h3>
						<a href="#">
							Free delivery on orders over &#8377 499
						</a>
					</h3>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'?>
</body>
</html>