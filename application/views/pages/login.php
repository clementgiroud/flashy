<!DOCTYPE HTML>
<html>

<head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="description" content="165c. uniques">
        <!-- css -->
      	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
      	<link href="<?= base_url('assets/bootstrap/css/style.css') ?>" rel="stylesheet">
</head>

<body><br/><br/><br/><br/><br/><br/><br/>
  <div id="container_login">
    <div class="form-style-6">
    <h1>CONNEXION</h1>

      <?php
      echo form_open('user/login_validation');

      echo validation_errors();

      echo "<p>Email";
      echo form_input('email', $this->input->post('email'));
      echo "</p>";

      echo "<p>Mot de passe";
      echo form_password('password');
      echo "</p>";

      echo "<p>";
      echo form_submit('login_submit', 'Connexion');
      echo "</p>";

      echo form_close();
      ?>
    </div>
  </div>
</body>
