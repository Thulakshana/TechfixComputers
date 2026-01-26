<?php

include_once 'libs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
</head>
<body>


<!-- Bootstrap container -->
<div class="container-fluid">
  <div class="row justify-content-center mt-4">

    <!-- Control width using columns -->
    <div class="col-12 col-md-10 col-lg-9 col-xl-8">

      <div class="card mb-4 shadow">
        <div class="row g-0">

          <!-- Map Section -->
          <div class="col-md-8" id="map-container">
            <!-- Map will appear here -->

           
          </div>

          <!-- Content Section -->
          <div class="col-md-4">
            <div class="card-body">

              <!-- Inner Cards -->
              <div class="card mb-3">
                <img src="images/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Computer Repair</h4>
                </div>
              </div>

              <div class="card mb-3">
                <img src="images/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Computer Repair</h4>
                </div>
              </div>

              <div class="card mb-3">
                <img src="images/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Computer Repair</h4>
                </div>
              </div>

            </div>
          </div>
          <!-- End Content Section -->

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Google Maps Script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGxkEKW0s39qfyV19DWZbsZL8SXYpYeQI"></script>
<script>
  function initMap() {
    const mapContainer = document.getElementById("map-container");
    mapContainer.style.height = "100%"; // fill the column
    mapContainer.style.minHeight = "800px"; // at least 400px high

    const options = {
      center: { lat: 6.9271, lng: 79.8612 }, // Colombo
      zoom: 12
    };

    const map = new google.maps.Map(mapContainer, options);

    const marker = new google.maps.Marker({
      position: { lat: 6.9271, lng: 79.8612 },
      map: map,
      title: "Colombo"
    });
  }

  window.onload = initMap;
</script>





</body>
</html>