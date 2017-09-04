<?php
session_start();
$year=$_SESSION['eyear'];
include("function.php");
if(isset($_POST['btn'])){
  $eid=(int)$_POST['eid'];
  $ename=$_POST['ename'];
  if(ifExist($eid)){
    echo "exist";
  }
  else {
    if(addEvent($eid,$ename,$year)){
      header("location:addevent3.php");
    }
  }
}
else {
    header("location:error_500.php");
}
?>
