<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet">
</head>

<body><br/>


	<div class="container-fluid">
		 <div class="row-fluid">
			 <div class="span6"><h1 class="TTC">Tarifs TTC / </h1><h1 class="HT">Tarifs HT</h1></div>
<!-- <h1 class="TTC">Tarifs TTC / </h1><h1 class="HT">Tarifs HT</h1> -->
					<ul>
					<?php foreach ($cate as $tarifs_view => $cat): ?>
						<li>

							<h3 class="nom_tarif">
									<?= html_escape($cat->nom_tarif ) ?>&nbsp;<?= html_escape($cat->prix_tarif_ttc ) ?>€&nbsp;/&nbsp;<h3 class="ht"><?= html_escape($cat->prix_tarif_ht ) ?>€</h3>
								</h3>
								<h3 class="description">
									<?= html_escape($cat->tarif_description ) ?>
								</h3>


							</li>
						<?php endforeach; ?>
					</ul>
			 <div class="span6"><h1 class="HT">Options et suppléments</h1></div>
     </div><br/>
	</div>


  <!-- <div>

	<ul>
	<?php foreach ($cate as $tarifs_view => $cat): ?>
	  <li>

	    <h3 class="nom_tarif">
		      <?= html_escape($cat->nom_tarif ) ?>&nbsp;<?= html_escape($cat->prix_tarif_ttc ) ?>€&nbsp;/&nbsp;<h3 class="ht"><?= html_escape($cat->prix_tarif_ht ) ?>€</h3>
	    </h3>
			<h3 class="description">
<?= html_escape($cat->tarif_description ) ?>
			</h3>


	  </li>
	<?php endforeach; ?>
	</ul
</div> -->










</body>
