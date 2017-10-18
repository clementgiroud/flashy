<!DOCTYPE HTML>
<html>

<head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta name="description" content="165c. uniques">
        <!-- css -->
      	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
      	<link href="<?= base_url('assets/bootstrap/css/style.css') ?>" rel="stylesheet">
        <link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">

</head>
  <body class="contact"><br/><br/><br/><br/><br/><br/>
    <div id="container-contact">

      <div class="form-style-6">
      <h1>Nous contacter</h1>
      <?php echo form_open('contact'); ?>
      <label for="nom">Nom : </label>
      <input type="text" name="nom" value="<?php echo set_value('nom'); ?>" />
      <?php echo form_error('nom','<div class="error">','</div>');?>

      <label for="email">Email : </label>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
      <?php echo form_error('email','<div class="error">','</div>');?>

      <label for="demande">Message : </label>
      <textarea  name="demande"> <?php echo set_value('demande'); ?> </textarea>
      <?php echo form_error('demande','<div class="error">','</div>');?>

      <input type="submit" value="Envoyer" />


      <?php  form_close(); ?>
      </div>
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.8214134993636!2d3.220108350775562!3d43.29706147903276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b10f9c6eddc6fb%3A0x8e87b59e91c077da!2s1+Avenue+de+Rome%2C+34350+Vendres!5e0!3m2!1sfr!2sfr!4v1507808027451" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>

    </div>


  </body>

</html>
