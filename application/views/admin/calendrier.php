<!DOCTYPE html>
<html>
  <head>
    <title>Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="<?= base_url('assets/jquery/jquery-ui/jquery-ui.css')?>" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/stylesheets/fullcalendar/dist/fullcalendar.css')?>" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="<?= base_url('assets/stylesheets/style2.css')?>" rel="stylesheet">

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
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo"><br/><br/><br/>
	                 <h1>CALENDRIER DE RESERVATION</h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Rechercher</button>
	                       </span>
	                  </div>
	                </div>
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
                  <li class="current"><a href="<?= site_url('admin')?>"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                  <li><a href="<?= site_url('admin/reservation')?>"><i class="glyphicon glyphicon-calendar"></i> Reservation</a></li>
                  <!-- <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                  <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li> -->
                  <!-- <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li> -->
                  <li><a href="<?= site_url('admin/tarifs')?>"><i class="glyphicon glyphicon-pencil"></i> Tarifs</a></li>
                  <!-- <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li> -->
              </ul>
           </div>
    </div>
		  <div class="col-md-10">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						<div class="col-md-2">
		  							<div id='external-events'>
	                                    <h4>Draggable Events</h4>
	                                    <div class='external-event'>My Event 1</div>
	                                    <div class='external-event'>My Event 2</div>
	                                    <div class='external-event'>My Event 3</div>
	                                    <div class='external-event'>My Event 4</div>
	                                    <div class='external-event'>My Event 5</div>
	                                    <div class='external-event'>My Event 6</div>
	                                    <div class='external-event'>My Event 7</div>
	                                    <div class='external-event'>My Event 8</div>
	                                    <div class='external-event'>My Event 9</div>
	                                    <div class='external-event'>My Event 10</div>
	                                    <div class='external-event'>My Event 11</div>
	                                    <div class='external-event'>My Event 12</div>
	                                    <div class='external-event'>My Event 13</div>
	                                    <div class='external-event'>My Event 14</div>
	                                    <div class='external-event'>My Event 15</div>
	                                    <p>
	                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
	                                    </p>
                                    </div>
		  						</div>
		  						<div class="col-md-10">
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
