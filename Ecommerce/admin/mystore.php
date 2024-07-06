<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home-page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/311da3174c.js" crossorigin="anonymous"></script>

</head>


<?php

session_start();
if (!$_SESSION['admin']) {
  header("location:form/login.php");
}



?>

<body>

  <nav class="navbar bg-dark ">
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white">
        <h1>Digital Dreams</h1>
      </a>
      <span>
        <i class="fa-solid fa-user-tie"></i>
        Hello,<?php echo $_SESSION['admin']; ?>|
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="form/logout.php" class="text-decoration-none text-white">Logout |</a>
        <!-- <a href="" class="text-decoration-none text-white">Userpanel</a> -->
        <div>
      </span>
    </div>
  </nav>
  <div>
    <h2 class="text-center">Dashboard</h2>

  </div>
  <div class="col-md-6 bg-warning text-center m-auto rounded-4">
    <a href="product/index.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Add Post</a>
    <!-- <a href="" class="text-decoration-none text-white fs-4 fw-bold px-5">Users</a> -->

  </div>







  <div class="Container ">
    <div class="row">
      <div class="col-md-8 m-auto">


        <table class="table border border-warning table-hover border my-5 text-center">

          <thead class="bg-dark text-white fs-5 font-monospace">
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <!-- <th>Delete</th>
            <th>Update</th> -->
          </thead>
          <tbody class="text-center">
            <?php
              $con = mysqli_connect('localhost', 'root', '', 'Ecommerce');
              $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

              while ($row = mysqli_fetch_array($Record))

              echo "
              <tr>
                <td>$row[Id]</td>
                <td>$row[Pname]</td>
                <td>$row[Pprice]</td>
               <td><img src='$row[Pimage]' height ='90px' width='200px'> </td>
               <td>$row[PCategory]</td>
                <td></td>
                <td></td>
 
               </tr>
              ";
            ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>

</body>

</html>