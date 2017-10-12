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

<body class=signup><br/><br/><br/><br/><br/><br/><br/>
  <div id="container_signup">
    <div class="form-style-6">
    <h1>INSCRIPTION</h1>

    <?php
    echo form_open('user/signup_validation');

    echo validation_errors();

    echo "<p>Nom";
    echo form_input('username');
    echo "</p>";

    echo "<p>Email";
    echo form_input('email', $this->input->post('email'));
    echo "</p>";

    echo "<p>Mot de passe";
    echo form_password('password');
    echo "</p>";

    echo "<p>Confirmer mot de passe";
    echo form_password('cpassword');
    echo "</p>";

    echo "<p>";
    echo form_submit('signup_submit', 'Valider');
    echo "</p>";

    echo form_close();
    ?>
    <a href="<?= site_url('user/login')?>" class="text-center">Déjà inscrit ?</a>
    </div>


  </div>
</body>
