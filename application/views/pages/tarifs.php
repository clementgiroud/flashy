<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FLASHY CAR WASH </title>
	<meta name="description" content="FLASHY CAR WASH">
	<link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/stylesheets/accueil.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/fonts/font-awesome.css') ?>" rel="stylesheet">
	<link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">
	

</head>

<body><br/><br/><br/><br/>


<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="content-box-large">
				<div class="panel-heading">
				<div class="panel-title"><h1 class="TTC">Tarifs TTC / </h1><h1 class="HT">Tarifs HT</h1></div>
			</div>
				<div class="panel-body">
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
					<div class="content-box-large box-with-header">
						 <br>* La formule express est adaptée pour un véhicule poussièreux ou moyennement sale mais sans tâches ni mauvaises odeurs.
					<br /><br />
				</div>
				</div>
			</div>
		</div>

		<div class="row">
		<div class="col-md-6">

					<div class="content-box-header">
						<div class="panel-title"><h1 class="option">Options et suppléments</h1></div><br/>
					</div>
					<div class="content-box-large">

						<ul>
						<?php foreach ($opts as $tarifs_view => $opt): ?>
							<li>

								<h3 class="nom_option">
										<?= html_escape($opt->nom_option ) ?>&nbsp;<?= html_escape($opt->option_ttc ) ?>€&nbsp;/&nbsp;<h3 class="ht"><?= html_escape($opt->option_ht ) ?>€<br/> </h3>
								<br/></h3>

							</li>
						<?php endforeach; ?>
						</ul>


				  </div>

			</div>

		</div>
	</div>

</div>

</body>
</html>
