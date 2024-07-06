
<?php

$con = mysqli_connect('localhost','root','','Ecommerce');

if(isset($_POST['submit'])){
    $Name =$_POST['name'];
    $Email =$_POST['email'];
    $Number =$_POST['number'];
    $Password =$_POST['password'];
    // mysqli_query($con,"INSERT INTO `user`( `UserName`, `Email`, `Number`, `Password`) VALUES ('$Name','$Email','$Number','$Password')");


    $Dup_email = mysqli_query($con,"SELECT * FROM `user` WHERE Email= '$Email'");
    $Dup_username = mysqli_query($con,"SELECT * FROM `user` WHERE UserName= '$Name'");
    if(mysqli_num_rows($Dup_email)){
        echo"
           <script>

             alert('this email is already taken');
            window.location.href='register.php';
            </script>
         ";     
    }
    if(mysqli_num_rows($Dup_username)){
     echo"
        <script>
            alert('this username is already taken');
            window.location.href='register.php';
        </script>   
        ";  
    }
    else{
        mysqli_query($con,"INSERT INTO `user`( `UserName`, `Email`, `Number`, `Password`) VALUES ('$Name','$Email','$Number','$Password')");
        echo"
        <script>
            alert('Registerd Successfully');
            window.location.href='Userlogin.php';
        </script>   
        "; 

    }


}








?>