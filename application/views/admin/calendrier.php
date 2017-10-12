<!DOCTYPE html>
<html>
  <head>
    <title>Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="<?= base_url('assets/jquery/jquery-ui/jquery-ui.css')?>" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/stylesheets/fullcalendar/dist/fullcalendar.css')?>" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="<?= base_url('assets/stylesheets/admin_style.css')?>" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/images/favicon/favicon.ico')?>" type="image/gif">

    <link href="<?= base_url('assets/stylesheets/calendar.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
  	     <div class="container_admin">
  	        <div class="row">
  	           <div class="col-md-5">
  	              <!-- Logo -->
  	              <div class="logo">
  	                 <h1>Calendrier de réservation</h1>
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
  									<!-- <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li> -->
  									<li><a href="<?= site_url('admin/tarifs')?>"><i class="glyphicon glyphicon-pencil"></i> Tarifs</a></li>
  									<li><a href="<?= site_url('admin/compte')?>"><i class="glyphicon glyphicon-tasks"></i> Compte utilisateur</a></li>
                    <li><a href="<?= site_url('user/logout')?>"><i class="glyphicon glyphicon-log-out"></i> Déconnexion</a></li>
                    
  							</ul>
  					 </div>
  		</div>

      <div class="content-box-large">
				<h1> Réservation </h1>

			</div>

  <div class="page-content">
    <div class="row">
    <div class="col-md-2">

    </div>
		  <div class="col-md-10">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						<div class="col-md-2">
		  							<div id='external-events'>
	                                    <h4>Evénements</h4>
	                                    <div class='external-event'> 1</div>
	                                    <div class='external-event'> 2</div>
	                                    <div class='external-event'> 3</div>
	                                    <div class='external-event'> 4</div>
	                                    <div class='external-event'> 5</div>
	                                    <div class='external-event'> 6</div>
	                                    <div class='external-event'> 7</div>
	                                    <div class='external-event'> 8</div>
	                                    <div class='external-event'> 9</div>
	                                    <div class='external-event'> 10</div>
	                                    <div class='external-event'> 11</div>
	                                    <div class='external-event'> 12</div>
	                                    <div class='external-event'> 13</div>
	                                    <div class='external-event'> 14</div>
	                                    <div class='external-event'> 15</div>
                                      <div class='external-event'> 16</div>
	                                    <div class='external-event'> 17</div>
	                                    <div class='external-event'> 18</div>
	                                    <p>
	                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>Enlever</label>
	                                    </p>
                                    </div>
		  						</div>
		  						<div class="col-md-10"
		  							<div id='calendar'></div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>


		  </div>
		</div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url('assets/jquery/jquery.js')?>"></script>
    <!-- jQuery UI -->
    <script src="<?= base_url('assets/jquery/jquery-ui/jquery-ui.js')?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('assets/javascripts/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/javascripts/moment/moment.js')?>"></script>
    <script src="<?= base_url('assets/stylesheets/fullcalendar/dist/fullcalendar.js')?>"></script>
    <script src="<?= base_url('assets/stylesheets/fullcalendar/dist/locale/fr.js')?>"></script>
    <script src="<?= base_url('assets/javascripts/gcal.js')?>"></script>
    <script src="<?= base_url('assets/javascripts/custom.js')?>"></script>
    <script src="<?= base_url('assets/javascripts/calendar.js')?>"></script>





  </body>
</html>
