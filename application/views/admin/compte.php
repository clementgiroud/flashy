<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <meta name="description" content="FLASHY CAR WASH">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?= base_url('assets/stylesheets/admin_style.css')?>" rel="stylesheet">

  	<link rel="icon" href="<?= base_url('assets/images/favicon/flashy.ico')?>" type="image/gif">
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>Compte utilisateur</h1>
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
      <h1> Comptes utilisateurs </h1>

    </div>



        <div class="container">
          <!-- <h1>Bienvenue sur la page d'administration</h1><a href='<?php echo site_url("user/logout") ?>'>Déconnexion</a> -->
      </center>

          <br/><br/><br/><br/><br/>
          <button class="btn btn-success" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i> Ajouter un utilisateur</button>
          <br />
          <br />
          <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
      					<th>Id</th>
      					<th>Nom</th>
      					<th>Email</th>
      					<th>Mot de passe</th>
      					<th>Type</th>

                <th style="width:125px;">Action
                </p></th>
              </tr>
            </thead>
            <tbody>
      				<?php foreach($compte as $row){?>
      				     <tr>
      				         <td><?php echo $row->id;?></td>
      								 <td><?php echo $row->username;?></td>
      				         <td><?php echo $row->email;?></td>
      								<td><?php echo $row->password;?></td>
      								<td><?php echo $row->type;?></td>
      								<td>
      									<button class="btn btn-warning" onclick="edit_user(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
      									<button class="btn btn-danger" onclick="delete_user(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>


      								</td>
      				      </tr>
      				     <?php }?>



            </tbody>

            <tfoot>
              <tr>
                <th>Id</th>
      					<th>Nom</th>
      					<th>Email</th>
      					<th>Mot de passe</th>
      					<th>Type</th>

                <th style="width:125px;">Action
              </tr>
            </tfoot>
          </table>

        </div>


        <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
        <script src="<?php echo base_url('assests/javascripts/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assests/jquery/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>



        <script type="text/javascript">
        $(document).ready( function () {

            $('#table_id').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        } );
          var save_method; //for save method string
          var table;


          function add_user()
          {
            save_method = 'add';
            $('#form')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap modal
            $('.modal-title').text('Utilisateurs'); // Set Title to Bootstrap modal title
          }

          function edit_user(id)
          {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals

            //Ajax Load data from ajax
            $.ajax({
              url : "<?php echo site_url('admin/ajax_edit_user/')?>/" + id,
              type: "GET",
              dataType: "JSON",
              success: function(data)
              {

                  $('[name="id"]').val(data.id);
                  $('[name="username"]').val(data.username);
                  $('[name="email"]').val(data.email);
                  $('[name="password"]').val(data.password);
                  $('[name="type"]').val(data.type);


                  $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                  $('.modal-title').text('Utilisateurs'); // Set title to Bootstrap modal title

              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error get data from ajax');
              }
          });
          }



          function save()
          {
            var url;
            if(save_method == 'add')
            {
                url = "<?php echo site_url('admin/create_user')?>";
            }
            else
            {
              url = "<?php echo site_url('admin/user_update')?>";
            }

             // ajax adding data to database
                $.ajax({
                  url : url,
                  type: "POST",
                  data: $('#form').serialize(),
                  dataType: "JSON",
                  success: function(data)
                  {
                     //if success close modal and reload ajax table
                     $('#modal_form').modal('hide');
                    location.reload();// for reload a page
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error adding / update data');
                  }
              });
          }

          function delete_user(id)
          {
            if(confirm('Etes-vous sûr de vouloir supprimer cet utilisateur ?'))
            {
              // ajax delete data from database
                $.ajax({
                  url : "<?php echo site_url('admin/user_delete')?>/"+id,
                  type: "POST",
                  dataType: "JSON",
                  success: function(data)
                  {

                     location.reload();
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error deleting data');
                  }
              });

            }
          }

        </script>

        <!-- Bootstrap modal -->
        <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Utilisateurs</h3>
            </div>
            <div class="modal-body form">
              <form action="#" id="form" class="form-horizontal">
                <input placeholder="Id" value="" name="id"/>
                <div class="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-3">Nom</label>
                    <div class="col-md-9">
                      <input name="username" placeholder="Nom" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-9">
                      <input name="email" placeholder="Email" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Mot de passe</label>
                    <div class="col-md-9">
      								<input name="password" placeholder="Mot de passe" class="form-control" type="text">

                    </div>
                  </div>
      						<div class="form-group">
      							<label class="control-label col-md-3">Type</label>
      							<div class="col-md-9">
      								<input name="type" placeholder="Type" class="form-control" type="text">

      							</div>
      						</div>

                </div>
              </form>
                </div>
                <div class="modal-footer">
                  <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Enregistrer</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        <!-- End Bootstrap modal -->








  </body>
</html>
