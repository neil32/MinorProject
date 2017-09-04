<?php
function ifExist($eid)
{
  include("conn.php");
  $qr="SELECT eventid FROM eventdetails WHERE eventid=?";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("i", $eid);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($row);
  if(!empty($rs)){
    return true;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return false;
    $preparedstmt->close();
    $conn->close();
  }
}
function countStudent()
{
  include("conn.php");
  $qr="SELECT count(ccode) FROM student_event";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($countstudent);
  if(!empty($rs)){
    $preparedstmt->fetch();
    return $countstudent;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return 0;
    $preparedstmt->close();
    $conn->close();
  }
}
function countFaculty()
{
  include("conn.php");
  $qr="SELECT count(faculty_id) FROM faculty_event";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($countfaculty);
  if(!empty($rs)){
    $preparedstmt->fetch();
    return $countfaculty;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return 0;
    $preparedstmt->close();
    $conn->close();
  }
}
function countParticipate()
{
  include("conn.php");
  $qr="SELECT count(ccode) FROM participate";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($countparticipate);
  if(!empty($rs)){
    $preparedstmt->fetch();
    return $countparticipate;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return 0;
    $preparedstmt->close();
    $conn->close();
  }
}
function countEvent()
{
  include("conn.php");
  $year=$_SESSION['eyear'];
  $qr="SELECT count(eventid) FROM eventdetails WHERE eventyear=?";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("i",$year);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($countevent);
  if(!empty($rs)){
    $preparedstmt->fetch();
    return $countevent;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return 0;
    $preparedstmt->close();
    $conn->close();
  }
}
function addEvent($eid,$ename,$year)
{
  include("conn.php");
  $qr="INSERT INTO eventdetails (eventid, eventname, eventyear) VALUES (?,?,?)";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("iss", $eid, $ename, $year);
  $preparedstmt->execute();
  if($preparedstmt->affected_rows>0){
    return true;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return false;
    $preparedstmt->close();
    $conn->close();
  }
}
function updateEvent($eid,$ename,$edate,$etime,$evenue)
{
  include("conn.php");
  $qr="UPDATE eventdetails SET eventname =?, eventdate = ?, eventtime = ?, eventvenue = ? WHERE eventdetails.eventid = ?";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("ssssi", $ename, $edate, $etime, $evenue, $eid);
  $preparedstmt->execute();
  if($preparedstmt->affected_rows>0){
    return true;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return false;
    $preparedstmt->close();
    $conn->close();
  }
}
function saveImage($ename,$name,$image)
{
  session_start();
  include("conn.php");
  $year=$_SESSION['eyear'];
  $qr1="SELECT eventid FROM eventdetails WHERE eventname=? AND eventyear=?";
  $preparedstmt=$conn->prepare($qr1);
  $preparedstmt->bind_param("ss", $ename, $year);
  $preparedstmt->execute();
  $preparedstmt->store_result();
  $preparedstmt->bind_result($row1);
  $rs=$preparedstmt->fetch();
  if(!empty($rs)){
    $qr2="INSERT INTO eventimages VALUES (?,?,'$image')";
    $preparedstmt=$conn->prepare($qr2);
    $preparedstmt->bind_param("is", $row1, $name);
    $preparedstmt->execute();
    if($preparedstmt->affected_rows>0){
      return true;
      $preparedstmt->close();
      $conn->close();
    }
    else {
      return false;
      $preparedstmt->close();
      $conn->close();
    }
  }
}
function displayImage()
{
  include("conn.php");
  $qr="SELECT event_id,name,image FROM eventimages";
  $result = $conn->query($qr);
  if ($result->num_rows > 0) {
    return $result;
    $conn->close();
  }
  else {
    return 0;
    $conn->close();
  }
}
function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function assignFaculty($fid,$fname)
{
  $pwd=randomPassword();
  $qr="INSERT INTO adminlogin VALUES (?,?,?,'FC')";
  $preparedstmt=$conn->prepare($qr);
  $preparedstmt->bind_param("iss", $fid, $pwd, $fname);
  $preparedstmt->execute();
  if($preparedstmt->affected_rows>0)
  {
    $_SESSION['pwd']=$pwd;
    $_SESSION['fid']=$fid;
    require("fcpass.php");
    return true;
  }
  else {
    return false;
  }
}
function addStudent($ccode,$eventname,$year)
{
  $qr="select `eventid` from `eventdetails` where `eventname`='$eventname' and `eventyear`='$year'";
  $rs=mysql_query($qr);
  $row=mysql_fetch_array($rs);
  $eventid=$row[0];
  $qr2="INSERT into `student_event` values ($ccode,$eventid)";
  $rs2=mysql_query($qr2);
  if($rs2)
  {
    return true;
  }
  else {
    return false;
  }
}
function assignStudent($ccode,$sname)
{
  $pwd=randomPassword();
  $qr="INSERT into `adminlogin` values ($ccode,'$pwd','$sname','SH')";
  $rs=mysql_query($qr);
  if($rs)
  {
    $_SESSION['pwd']=$pwd;
    $_SESSION['ccode']=$ccode;
    require("scpass.php");
    return true;
  }
  else {
    return false;
  }
}
function eventDesc($eid,$desc)
{
  include("conn.php");
  $qr="INSERT INTO eventdescription VALUES(?,?)";
  $preparedstmt=$conn->prepare($qr);
  $preparedstmt->bind_param("is", $eid, $desc);
  $preparedstmt->execute();
  if($preparedstmt->affected_rows>0){
    return true;
    $preparedstmt->close();
    $conn->close();
  }
  else {
    return false;
    $preparedstmt->close();
    $conn->close();
  }
}
function updateEventDesc($eid,$desc)
{
  $qr="UPDATE `eventdescription` SET `description`='$desc' WHERE `eventid`=$eid";
  $rs=mysql_query($qr);
  if($rs)
  {
    return true;
  }
  else {
    return false;
  }
}
 ?>
