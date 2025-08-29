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
    


<div class="container">

    <h3 class="heading">Change account</h3>
    <p class="text-center">Update your account information below:</p>

  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4"> <!-- Adjust width here -->
      
      <form class="row g-3" action="includes/userupdate.inc.php" method="post">
        <div class="col-12">
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="col-12">
          <input type="password" name="pwd" class="form-control" placeholder="Password">
        </div>
        <div class="col-12">
          <input type="text" name="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
      
    </div>
  </div>

    <h3 class="heading">Delete account</h3>
    <p class="text-center">Click the button below to delete your account:</p>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4"> <!-- Adjust width here -->
      
        <form class="row g-3" action="includes/userdelete.inc.php" method="post">
        <div class="col-12">
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="col-12">
          <input type="password" name="pwd" class="form-control" placeholder="Password">
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

</body>
</html>