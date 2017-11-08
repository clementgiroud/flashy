<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/admin_style.css')?>" rel="stylesheet">

	<link rel="icon" href="<?= base_url('assets/images/favicon/favicon.ico')?>" type="image/gif">


</head>
<body>

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
									<li><a href="<?= site_url('admin/service')?>"><i class="glyphicon glyphicon-stats"></i> Services</a></li>
									<li><a href="<?= site_url('gallery')?>"><i class="glyphicon glyphicon-list"></i> Galerie</a></li>
									<li><a href="<?= site_url('gallery/slide')?>"><i class="glyphicon glyphicon-record"></i> Slider</a></li>
									<li><a href="<?= site_url('admin/tarifs')?>"><i class="glyphicon glyphicon-pencil"></i> Tarifs</a></li>
									<li><a href="<?= site_url('admin/nettoyage')?>"><i class="glyphicon glyphicon-list"></i> Nettoyage</a></li>									
									<li><a href="<?= site_url('admin/compte')?>"><i class="glyphicon glyphicon-tasks"></i> Compte utilisateur</a></li>
									<li><a href="<?= site_url('user/logout')?>"><i class="glyphicon glyphicon-log-out"></i> Déconnexion</a></li>
							</ul>
					 </div>
		</div>




			<div class="content-box-large">
				<h1> Slider </h1>

			</div>
		<!-- </div> -->
	</div>
	</div>

<div id="container">



	<div id="body">
		<?php if($slides->num_rows() > 0) : ?>

			<?php if($this->session->flashdata('message')) : ?>
				<div class="alert alert-success" role="alert" align="center">
					<?=$this->session->flashdata('message')?>
				</div>
			<?php endif; ?>

			<div align="center"><?=anchor('gallery/add_slide','Ajouter un slide',['class'=>'btn btn-primary'])?></div>
			<hr />
			<div class="row">
				<?php foreach($slides->result() as $img) : ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<?=img($img->file)?>
						<div class="caption">
							<h3><?=$img->caption?></h3>
							<p><?=substr($img->description, 0,100)?>...</p>
							<p>
								<?=anchor('gallery/edit_slide/'.$img->id,'Mettre à jour',['class'=>'btn btn-warning', 'role'=>'button'])?>
								<?=anchor('gallery/delete_slide/'.$img->id,'Supprimer',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
							</p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div align="center">We don't have any image yet, go ahead and <?=anchor('gallery/add_slide','add a new one')?>.</div>
		<?php endif; ?>
	</div>

</div>

</body>
</html>
