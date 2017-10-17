<!DOCTYPE HTML>
<html>

<head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <meta name="description" content="165c. uniques">
        <!-- css -->
      	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
      	<link href="<?= base_url('assets/bootstrap/css/style.css') ?>" rel="stylesheet">
        <link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">

</head>

<body>

  <?php echo validation_errors(); ?>
  <?php echo form_open('user/forgotPassword'); ?>

  <h3>veuillez saisir votre login(email) : </h3></br>

<label for="login"> Login :</label>
<input type="text" name="login" value="<?php echo $this->input->post('users'); ?>" id="login"/></br>
<button type="submit"> valider</button>
<?php echo form_close(); ?>


</body>
</html>
