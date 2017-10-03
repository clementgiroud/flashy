<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/responsiveslides.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/demo.css')?>">
	<link href="<?= base_url('assets/stylesheets/bootstrap/bootstrap.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/stylesheets/style.css') ?>" rel="stylesheet">
	<!-- <link href="<?= base_url('assets/stylesheets/default.css') ?>" rel="stylesheet"> -->
  <script src="<?= ('http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/javascripts/responsiveslides.min.js')?>"></script>
</head>

<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		// Slideshow 1
		$("#slider1").responsiveSlides({
			maxwidth: 800,
			speed: 800
		});
		// Slideshow 2
		$("#slider2").responsiveSlides({
			auto: false,
			pager: true,
			speed: 300,
			maxwidth: 540
		});
		// Slideshow 3
		$("#slider3").responsiveSlides({
			manualControls: '#slider3-pager',
			maxwidth: 540
		});
		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: false,
			pager: false,
			nav: true,
			speed: 300,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
		$(".rslides").responsiveSlides({
auto: true,             // Boolean: Animate automatically, true or false
speed: 500,            // Integer: Speed of the transition, in milliseconds
timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
pager: false,           // Boolean: Show pager, true or false
nav: false,             // Boolean: Show navigation, true or false
random: false,          // Boolean: Randomize the order of the slides, true or false
pause: false,           // Boolean: Pause on hover, true or false
pauseControls: true,    // Boolean: Pause when hovering controls, true or false
prevText: "Previous",   // String: Text for the "previous" button
nextText: "Next",       // String: Text for the "next" button
maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
manualControls: "",     // Selector: Declare custom pager navigation
namespace: "rslides",   // String: Change the default namespace used
before: function(){},   // Function: Before callback
after: function(){}     // Function: After callback
});
	});
</script>

<body><br/>
  <div id="wrapper"><br/><br/>

    <!-- Slideshow -->
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li>
          <img src="<?= base_url('assets/images/slide1.jpg')?>" alt="img01"/>
        </li>
        <li>
          <img src="<?= base_url('assets/images/slide2.jpg')?>" alt="img02"/></a>
        </li>
        <li>
          <img src="<?= base_url('assets/images/slide3.jpg')?>" alt="img03"/>
        </li>
				<li>
          <img src="<?= base_url('assets/images/slide4.jpg')?>" alt="img04"/>
        </li>
				<li>
          <img src="<?= base_url('assets/images/slide5.jpg')?>" alt="img05"/>
        </li>
      </ul>
    </div>

    <!-- This is here just to demonstrate the callbacks -->
    <ul class="events">
      <li><h3></h3></li>
    </ul>

  </div>



</body>
</html>
