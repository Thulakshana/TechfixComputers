<?php
// Database connection
include "libs.php";

/*
  Get exactly 3 images:
  id = 1 → slide 1
  id = 2 → slide 2
  id = 3 → slide 3
*/
$sql = "SELECT id, image_name
        FROM home_images
        WHERE id IN (6,7,8)
        ORDER BY id ASC";

$result = mysqli_query($connect, $sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap Image Slider</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #carouselExampleSlidesOnly img {
            height: 800px;
            object-fit: cover;
        }

        .not-found {
            height: 800px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            color: #dc3545;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

<div id="carouselExampleSlidesOnly"
     class="carousel slide"
     data-bs-ride="carousel"
     data-bs-interval="3000">

    <div class="carousel-inner">

        <?php
        $active = "active";
        $hasValidImage = false;

        if ($result && mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                $imageName = trim($row['image_name']);
                $imagePath = "homeimage/" . $imageName;

                // Check image exists AND not empty
                if (!empty($imageName) && file_exists($imagePath)) {
                    $hasValidImage = true;

                    echo '<div class="carousel-item ' . $active . '">';
                    echo '<img src="' . htmlspecialchars($imagePath) . '" class="d-block w-100" alt="Slide">';
                    echo '</div>';

                    $active = ""; // only first slide active
                }
            }
        }

        // If no valid images found
        if (!$hasValidImage) {
            echo '<div class="carousel-item active">';
            echo '<div class="not-found">Images not found</div>';
            echo '</div>';
        }
        ?>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
