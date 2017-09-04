<?php
if(isset($_POST['btn']))
{
  session_start();
  include("../admin1/function.php");
  include("conn.php");
  $year=$_SESSION['eyear'];
  $ename=$_POST['ename'];
  $desc=$_POST['desc'];
  $qr="SELECT eventid FROM eventdetails WHERE eventname='$ename' AND eventyear='$year'";
  $rs=$conn->query($qr);
  if($rs->num_rows>0)
  {
    $row=$rs->fetch_assoc();
    $b=updateEventDesc($row["eventid"],$desc);
    if($b)
    {
      header("location:updateeventdescriptionsc4.php");
    }
  }
  else {
    header("location:error_500_sc.php");
  }
}
?>
