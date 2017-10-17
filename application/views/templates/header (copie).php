<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap/bootstrap.css">
  <link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/fontawesome-webfont.ttf') ?>">
	<link rel="stylesheet" type="text/css" href="style/slider.css">

</head>
<body>

<!-- Header -->
<div class="allcontain">
	<div class="header">


			 <!-- <ul class="socialicon">
				<li><a href="https://www.facebook.com/flashycarwash/"><i class="fa fa-facebook fa-lg"></i></a></li> -->

				<!-- <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li> -->
			<!-- </ul>  -->
			<ul class="givusacall">

				<li>FLASHY CAR WASH          La propreté c'est nous... Alors détendez-vous !!! </li>
				<!-- <li class="flashy">FLASHY CAR WASH</li> -->
			</ul>

			<div id="h-account-cart">
				<p id="h-account"> <a id="h-account-a" class="pop-bottom-right" href="<?= site_url('user/signup')?>"><span class="icon" data-icon="&#xe067;" aria-hidden="true"></span>Bienvenue, <span id="h-account-span">identifiez-vous</span></a> </p>
				<p id="h-cart"> <a id="h-cart-a" href=""> <strong id="h-cart-h1"><span class="icon" data-icon="&#xe00d;" aria-hidden="true"></span></strong>  </a> </p> </div>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">

		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li><img class="logo" src="<?= base_url('assets/images/logo.png') ?>" alt="logo" width="380" height="88"></li>
				<li class="active"><a href="<?= site_url('main'); ?>">ACCUEIL</a> </li>
				<li class="active"><a href="<?= site_url("tarifs/viewcarte") ?>">TARIFS</a></li>
				<li class="active"><a href="<?= site_url("main/services") ?>">NOS PLUS</a></li>
				<li class="active"><a href="<?= site_url("contact") ?>">CONTACT</a></li>
				<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESPACE PERSO <span class="caret"></span></a>
						<ul class="dropdown-menu dropdowncostume">
							<li><a href="<?php echo site_url("user/signup") ?>">INSCRIPTION</a></li>
							<li><a href="<?php echo site_url("user/login") ?>">CONNEXION</a></li>
							<li><a href="<?php echo site_url("user/members") ?>">RESERVATION</a></li>
						</ul>
				</li> -->

			</ul>
		</div>
	</nav>
</div>


<!-- <section id="account-pop">
	<div id="c1-account-pop"> <span id="account-arrow"><span class="icon" data-icon="&#xf0d8;" aria-hidden="true"></span></span>
		<form class="form1 login-form form-validator" id="account-form" action="<?= site_url('main/signup')?>" method="post">
			<div class="field">
			<label class="label" for="ident-email">Votre adresse e-mail</label>
			<input type="text" class="textbox validate[required,custom[email]]" id="ident-email" name="ident_email" value="" placeholder="Tapez votre email..." />
			<div class="clear1px"></div>
		</div>
		<div class="field">
			<label class="label" for="ident-pwd">Votre mot de passe</label>
			<input type="password" class="textbox validate[required]" id="ident-pwd" name="ident_pass" placeholder="Tapez votre mot de passe.." />
			<div class="clear1px"></div>
		</div>
		<div class="btn-area"> <p id="pwd-lost"><a class="pwd-lost-a" href="/p/mot-de-passe-oublie.html">J'ai perdu mon mot de passe !</a></p>
			<button class="button btn4" type="submit" name="btnc">S'identifier</button>
			<div class="clear1px"></div>
		</div>
		<p id="account-create">Ou <a class="button btn2" href="/compte/">Créer un compte maintenant</a></p>
	</form>
</div>
</section> -->

<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/isotope.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/myscript.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/jquery.1.11.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascripts/bootstrap.js') ?>"></script>
</body>
</html>
