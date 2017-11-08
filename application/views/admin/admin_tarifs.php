<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Tarif</title>
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
	     <div class="container_admin">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>Admin tarif</h1>
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
				<h1> Tarifs	 </h1>

			</div>


  <div class="container">
    <!-- <h1>Bienvenue sur la page d'administration</h1><a href='<?php echo site_url("user/logout") ?>'>Déconnexion</a> -->
</center>

    <br/><br/><br/><br/><br/>
    <button class="btn btn-success" onclick="add_tarif()"><i class="glyphicon glyphicon-plus"></i> Ajouter tarifs</button>
    <br />

    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					<th>Id </th>
					<th>Nom</th>
					<th>Prix TTC</th>
					<th>Prix HT</th>
					<th>Description</th>

          <th style="width:125px;">Action
          </p></th>
        </tr>
      </thead>
      <tbody>
				<?php foreach($tarif as $row){?>
				     <tr>
				         <td><?php echo $row->id_tarif;?></td>
								 <td><?php echo $row->nom_tarif;?></td>
				         <td><?php echo $row->prix_tarif_ttc;?></td>
								<td><?php echo $row->prix_tarif_ht;?></td>
								<td><?php echo $row->tarif_description;?></td>
								<td>
									<button class="btn btn-warning" onclick="edit_tarif(<?php echo $row->id_tarif;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_tarif(<?php echo $row->id_tarif;?>)"><i class="glyphicon glyphicon-remove"></i></button>


								</td>
				      </tr>
				     <?php }?>



      </tbody>

      <tfoot>
        <tr>
					<th>Id </th>
					<th>Nom</th>
					<th>Prix TTC</th>
					<th>Prix HT</th>
					<th>Description</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>

  </div>

	<script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>
	<script src="<?php echo base_url('assets/javascripts/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/jquery/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>



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


    function add_tarif()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Ajouter des Tarifs'); // Set Title to Bootstrap modal title
    }

    function edit_tarif(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id_tarif"]').val(data.id_tarif);
            $('[name="prix_tarif_ttc"]').val(data.prix_tarif_ttc);
            $('[name="nom_tarif"]').val(data.nom_tarif);
            $('[name="prix_tarif_ht"]').val(data.prix_tarif_ht);
            $('[name="tarif_description"]').val(data.tarif_description);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Tarifs'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('admin/tarif_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/tarif_update')?>";
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

    function delete_tarif(id)
    {
      if(confirm('Etes-vous sûr de vouloir supprimer ?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/tarif_delete')?>/"+id,
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
        <h3 class="modal-title">Tarifs</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">

          <div class="form-body">
						<div class="form-group">
              <label class="control-label col-md-3">ID</label>
              <div class="col-md-9">
                <input name="id_tarif" placeholder="ID" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Prix TTC</label>
              <div class="col-md-9">
                <input name="prix_tarif_ttc" placeholder="Prix TTC" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nom tarif</label>
              <div class="col-md-9">
                <input name="nom_tarif" placeholder="Nom " class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Prix HT</label>
              <div class="col-md-9">
								<input name="prix_tarif_ht" placeholder="Prix HT" class="form-control" type="text">

              </div>
            </div>
						<div class="form-group">
							<label class="control-label col-md-3">Description</label>
							<div class="col-md-9">
								<input name="tarif_description" placeholder="Description" class="form-control" type="text">

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
