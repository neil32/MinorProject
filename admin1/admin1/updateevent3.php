<?php
if(isset($_POST['btn']))
{
  include("function.php");
  $eid=$_POST['eid'];
  $ename=$_POST['ename'];
  $edate=$_POST['edate'];
  $etime=$_POST['etime'];
  $evenue=$_POST['evenue'];
  if(updateevent($eid,$ename,$edate,$etime,$evenue))
  {
    header("location:updateevent4.php");
  }
  else {
    header("location:noupdate.php");
  }
}
else {
  header("location:error_500.php");
}
 ?>
