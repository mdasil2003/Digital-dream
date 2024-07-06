
<?php

session_start();
//session_destroy();
if(isset($_SESSION["abc"])){



if(isset($_POST['addCart'])){
    $product_name =$_POST['Pname'];
    $product_price =$_POST['Pprice'];
    $product_quantity =$_POST['Pquantity'];
    $_SESSION['cart'][]= array('productname'=>$product_name,
                            'productprice' =>$product_price,
                            'productquantity'=>$product_quantity);
                           header('location:Cart.php');

}
}
else{
    header('location:Userlogin.php');
}


?>