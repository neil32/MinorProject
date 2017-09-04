<?php
if(isset($_POST['btn']))
{
  session_start();
  $dept=$_SESSION['dept'];
  include("conn.php");
  include("../admin1/function.php");
  $flag=0;
  if(isset($_POST['chk1']))
  {
    $name1=$_POST['name1'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name1' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk2']))
  {
    $name2=$_POST['name2'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name2' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk3']))
  {
    $name3=$_POST['name3'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name3' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk4']))
  {
    $name4=$_POST['name4'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name4' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk5']))
  {
    $name5=$_POST['name5'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name5' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk6']))
  {
    $name6=$_POST['name6'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name6' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk7']))
  {
    $name7=$_POST['name7'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name7' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk8']))
  {
    $name8=$_POST['name8'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name8' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk9']))
  {
    $name9=$_POST['name9'];
    $$qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name9' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk10']))
  {
    $name10=$_POST['name10'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name10' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk11']))
  {
    $name11=$_POST['name11'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name11' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk12']))
  {
    $name12=$_POST['name12'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name12' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk13']))
  {
    $name13=$_POST['name13'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name13' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk14']))
  {
    $name14=$_POST['name14'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name14' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if(isset($_POST['chk15']))
  {
    $name15=$_POST['name15'];
    $qr1="SELECT facultyid FROM facultydata WHERE facultyname='$name15' and `facultydept`='$dept'";
    $rs1=$conn->query($qr1);
    if($rs1->num_rows > 0)
    {
      $row1 = $rs1->fetch_assoc();
      $qr2="INSERT INTO faculty_dept VALUES(".$row1['facultyid'].",'$dept')";
      if($conn->query($qr2) === TRUE){
        $flag++;
      }
    }
  }
  if($flag>0){
    header("location:addfc3.php");
  }
  else {
    header("location:addfc.php");
  }
}
else {
  header("location:addfc.php");
}

 ?>
