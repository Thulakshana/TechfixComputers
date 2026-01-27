<?php
include_once 'lib.php'; // This file should define $connect
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ✅ Use $connect as first argument
    $brands = mysqli_real_escape_string($connect, $_POST['brand']);

    // Insert into laptop table
    $sql = "INSERT INTO asso (brand) VALUES ('$brands')";

    if (mysqli_query($connect, $sql)) {
        echo "<script>alert('Data saved successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($connect) . "');</script>";
    }
}
?>