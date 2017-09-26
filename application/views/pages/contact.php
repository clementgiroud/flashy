<!DOCTYPE html>
<html lang = "en">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type ="text/css" media="screen" /> -->

  <head>
     <meta charset = "utf-8">
     <title>Contact </title>
  </head>

  <body><br/><br/><br/><br/><br/><br/>
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
    </div>
  </body>

</html>
