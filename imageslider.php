<?php

include_once 'libs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


#carouselExampleSlidesOnly img {
  height: 700px;   /* Fixed height */
  object-fit: cover; /* Crop image to fill container without stretching */
}



        </style>
</head>
<body>

<div id="carouselExampleSlidesOnly"
     class="carousel slide"
     data-bs-ride="carousel"
     data-bs-interval="1000">

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/between.png" class="d-block w-100" alt="Slide 1">
    </div>

    <div class="carousel-item">
      <img src="images/1.png" class="d-block w-100" alt="Slide 2">
    </div>

    <div class="carousel-item">
      <img src="images/between.png" class="d-block w-100" alt="Slide 3">
    </div>

  </div>
</div>



</body>
</html>