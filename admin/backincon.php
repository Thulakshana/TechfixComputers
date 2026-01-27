<?php
include_once 'lib.php'; // This file should define $connect
?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email   = mysqli_real_escape_string($connect, $_POST['email']);
    $contact = mysqli_real_escape_string($connect, $_POST['contact']);

    // Always keep ONE row (id = 1)
    $sql = "REPLACE INTO cn (id, email, contact)
    VALUES (1, '$email', '$contact')";

if (mysqli_query($connect, $sql)) {
    echo "<script>
            alert('Data saved successfully!');
          </script>";
} else {
    echo "<script>
            alert('Error: " . mysqli_error($connect) . "');
          </script>";
}
}
?>