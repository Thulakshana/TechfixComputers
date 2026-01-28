
<?php

include_once 'lib.php';
?>

<?php


if (isset($_POST['upload'])) {

    $file_name = $_FILES['image']['name'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];

    $upload_dir = "homeimage/";

    // Get file extension
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed  = array("jpg", "jpeg", "png", "gif");

    if (!in_array($file_ext, $allowed)) {
        echo "Only JPG, JPEG, PNG & GIF files allowed";
        exit();
    }

    if ($file_size > 2 * 1024 * 1024) {
        echo "File size must be less than 2MB";
        exit();
    }

    // Rename image to avoid duplicates
    $new_name = time() . "_" . $file_name;

    if (move_uploaded_file($file_tmp, $upload_dir . $new_name)) {

        $sql = "INSERT INTO home_images (image_name)
                VALUES ('$new_name')";

        if (mysqli_query($connect, $sql)) {
            echo "Image uploaded successfully ✅";
        } else {
            echo "Database error ❌";
        }

    } else {
        echo "Image upload failed ❌";
    }
}
?>