<!DOCTYPE HTML>
<html>

<head>
        <title>Nos plus</title>
        <meta charset="utf-8">
        <meta name="description" content="165c. uniques">
        <!-- css -->
      	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
      	<link href="<?= base_url('assets/bootstrap/css/style.css') ?>" rel="stylesheet">
        <!-- <link href="<?= base_url('assets/stylesheets/least.min.css')?>" rel="stylesheet" /> -->
        <link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">
        <script type="text/javascript" src="<?= base_url('html5gallery/jquery.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('html5gallery/html5gallery.js')?>"></script>

</head>

<body class="nosplus">


  <!-- Least Gallery -->
  <section id="least"><br/>

      <!-- Least Gallery: Fullscreen Preview -->
      <div class="least-preview"></div>

      <!-- Least Gallery: Thumbnails -->
      <ul class="least-gallery">
        <?php foreach ($services as  $img):
          ?>



          <li>
            <figure style="text-align: center; margin-bottom: 15px;">
              <img src="<?= base_url($img->file)?>" alt="" width="304" height="228"><br/>
                <figcaption style="margin-top: 10px;"><?=$img->caption?></figcaption><br/>
                <p style="text-align: left;"><?=$img->description?></p>
            </figure>


          </li>


        <?php endforeach; ?>
      </ul>
  </section>






</body>
