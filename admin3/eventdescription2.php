<?php
include("../admin1/function.php");
if(isset($_POST['btn']))
{
  $eid=$_POST['eid'];
  $desc=$_POST['desc'];
  if(eventDesc($eid,$desc))
  {
    header("location:eventdescription3.php");
  }
  else {
    header("location:error_500.php");
  }
}
?>
