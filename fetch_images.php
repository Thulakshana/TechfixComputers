<?php

include_once 'libs.php';
?>




<?php
// fetch_images.php
// Database connection


// Fetch images
$sql = "SELECT image_name FROM home_images ORDER BY id ASC";
$result = mysqli_query($connect, $sql);

// Return an array of image names
$images = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = $row['image_name'];
    }
}

?>
