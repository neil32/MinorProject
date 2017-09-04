<?php
include("conn.php");
if((isset($_GET['id'])) && (isset($_GET['eid'])))
{
  $ccode=$_GET['id'];
  $eid=$_GET['eid'];
  $qr="DELETE FROM student_event WHERE ccode=? AND eventid=?";
  $preparedstmt=$conn->prepare($qr);
  $preparedstmt->bind_param("ii", $ccode, $eid);
  $preparedstmt->execute();
  if($preparedstmt->num_rows>0)
  {
    $preparedstmt->close();
    $conn->close();
    header("location:viewallsc1.php.php");
  }
  else {
    $preparedstmt->close();
    $conn->close();
    header("location:error_500fc.php");
  }
}
?>
