<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/bootstrap/css/style.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/slider.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/styles3.css')?>">

  <link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">
</head>



<body>
	<div class="inner">
	<header>

			<nav>
				<ul>
					<li><a href="#page1" class="active" id="page1-link">Décalaminage</a></li>
					<li><a href="#page2" id="page2-link">Carrosserie</a></li>
					<li><a href="#page3" id="page3-link">Interieur</a></li>
				</ul>
			</nav>
	</header>
  <style>
.mySlides {display:none;}
</style>

	<div id="main-content">

		<section id="page1">
			<h2>D&eacutecalaminage</h2>

          <div id="slideshow">
            <div class="container">
              <div class="w3-content w3-section" style="">
                <?php foreach ($slides as  $img):?>
                  <img class="mySlides" src="<?= base_url($img->file)?>" style="width:100%">
                <?php endforeach; ?>
              </div>
            </div>
          </div>
		</section>

		<section id="page2">
		  <h2>Carrosserie</h2>
          <div id="slideshow">
            <div class="container">
              <div class="w3-content w3-section" style="">
                <?php foreach ($slides2 as  $img):?>
                  <img class="mySlides" src="<?= base_url($img->file)?>" style="width:100%">
                <?php endforeach; ?>
              </div>
            </div>
          </div>
		</section>

		<section id="page3">
		  <h2>Interieur</h2>
        <div id="slideshow">
          <div class="container">
            <div class="w3-content w3-section" style="">
              <?php foreach ($slides3 as  $img):?>
                <img class="mySlides" src="<?= base_url($img->file)?>" style="width:100%">
              <?php endforeach; ?>
            </div>
          </div>
        </div>
		</section>



	</div>


	</div>
  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 5 seconds
  }
  </script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://flashycarwash.fr/assets/javascripts/custom_net.js"></script>
</body>
</html>﻿
