<?php
if((isset($_POST['btn1']) && $_POST['eid']=="null") || (isset($_POST['btn2']) && $_POST['ename']=="null"))
{
  header("location:deleteevent.php");
}
else
{
session_start();
$year=$_SESSION['eyear'];
include("conn.php");
if(isset($_REQUEST['id']))
{
  $eid=$_REQUEST['id'];
  $qr1="DELETE FROM eventimages WHERE event_id=?";
  $preparedstmt = $conn->prepare($qr1);
  $preparedstmt->bind_param("i", $eid);
  $preparedstmt->execute();
  $qr2="DELETE FROM faculty_event WHERE event_id=?";
  $preparedstmt = $conn->prepare($qr2);
  $preparedstmt->bind_param("i", $eid);
  $preparedstmt->execute();
  $qr3="DELETE FROM student_event WHERE eventid=?";
  $preparedstmt = $conn->prepare($qr3);
  $preparedstmt->bind_param("i", $eid);
  $preparedstmt->execute();
  $qr4="DELETE FROM eventdetails WHERE eventid=? AND eventyear=?";
  $preparedstmt = $conn->prepare($qr4);
  $preparedstmt->bind_param("is", $eid, $year);
  $preparedstmt->execute();
  if($preparedstmt->affected_rows>0){
    $preparedstmt->close();
    $conn->close();
    header("location: viewallevents.php");
  }
  else {
    $preparedstmt->close();
    $conn->close();
    header("location:error_500.php");
  }
}
else if(isset($_POST['btn1']))
{
$eid=$_POST['eid'];
$qr1="DELETE FROM eventimages WHERE event_id=?";
$preparedstmt = $conn->prepare($qr1);
$preparedstmt->bind_param("i", $eid);
$preparedstmt->execute();
$qr2="DELETE FROM faculty_event WHERE event_id=?";
$preparedstmt = $conn->prepare($qr2);
$preparedstmt->bind_param("i", $eid);
$preparedstmt->execute();
$qr3="DELETE FROM student_event WHERE eventid=?";
$preparedstmt = $conn->prepare($qr3);
$preparedstmt->bind_param("i", $eid);
$preparedstmt->execute();
$qr4="DELETE FROM eventdetails WHERE eventdetails.eventid=? and eventyear=?";
$preparedstmt = $conn->prepare($qr4);
$preparedstmt->bind_param("is", $eid, $year);
$preparedstmt->execute();
if($preparedstmt->affected_rows>0){
  $preparedstmt->close();
  $conn->close();
  header("location: deleteevent3.php");
}
else {
  $preparedstmt->close();
  $conn->close();
  header("location:error_500.php");
}
}
else if(isset($_POST['btn2']))
{
  $ename=$_POST['ename'];
  $qr1="DELETE FROM eventimages WHERE name=?";
  $preparedstmt = $conn->prepare($qr1);
  $preparedstmt->bind_param("s", $ename);
  $preparedstmt->execute();
  $qr2="DELETE FROM faculty_event WHERE event_id=?";
  $preparedstmt = $conn->prepare($qr2);
  $preparedstmt->bind_param("i", $eid);
  $preparedstmt->execute();
  $qr3="DELETE FROM student_event WHERE eventid=?";
  $preparedstmt = $conn->prepare($qr3);
  $preparedstmt->bind_param("i", $eid);
  $preparedstmt->execute();
  $qr4="DELETE FROM eventdetails WHERE eventname = ? and eventyear=?";
  $preparedstmt = $conn->prepare($qr4);
  $preparedstmt->bind_param("ss", $ename, $year);
  $preparedstmt->execute();
  if($preparedstmt->affected_rows>0){
    $preparedstmt->close();
    $conn->close();
    header("location: deleteevent3.php");
  }
  else {
    $preparedstmt->close();
    $conn->close();
    header("location:error_500.php");
  }
}
}
?>
