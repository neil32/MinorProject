<?php
include("functions.php");
if(isset($_POST['btn']))
{
  $ccode=$_POST['ccode'];
  $password=$_POST['password'];

  if(checklogin($ccode,$password))
  {
    $username=getusername($ccode);
    session_start();
    $_SESSION['ccode']=$ccode;
    $_SESSION['username']=$username;
    $_SESSION['status']="Active";
    header("location:loginhome.php");
  }
  else {
    header("location:Login.html");
  }
}
?>
