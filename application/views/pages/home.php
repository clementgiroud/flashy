<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
  <link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet">
</head>
<body>

<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="/assets/images/oldcar.jpg" alt="oldcar">
				<div class="carousel-caption">
					<h2>Porsche 356</h2>
					<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
			<div class="item">
				<img src="/assets/images/porche.jpg" alt="porche">
				<div class="carousel-caption">
					<h2>Porche</h2>
						<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
			<div class="item">
				<img src="/assets/images/benz.jpg" alt="benz">
				<div class="carousel-caption">
					<h2>Car</h2>
					<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
						<h1>SEARCH TEXT</h1>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>SEARCH TEXT</h1>
				</div>
				<form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Enter Keyword">
					</div>
				</form>
				<ul class="nav navbar-nav navbarborder">
					<li class="li-category">
						<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
						<ul class="dropdown-menu" id="mydd">
							<li><a href="#">Epic</a></li>
							<li><a href="#">Old</a></li>
							<li><a href="#">New</a></li>
						</ul>
					</li>
					<li class="li-minyear"><a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Min Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
						<ul class="dropdown-menu" id="mydd2">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</li>
					<li class="li-maxyear"><a class="btn dropdown-toggle btn-costume"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Max Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
						<ul class="dropdown-menu" id="mydd3">
							<li><a href="#">1900</a></li>
							<li><a href="#">2000</a></li>
							<li><a href="#">2016</a></li>
						</ul>
					</li>
					<li class="li-slideprice">
						<p> <label class="slidertxt" for="amount">Price </label>
							<input class="priceslider" type="text" id="amount" readonly="readonly">
						</p>
							<div id="slider-range"></div>

					</li>
					<li class="li-search"> <button class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
				</ul>

			</div>
		</nav>
	</div>
</div>

<div class="container">
	 <div class="row">
				<div class="col-md-6"><h1 class="TTC">Tarifs TTC / </h1><h1 class="HT">Tarifs HT</h1></div>
				<div class="col-md-offset-1 col-md-3"><h1>Options et suppléments</h1></div>
	 </div>
</div>

<!-- <script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/isotope.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/myscript.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.1.11.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/bootstrap.js') ?>"></script> -->
</body>
