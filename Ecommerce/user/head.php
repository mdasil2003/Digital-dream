<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/311da3174c.js" crossorigin="anonymous"></script>

</head>

<body>
  <?php
  session_start();
  $count = 0;
  if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);

  }



  ?>
  <nav class="navbar bg-dark ">
    <div class="container-fluid text-white ">
      <a class="navbar-brand text-white">
        <h1>Digital Dreams</h1>
      </a>

      <div class="d-flex">
        <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
        <a href="Cart.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>Cart
          (<?php echo $count ?>) |</a>
        <span class="text-warning pe-2">
          <i class="fas fa-user-shield"></i>Hello, 
          <?php 
          if(isset($_SESSION['abc'])) {
          echo  $_SESSION['abc'];
          echo "
          <a href='userlogout.php' class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>LogOut |</a>

            ";
          }
          else{
            echo "
          <a href='Userlogin.php' class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>LogIn |</a>

            ";

          }
          ?>
          <a href="../Admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>




        </span>
      </div>
  </nav>

  <div class="bg-warning sticky-top">
    <ul class="list-unstyled d-flex justify-content-center">
      <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5 ">Laptop</a></li>
      <li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5 ">Mobile</a></li>
      <li><a href="watch.php" class="text-decoration-none text-white fw-bold fs-4 px-5 ">Smart Watch</a></li>

    </ul>


  </div>


</body>

</html>