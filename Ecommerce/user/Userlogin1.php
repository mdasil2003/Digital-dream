
<?php
 $Name =$_POST['name'];
 $Password =$_POST['password'];

$con = mysqli_connect('localhost','root','','Ecommerce');
$result=mysqli_query($con,"SELECT * FROM `user` WHERE (UserName ='$Name' OR Email= '$Name') AND Password='$Password'");
session_start();
   if(mysqli_num_rows($result)){
    $_SESSION['abc']=$Name;

    echo"
           <script>

             alert('Successfully login');
            window.location.href='index.php';
            </script>
         "; 
   }
   else{
    echo"
           <script>

             alert('Incorrect email or password');
            window.location.href='Userlogin.php';
            </script>
         "; 

   }



?>