<?php

include_once 'libs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

<?php
// 1️⃣ Connect to database


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2️⃣ Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email   = mysqli_real_escape_string($connect, $_POST['email']);
    $password= mysqli_real_escape_string($connect, $_POST['password']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $telno   = mysqli_real_escape_string($connect, $_POST['telno']);

    // 3️⃣ Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 4️⃣ Insert into database
    $sql = "INSERT INTO users (email, password, address, telno)
            VALUES ('$email', '$hashed_password', '$address', '$telno')";

    if (mysqli_query($connect, $sql)) {
        echo "<script>alert('User registered successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($connect) . "');</script>";
    }
}
?>




<form method="POST">
  <div class="form-group">

    <label>Email address</label>
    <input type="email" name="email" placeholder="Email" required><br>
    <small class="form-text text-muted">
      We'll never share your email with anyone else.
    </small>
  </div>


  <div class="form-group">
    <label>pasword</label>
    <input type="password" name="password" placeholder="Password" required><br>
  </div>

  <div class="form-group">
    <label>address</label>
    <input type="text" name="address" placeholder="Address"><br>
  </div>

  <div class="form-group">
    <label>Mobile number</label>
    <input type="text" name="telno" placeholder="Phone number"><br>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</body>
</html>