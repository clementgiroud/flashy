<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/stylesheets/bootstrap.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/stylesheets/bootstrap/bootstrap-responsive.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?= base_url('assets/stylesheets/camera.css')?>" type="text/css" media="screen">
	<link href="<?= base_url('assets/stylesheets/header.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/fontawesome-webfont.ttf') ?>">
	<link rel="stylesheet" type="text/css" href="style/slider.css">



</head>






	<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.easing.1.3.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/javascripts/superfish.js')?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.ui.totop.js')?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/javascripts/camera.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.mobile.customized.min.js')?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.caroufredsel.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.touchSwipe.min.js')?>"></script>

	<script>
	$(document).ready(function() {
		//
		$('#camera_wrap').camera({
			//thumbnails: true
			//alignment			: 'centerRight',
			autoAdvance			: true,
			mobileAutoAdvance	: true,
			fx					: 'scrollRight',
			height: '52%',
			hover: false,
			loader: 'none',
			navigation: true,
			navigationHover: true,
			mobileNavHover: true,
			playPause: false,
			pauseOnClick: false,
			pagination			: true,
			time: 5000,
			transPeriod: 800,
			minHeight: '300px'
		});

		//	carouFredSel services
		$('#services .carousel.main ul').carouFredSel({
			auto: {
				timeoutDuration: 8000
			},
			responsive: true,
			prev: '.services_prev',
			next: '.services_next',
			width: '100%',
			scroll: {
				items: 1,
				duration: 1000,
				easing: "easeOutExpo"
			},
			items: {
	        	width: '350',
				height: 'variable',	//	optionally resize item-height
				visible: {
					min: 1,
					max: 4
				}
			},
			mousewheel: false,
			swipe: {
				onMouse: true,
				onTouch: true
				}
		});




		$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
		function updateSizes_vat(){
			$('#services .carousel.main ul').trigger("updateSizes");
		}
		updateSizes_vat();


	}); //
	$(window).load(function() {
		//

	}); //
	</script>

	<!-- GOOGLE MAP -->
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!--[if lt IE 8]>
			<div style='text-align:center'>&nbsp;</div>
		<![endif]-->

	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
	</head>

	<body class="front">
	<div id="main">

	<div id="top">

	<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
			<div data-src="imageslider/slide01.jpg">
				<div class="camera_caption fadeIn">
					<div class="txt1">Flashy Car Wash</div>
					<div class="txt2">Lavage, Lustrage et Protection de votre carrosserie</div>
				</div>
			</div>
			<div data-src="imageslider/2.jpg">
				<div class="camera_caption fadeIn">
					<div class="txt1">Flashy Car Wash</div>
					<div class="txt2">Lavage, Renovation et Entretien de vos interieurs.</div>
				</div>
			</div>
			<div data-src="imageslider/slide03.jpg">
				<div class="camera_caption fadeIn">
					<div class="txt1">Flashy Car Wash</div>
					<div class="txt2">Nettoyage et protection de vos Jantes et Accessoires</div>
				</div>
			</div>
			<div data-src="imageslider/slide04.png">
				<div class="camera_caption fadeIn">
					<div class="txt1">Flashy Car Wash</div>
					<div class="txt2">Nettoyage et protection de vos v�hicules de collection</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="top_inner">

	<div class="top1_wrapper">
	<div class="top1 inner clearfix">
	<div class="container">

	<div class="slogan1">Entretien et Renovation de votre vehicule</div>

	<div class="phone1">Phone pour Reservation: <span>0970210694</span></div>

	</div>
	</div>
	</div>

	<div class="top2_wrapper">
	<div class="top2 inner clearfix">
	<div class="container">

	<header><div class="logo_wrapper"><a href="index.html" class="logo">
	  <img src="<?= base_url('assets/images/logo.png')?>" alt="" width="380" height="88"></a></div></header>

	<div class="menu_wrapper">
	<div class="navbar navbar_">
		<div class="navbar-inner navbar-inner_">
			<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
	<!--menu-->
			<div class="nav-collapse nav-collapse_ collapse">
				<ul class="nav sf-menu clearfix">
	<li class="active"><a href="index.html">Accueil</a></li>
	<li class="sub-menu sub-menu-1"><a href="#">Services</a>
		<ul>
			<li><a href="presentation.html">Presentation</a></li>
			<li><a href="news.html">News</a></li>
			<li><a href="clients.html">Temoignages</a></li>
		</ul>
	<li class="sub-menu sub-menu-1"><a href="#">Nettoyage</a>
		<ul>
			<li><a href="carrosserie.html">Carrosserie</a></li>
			<li><a href="interieurs.html">Interieur</a></li>
			<li><a href="decalaminage.html">Decalaminage</a></li>
		</ul>
	<li><a href="price.html">Tarifs</a></li>
	<li><a href="photos.html">Gallerie</a></li>
	<li><a href="contact.html">Contact</a>
			</div>
	<!--menu fin--></div>
	</div>
	</div>

					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>

	</div>
	</div>

	</div>

	<div class="bot1">
	<div class="container">
	<div class="row">
	<div class="span4">

	<div class="bot1_title"></div>

	</div><div class="container">
	<div class="hl1"></div>
	</div>

	<div class="bot1">
	<div class="container">
	<div class="row">

	<p align="center">
	<img border="0" src="<?= base_url('assets/images/partners.png')?>" width="754" height="58"></p>
	<div class="container">
	<div class="row">
	<div class="span4">
	<div class="bot1_title">Societe</div>
	<p>Flashy Car Wash.<br>Telephone: 0970210694</p>
	</div>
	<div class="span4">
	<div class="bot1_title">Reseaux Sociaux:</div>
	<div class="social_wrapper">
		<ul class="social clearfix">
		    <li><a href="https://www.facebook.com/flashycarwash/" target="_blank"><img src="images/social_ic3.png" width="44" height="44"></a></li>
		    <li><a href="https://www.facebook.com/flashycarwash/"><img src="images/social_ic2.png" width="44" height="44"></a></li>
		    <li><a href="https://www.facebook.com/flashycarwash/" target="_blank"><img src="images/social_ic3.png" width="44" height="44"></a></li>
		</ul>
	</div>
	</div>
	<div class="span4">
	<div class="logo2_wrapper"><a href="index.html" class="logo2">
	  <img src="images/logo2.png" alt="" width="210" height="45"></a></div>
	<footer><div class="copyright">Copyright Flashy Car Wash @ 2017<p><font size="1">
	  creation Yadetout-Groupe </font></div></footer>
	</div>



	<div class='topbar banner '>
	    <div id="top-nav">


	        <div class="black-bar">
	            <div class="logo"><a title='Lingerie'  href='/' ><img
	                            alt="Lingerie" src="<?= base_url('assets/images/logo.png')?>" height="auto" width="135px"></a></div>

	            <div class="searchbar"><form id="searchbox" method='get' action="/search.php">
	                    <input id="search" name='q' type="text" placeholder="SEARCH" autocomplete="off">
	                    <input id="perform-search"  type="submit" value='' >
	                    <div style="clear:both;"></div>
	                    <div id='search-dropdown'></div>
	                </form>
	            </div>
	            <div class="top-nav-right">
	                <ul>
	                    <li><a href="#"><i class="fa fa-question-circle"></i> HELP</a>
	                        <ul class="help-dropdown">

	                        </ul>
	                    </li>
	                    <li class="top-login">
	                        <a href="/account"><i class="fa fa-user"></i> Se connecter</a>
	                    </li>
	                    <li class="cart"><a href="https://www.yandy.com/cart.php" ><i class="fa fa-shopping-cart"></i> CART <span id="cart-total-quantity"></span></a>
	                        <ul>
	                            <li class="minicart-container">
	                                <i class="fa fa-circle-o-notch fa-spin"></i>
	                            </li>
	                        </ul>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>



	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>
