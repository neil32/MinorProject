<?php
$conn = mysqli_connect('localhost','root','root','cfmfinal');

if($conn)
 {
     mysqli_select_db($conn,'cfmfinal');
     
 }

else{
           header("location:error_500.php");
}

 ?>
