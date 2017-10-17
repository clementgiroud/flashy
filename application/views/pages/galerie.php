<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Galerie</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets/stylesheets/style.css')?>">
  <link href="<?= base_url('assets/stylesheets/least.min.css')?>" rel="stylesheet" />
  <link rel="icon" href="<?= base_url('assets/images/flashy.ico')?>" type="image/gif">
</head>







  <body>
      <!-- Least Gallery -->
      <section id="least"><br/>

          <!-- Least Gallery: Fullscreen Preview -->
          <div class="least-preview"></div>

          <!-- Least Gallery: Thumbnails -->
          <ul class="least-gallery">
            <?php foreach ($images as  $img):
              ?>



              <li>

                  <a href="<?= base_url($img->file)?>" title="<?=$img->caption?>" data-subtitle="<?=$img->description?>" data-caption="<strong>Bold text</strong> normal caption text">
                      <img src="<?= base_url($img->file)?>" alt="Alt Image Text" />
                  </a>
              </li>


            <?php endforeach; ?>
          </ul>
      </section>
      <!-- Least Gallery end -->

      <!-- jQuery library -->
      <script src="src/js/libs/jquery/2.0.2/jquery.min.js"></script>
      <!-- least.js library -->
      <script src="src/js/libs/least/least.min.js"></script>

      <script>
          $(document).ready(function(){
              $('.least-gallery').least();
          });
      </script>


      <script>
          /* Google Analytics */
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-16040332-11', 'leastjs.com');
          ga('set', 'anonymizeIp', true);
          ga('send', 'pageview');
      </script>
        <!-- &&& END CODE &&& ONLY FOR PERSONAL USE: PLEASE DON'T EMBED THIS CODE INTO YOUR PAGE-->


  </body>
</html>
