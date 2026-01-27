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


<nav class="navbar bg-body-tertiary">
  <div class="container-fluid d-flex justify-content-between align-items-center">

  <?php


$email = "Not set";
$contact = "Not set";

$sql = "SELECT email, contact FROM cn WHERE id = 1";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $contact = $row['contact'];
}
?>
    <!-- Left text -->
    <span class="navbar-text">
    E-mail :- <?php echo htmlspecialchars($email); ?>
    | Mobile :- <?php echo htmlspecialchars($contact); ?>
</span>





    <!-- Right buttons -->
    <div>
      <a href="login.html" class="btn btn-outline-primary btn-sm me-2">
        Login
      </a>
      <a href="register.php" class="btn btn-primary btn-sm">
        Register
      </a>
    </div>

  </div>
</nav>






<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TechFix</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>

        </li>
        <li class="nav-item">

         <!--dropdown-->

         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Gaming Laptop
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>

<!--second-->
<li class="nav-item">
         <!--dropdown-->
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Laptop
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>


<!--third-->


<li class="nav-item">
         <!--dropdown-->
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Desktop PC
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>

<!--fourth-->
<li class="nav-item">
         <!--dropdown-->
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Components
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>
 </li>

 <!--fifth-->
 <li class="nav-item">
         <!--dropdown-->
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Accesorries
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>
 </li>


 <!--sixth-->
 <li class="nav-item">
         <!--dropdown-->
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Software
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>
 </li>

<!--seven-->
<li class="nav-item">
         <!--dropdown-->
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Used item
  </a>
  <ul class="dropdown-menu" aria-labelledby="homeDropdown">
    <li><a class="dropdown-item" href="#">Subpage 1</a></li>
    <li><a class="dropdown-item" href="#">Subpage 2</a></li>
    <li><a class="dropdown-item" href="#">Subpage 3</a></li>
  </ul>
</li>
 </li>

       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>



    
  </div>
</nav>



</body>
</html>