<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/blue.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <h1>ADMIN INSCRIPTION</h1>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">S'inscrire en tant qu'administrateur</p>

    <!-- <form action="<?= site_url('auth/register_validation')?>" method="post">

      <div class="form-group has-feedback">
        <input for="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input for="password" type="password" class="form-control" placeholder="Mot de passe">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input for="cpassword" type="password" class="form-control" placeholder="Confirmer le mot de passe">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label> -->
              <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
            <!-- </label>
          </div>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">S'inscrire</button>
        </div> -->
        <!-- /.col -->
      </div>
    <!-- </form>  -->

    <div class="form-group has-feedback">
    <?php
    echo form_open('auth/register_validation');

    echo validation_errors();

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
    echo form_submit('signup_submit', "S'inscrire");
    echo "</p>";

    echo form_close();
    ?>
    </div>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="<?= site_url('auth/login')?>" class="text-center">Je suis déjà inscrit</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
