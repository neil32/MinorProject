<?php
include("functions.php");
if(isset($_POST['btn']))
{
  $scode=$_POST['scode'];
  $semail=$_POST['semail'];
  $spassword=$_POST['spassword'];
  if(registerUser($scode,$semail,$spassword))
  {
    header("location:registered.php");
  }
  else {
    header("location:error_registration.php");
  }
}
 ?>
