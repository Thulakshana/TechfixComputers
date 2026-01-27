<?php
include_once 'lib.php'; // This file should define $connect
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Brand</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
<h1>laptop</h1>
<form method="POST" action="laptop.php">
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" name="brand" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<h1>desktop pc</h1>
<form method="POST" action="desktop.php">
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" name="brand" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<h1>components</h1>
<form method="POST" action="components.php">
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" name="brand" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<h1>Assoceries</h1>
<form method="POST" action="aso.php">
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" name="brand" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<h1>Software</h1>
<form method="POST" action="software.php">
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" name="brand" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h1>used Item</h1>
<form method="POST" action="used.php">
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" name="brand" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
