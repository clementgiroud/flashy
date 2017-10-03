<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap/bootstrap.css"> -->
  <link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/fontawesome-webfont.ttf') ?>">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
  <!-- <link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/mystyle.css"> -->
	<script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>
	<script src="<?php echo base_url('assets/javascripts/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
</head>


	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>ESPACE ADMIN</h1>
	              </div>
	           </div>
	           <!-- <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div> -->
	           <!-- <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div> -->
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
                    <!-- <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li> -->
                    <!-- <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li> -->
                    <li><a href="<?= site_url('admin/tarifs')?>"><i class="glyphicon glyphicon-pencil"></i> Tarifs</a></li>
                    <li><a href="<?= site_url('admin/compte')?>"><i class="glyphicon glyphicon-tasks"></i> Compte utilisateur</a></li>
                </ul>
             </div>
		  </div>
		  <!-- <div class="col-md-10"> -->
		  	<!-- <div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">New vs Returning Visitors</div>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et,
				  			<br /><br />
				  			Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div> -->

		  	<!-- <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">New vs Returning Visitors</div>

						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
						<br /><br />
					</div>
		  		</div>
		  	</div> -->

		  	<div class="content-box-large">

		  	</div>
		  <!-- </div> -->
		</div>
    </div>

  </body>
</html>
