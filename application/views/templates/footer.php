<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Footer</title>

	<link rel="stylesheet" href="<?= base_url('assets/stylesheets/demo.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/stylesheets/footer-distributed-with-address-and-phones.css')?>">

	<link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome.min.css')?>">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

	<body>



		<footer class="footer-distributed">

			<div class="footer-left">

				<img class="logo" src="<?= base_url('assets/images/logo.png') ?>" alt="logo" width="380" height="88">

				<p class="footer-links">
					<a href="<?= site_url('main'); ?>">Accueil</a>
					·
					<a href="<?= site_url("tarifs/viewcarte") ?>">Tarifs</a>
					·
					<a href="<?= site_url("main/services") ?>">Nos plus</a>
					·
					<a href="<?= site_url("contact") ?>">Contact</a>
				</p>

				<p class="footer-company-name">Flashy Car Wash &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>ZAE VIA EUROPA EST</span> 1 Avenue de Rome</p>
          <p>Bâtiment les cassis local 3</p>
          <p>34350 VENDRES</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>standart : 09.70.21.06.94</p>
          <p>David : 0625771199</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">mydavidferrer34@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>A propos de Flashy car wash</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/flashycarwash/"<i class="fa fa-facebook fa-lg"></i></a>
					<!-- <a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a> -->

				</div>

			</div>

		</footer>

	</body>

</html>
