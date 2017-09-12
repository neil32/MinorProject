<?php
include("functions.php");
$eid=$_GET['eid'];
session_start();
$username=$_SESSION['username'];
$ccode=getcompcode($username);
$b=checkparticipant($ccode,$eid);
if($b)
{
  header("location:events_detail.php");
}
else
{
$qr="INSERT INTO `participate` VALUES ($ccode,$eid)";
mysql_query($qr);
$n=mysql_affected_rows($GLOBALS['conn']);
if($n>0)
{
  header("location:participate2.php");
}
else {

  header("location:loginhome.php");

}
}
?>
