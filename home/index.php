<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <style>
     
    </style>

   
  </head>
  <body>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   

    <div class="spinner" style="width: 100%;height: 100vh;background-color: black;">
      <img src="../data/logo.png" class="load-img" style="width: 20%;height: 10%;position: absolute;top: 40%;left: 40%;">
    </div>
    <!-- Just an image -->
    <div class="main" style="display: none;">

 
      <?php
        include "../nav/nav.php";
      ?>


      <div class="video-container col-lg-12 col-sm-12 col-md-12 col-12">
        <video playsinline="playsinline" autoplay="autoplay" loop="loop">
          <source src="../data/video.mp4" type="video/mp4">
        </video>
      </div>
       <blockquote style="position: absolute;top: 10%;" class="col-lg-5 col-md-5 col-sm-10 col-10">
        <p class="quotation"> 
        Look and think before opening the shutter. The heart and mind are the true lens of the camera</p>
      </blockquote> 

</div>
<script>
$(document).ready(function() {
//Preloader
$(window).on("load", function() {
function hidePreloader() {
$(".spinner").delay(2000).fadeOut();
$(".main").delay(2200).fadeIn();
}
hidePreloader();
});
});
</script>

  </body>
</html>