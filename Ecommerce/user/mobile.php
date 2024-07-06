<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/311da3174c.js" crossorigin="anonymous"></script>

  <!-- including the head file of the webpage -->
  <?php

  include ("head.php");

  ?>


</head>

<body>
  <div class="container-float">
    <div class="col-md-12">


      <div class="row">

     
  <h1 class="text-danger font-monospace my-3 text-center fw-bold">Mobile</h1>

  <?php
  include ("../admin/product/Config.php");
  $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
  while ($row = mysqli_fetch_array($Record)) {
     $check_page = $row['Pname'];
     if($check_page ==='mobile'){

    echo "


<div class='col-md-6 col-lg-4 m-auto mb-3'>

<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top m-auto' style ='width:170px; height: 300px;'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pname]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>RS:$row[Pprice]</p>
      <input type='number' value = 'min= '1' max ='25' placeholder ='Quantity' ><br><br>
        <input type='submit' class='btn btn-warning text-white w-100' value ='Add to Cart'>
  </div>
</div>
</div>
";
    }
   }
  ?>
   </div>
    </div>
  </div>
</body>

</html>