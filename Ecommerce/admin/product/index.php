<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</head>

<body>
  <div class="container ">
    <div class="row">
      <div class="col-md-6 m-auto border-primary mt-3">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-danger">Product Detail:</p>
          </div>

          <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name:">
          </div>

          <div class="mb-3">
            <label class="form-label">Product Price:</label>
            <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price:">
          </div>

          <div class="mb-3">
            <label class="form-label">Product Image:</label>
            <input type="file" name="Pimage" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Select Page Category:</label>
            <select class="form-select" name="Pages">
              <option value="Home">Home</option>
              <option value="laptop">Laptop</option>
              <option value="mobile">Mobile</option>
              <option value="smartwatch">Smart Watch</option>
            </select>
          </div>
          <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>




        </form>
      </div>

    </div>
  </div>
  <!-- data fetch -->
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
            include 'Config.php';
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