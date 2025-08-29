<?php

require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3 class="heading">Sign Up</h3>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4"> <!-- Adjust width here -->
      
      <form class="row g-3" action="includes/formhandler.inc.php" method="post">
        <div class="col-12">
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="col-12">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="col-12">
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

</body>
</html>