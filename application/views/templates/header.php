<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/stylesheets/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/accueil.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/stylesheets/slider.css')?>">
  <link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">
  <link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">

</head>

<body>



  <div class='topbar banner '>
	    <div id="top-nav">


	        <div class="black-bar">
	            <div class="logo"><a title='flashy'  href='/' ><img
	                            alt="logo" src="<?= base_url('assets/images/logo.png')?>" height="auto" width="400px"></a></div>


	            <div class="top-nav-right">
	                <ul>

	                    <li class="top-login">

              <?php

              if(!empty($_SESSION['connecte']))
              {?>
                <a href="<?= site_url('user/logout')?>" >Déconnexion</a>
								<ul>
									<li class="login"> <span class="h2"><h3>Bienvenue <?php print_r($this->session->email);?></h3></span>
										<?php
										echo form_open('user/login_validation');

										echo validation_errors();

									echo '<form id="login-box">';
										echo  '<fieldset id="inputs">';



									echo '</form> <br>';
									echo form_close();
									?>
									</li>

								</ul><?php


              }else {?>
								<a href="<?= site_url('user/login')?>" >Se Connecter</a>

								<ul>
									<li class="login"> <span class="h2">Connexion</span>
										<?php
										echo form_open('user/login_validation');

										echo validation_errors();

									echo '<form id="login-box">';
										echo  '<fieldset id="inputs">';
											echo '<input id="email" type="email" name="email" placeholder="Adresse Email" required="">';
											echo '<input id="password" type="password" name="password" placeholder="Mot de passe" required="" autocomplete="off">';
											echo '<div class="yandypink" id="login-response">';
										echo '</div>';
										echo '</fieldset>';
										echo '<fieldset id="actions">';
											echo '<input type="submit" id="submit" value="Valider">';
										echo '</fieldset> <span class="h4">Pas encore inscrit ? <a href="index.php/user/signup">Créer un compte</a></span>';
										echo '<p style="margin-top:6px;" class="pointer yandypink" id="lost-password" ><a href="index.php/user/forgotPassword">Mot de passe oublié ?</a></p>';
									echo '</form> <br>';
									echo form_close();
									?>
									</li>
								</ul><?php
              }?>

	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>


			<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>


      <div id="navigation" class="banner">
        <ul class="nav clearfix animated">

          <li class="active" nav-id="19">
            <a href="<?= site_url('main'); ?>" >
                <h1>ACCUEIL</h1>
            </a>

          </li>
          <li nav-id="112">
            <a href="<?= site_url("tarifs/viewcarte") ?>" >
              TARIFS
            </a>
          </li>
          <li nav-id="84">
            <a href="<?= site_url("main/services") ?>" >
              SERVICES
            </a>
          </li>
          <li nav-id="15">
            <a href="<?= site_url("main/nettoyage") ?>" >
              NETTOYAGE
            </a>
          </li>
          <li nav-id="32">
            <a href="<?= site_url("galerie") ?>" >
              GALERIE
            </a>
          </li>
          <li nav-id="115">
            <a href="<?= site_url("contact") ?>" >
              CONTACT
            </a>
          </li>
        </ul>
    </div>

</div>




</body>
</html>
