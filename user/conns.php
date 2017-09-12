<?php
$conn = mysql_connect("localhost","root","root");

if($conn)
 {
     mysql_select_db("cfmfinal");
 }

else{
           header("location:../admin1/error_500.php");
}

 ?>
