<?php
session_start();
$ename=$_SESSION['ename'];
$year=$_SESSION['eyear'];
include("function.php");
include("conn.php");
if(isset($_POST['btn']))
{
  if(isset($_POST['chk1']))
  {
    $qr="SELECT eventid FROM eventdetails WHERE eventname=? AND eventyear=?";
    $preparedstmt=$conn->prepare($qr);
    $preparedstmt->bind_param("ss", $ename, $year);
    $preparedstmt->execute();
    $preparedstmt->store_result();
    $rs=$preparedstmt->bind_result($row1);
    if(!empty($rs))
    {
      $preparedstmt->fetch();
    }
    if($_POST['fname1']!="null")
    {
      $fname1=$_POST['fname1'];
      $qr2="SELECT facultyid FROM facultydata WHERE facultyname=?";
      $preparedstmt=$conn->prepare($qr2);
      $preparedstmt->bind_param("s", $fname1);
      $preparedstmt->execute();
      $preparedstmt->bind_result($row2);
      $preparedstmt->fetch();
      $qr3="INSERT INTO faculty_event values(?,?)";
      $preparedstmt=$conn->prepare($qr3);
      $preparedstmt->bind_param("ii", $row2, $row1);
      $preparedstmt->execute();
      if(assignFaculty($row2,$fname1)){
        $flag++;
      }
    }
    if($_POST['fname2']!="null")
    {
      $fname2=$_POST['fname2'];
      $qr2="SELECT facultyid FROM facultydata WHERE facultyname=?";
      $preparedstmt=$conn->prepare($qr2);
      $preparedstmt->bind_param("s", $fname2);
      $preparedstmt->execute();
      $preparedstmt->bind_result($row2);
      $preparedstmt->fetch();
      $qr3="INSERT INTO faculty_event values(?,?)";
      $preparedstmt=$conn->prepare($qr3);
      $preparedstmt->bind_param("ii", $row2, $row1);
      $preparedstmt->execute();
      if(assignFaculty($row2,$fname2)){
        $flag++;
      }
    }
    if($_POST['fname3']!="null")
    {
      $fname3=$_POST['fname3'];
      $qr2="SELECT facultyid FROM facultydata WHERE facultyname=?";
      $preparedstmt=$conn->prepare($qr2);
      $preparedstmt->bind_param("s", $fname3);
      $preparedstmt->execute();
      $preparedstmt->bind_result($row2);
      $preparedstmt->fetch();
      $qr3="INSERT INTO faculty_event values(?,?)";
      $preparedstmt=$conn->prepare($qr3);
      $preparedstmt->bind_param("ii", $row2, $row1);
      $preparedstmt->execute();
      if(assignFaculty($row2,$fname3)){
        $flag++;
      }
    }
    if($_POST['fname4']!="null")
    {
      $fname4=$_POST['fname4'];
      $qr2="SELECT facultyid FROM facultydata WHERE facultyname=?";
      $preparedstmt=$conn->prepare($qr2);
      $preparedstmt->bind_param("s", $fname4);
      $preparedstmt->execute();
      $preparedstmt->bind_result($row2);
      $preparedstmt->fetch();
      $qr3="INSERT INTO faculty_event values(?,?)";
      $preparedstmt=$conn->prepare($qr3);
      $preparedstmt->bind_param("ii", $row2, $row1);
      $preparedstmt->execute();
      if(assignFaculty($row2,$fname4)){
        $flag++;
      }
    }
    if($flag>0){
     header("location:donefc.php");
    }
    else {
      header("location:error_500.php");
    }
  }
  else {
    header("location:assignfc2.php");
  }
}
else {
  header("location:error_500.php");
}
?>
