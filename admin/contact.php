<?php

include_once 'lib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="POST" action="backincon.php">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" required>
    <small class="form-text text-muted">
      We'll never share your email with anyone else.
    </small>
  </div>

  <div class="form-group">
    <label>Contact</label>
    <input type="text" name="contact" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






</body>
</html>