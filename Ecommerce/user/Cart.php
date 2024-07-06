<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <?php
    include 'head.php';
    
    ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5">
            <h1 class="text-warning">My Cart</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9 ">
            <table class="table table-bordered text-center">
                <thead class="bg-danger text-white fs-5">
                    <th>Index no.</th>
                    <th>Product Name</th>
                    <th>Product price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                   

                </thead>
<tbody>
<?php

$total=0;
$ptotal=0;
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        $total =$value['productprice'] * $value['productquantity'];
        $ptotal +=$value['productprice'] * $value['productquantity'];

    echo "
         <tr>
         <td>$key</td>
         <td>$value[productname]</td>
        <td>$value[productprice]</td>
         <td>$value[productquantity]</td>
        <td>$total</td>
                      
        </tr>
        ";
         }

    }
                  
                  
?>
</tbody>
               
</table>
<div class="col-lg-3 text-center">
<h3>Total</h3>
<h1 class="bg-danger text-white"><?php echo number_format($ptotal,2)  ?></h1>
</div>
</div>
</div>
</div>
    
</body>
</html>