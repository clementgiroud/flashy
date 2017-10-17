<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url('assets/images/favicon/flashy.ico')?>" type="image/gif">

  <link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/admin_style.css')?>" rel="stylesheet">
</head>

<body class="admin">


	<div class="header">
	     <div class="container_admin">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>ESPACE ADMIN</h1>
	              </div>
	           </div>

	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?= site_url('admin/success')?>"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                    <li><a href="<?= site_url('admin/reservation')?>"><i class="glyphicon glyphicon-calendar"></i> Reservation</a></li>
                    <!-- <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li> -->
                    <li><a href="<?= site_url('gallery')?>"><i class="glyphicon glyphicon-list"></i> Galerie</a></li>
                    <li><a href="<?= site_url('gallery/slide')?>"><i class="glyphicon glyphicon-record"></i> Slider</a></li>
                    <li><a href="<?= site_url('admin/tarifs')?>"><i class="glyphicon glyphicon-pencil"></i> Tarifs</a></li>
                    <li><a href="<?= site_url('admin/compte')?>"><i class="glyphicon glyphicon-tasks"></i> Compte utilisateur</a></li>
										<li><a href="<?= site_url('user/logout')?>"><i class="glyphicon glyphicon-log-out"></i> Déconnexion</a></li>

                </ul>
             </div>
		  </div>


		  	<div class="content-box-large">

		  	</div>
		   </div>
		</div>
    </div>

  </body>
</html>
