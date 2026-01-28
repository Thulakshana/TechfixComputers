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

         

<!--one desktop-->
<li class="nav-item">
         
         <?php
// fetch laptop brands
$sql = "SELECT brand_id, brand FROM pc";
$result = mysqli_query($connect, $sql);
?>
      <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active"
     href="#"
     id="homeDropdown"
     role="button"
     data-bs-toggle="dropdown"
     aria-expanded="false">
    Desktop PC
  </a>

  <ul class="dropdown-menu" aria-labelledby="homeDropdown">

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li>
              <a class="dropdown-item"
                 href="products.php?brand_id=<?php echo $row['brand_id']; ?>">
                 <?php echo $row['brand']; ?>
              </a>
            </li>
            <?php
        }
    } else {
        ?>
        <li>
          <span class="dropdown-item-text text-muted">No Brands Found</span>
        </li>
        <?php
    }
    ?>

  </ul>
</li>
  </li>


<!--two laptop-->


<li class="nav-item">
        
         <?php

// fetch laptop brands
$sql = "SELECT brand_id, brand FROM laptop";
$result = mysqli_query($connect, $sql);
?>
         
         <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active"
     href="#"
     id="homeDropdown"
     role="button"
     data-bs-toggle="dropdown"
     aria-expanded="false">
    Laptop
  </a>

  <ul class="dropdown-menu" aria-labelledby="homeDropdown">

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li>
              <a class="dropdown-item"
                 href="products.php?brand_id=<?php echo $row['brand_id']; ?>">
                 <?php echo $row['brand']; ?>
              </a>
            </li>
            <?php
        }
    } else {
        ?>
        <li>
          <span class="dropdown-item-text text-muted">No Brands Found</span>
        </li>
        <?php
    }
    ?>

  </ul>
</li>
 </li>

 <!--third asso-->
 <li class="nav-item">
       
         <?php

// fetch laptop brands
$sql = "SELECT brand_id, brand FROM asso";
$result = mysqli_query($connect, $sql);
?>
           <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active"
     href="#"
     id="homeDropdown"
     role="button"
     data-bs-toggle="dropdown"
     aria-expanded="false">
    assocceries
  </a>

  <ul class="dropdown-menu" aria-labelledby="homeDropdown">

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li>
              <a class="dropdown-item"
                 href="products.php?brand_id=<?php echo $row['brand_id']; ?>">
                 <?php echo $row['brand']; ?>
              </a>
            </li>
            <?php
        }
    } else {
        ?>
        <li>
          <span class="dropdown-item-text text-muted">No Brands Found</span>
        </li>
        <?php
    }
    ?>

  </ul>
</li>
 </li>


 <!--fourth software-->
 <li class="nav-item">
        
         
         <?php

// fetch laptop brands
$sql = "SELECT brand_id, brand FROM software";
$result = mysqli_query($connect, $sql);
?>
           <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active"
     href="#"
     id="homeDropdown"
     role="button"
     data-bs-toggle="dropdown"
     aria-expanded="false">
    Software
  </a>

  <ul class="dropdown-menu" aria-labelledby="homeDropdown">

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li>
              <a class="dropdown-item"
                 href="products.php?brand_id=<?php echo $row['brand_id']; ?>">
                 <?php echo $row['brand']; ?>
              </a>
            </li>
            <?php
        }
    } else {
        ?>
        <li>
          <span class="dropdown-item-text text-muted">No Brands Found</span>
        </li>
        <?php
    }
    ?>

  </ul>
</li>
 </li>

<!--fifth used item-->
<li class="nav-item">
         
         
         <?php

// fetch laptop brands
$sql = "SELECT brand_id, brand FROM used";
$result = mysqli_query($connect, $sql);
?>
           <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active"
     href="#"
     id="homeDropdown"
     role="button"
     data-bs-toggle="dropdown"
     aria-expanded="false">
    used items
  </a>

  <ul class="dropdown-menu" aria-labelledby="homeDropdown">

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li>
              <a class="dropdown-item"
                 href="products.php?brand_id=<?php echo $row['brand_id']; ?>">
                 <?php echo $row['brand']; ?>
              </a>
            </li>
            <?php
        }
    } else {
        ?>
        <li>
          <span class="dropdown-item-text text-muted">No Brands Found</span>
        </li>
        <?php
    }
    ?>

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