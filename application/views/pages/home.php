<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/slider.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/style.css')?>">

  <link rel="icon" href="<?= base_url('assets/images/favicon/flashy.ico')?>" type="image/gif">
</head>



<body><br/>


  <style>
.mySlides {display:none;}
</style>
<section id="slideshow">
  <div class="container">
   <div class="w3-content w3-section" style="">
     <?php foreach ($images as  $img):?>
   <img class="mySlides" src="<?= base_url($img->file)?>" style="width:100%">
    <?php endforeach; ?>
 </div>
</section>

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




</body>
</html>
