<?php
include("conns.php");

function checkUser($scode)
{
  $qr="select `studentccode` from `studentdata` where `studentccode`=$scode";
  $rs=mysql_query($qr);
  $n=mysql_num_rows($rs);
  if($n>0)
  {
    return true;
  }
  else {
    return false;
  }
}

function registerUser($scode,$semail,$spassword)
{
  $okuser=checkUser($scode);
  if($okuser)
  {
    $qr="INSERT INTO `registered` values ($scode,'$spassword','$semail')";
    mysql_query($qr);
    $n=mysql_affected_rows($GLOBALS['conn']);
    if($n>0)
    {
      return true;
    }
    else {

      echo mysql_error();
        return false;
    }
  }
  else {
    header("location:error_userexist.php");
  }
}

function checklogin($ccode,$password)
{
  $qr="select `comp_code` from `registered` where `comp_code`=$ccode and `password`='$password'";
  $rs=mysql_query($qr);
  $n=mysql_num_rows($rs);
  if($n>0)
  {
    return true;
  }
  else {
    return false;
  }
}
function getusername($ccode)
{
  $qr="select `studentname` from `studentdata` where `studentccode`=$ccode";
  $rs=mysql_query($qr);
  if($rs)
  {
    $row=mysql_fetch_array($rs);
    return $row[0];
  }
  else {
    return 'user';
  }
}
function getcompcode($username)
{
  $qr="select `studentccode` from `studentdata` where `studentname`='$username'";
  $rs=mysql_query($qr);
  if($rs)
  {
    $row=mysql_fetch_array($rs);
    return $row[0];
  }
  else {
    return 'user';
  }
}
function checkparticipant($ccode,$eid)
{
  $qr="SELECT `eventid` FROM `participate` where `ccode`=$ccode and `eventid`=$eid";
  $rs=mysql_query($qr);
  $n=mysql_num_rows($rs);
  if($n>0)
  {
    return true;
  }
  else
  {
    return false;
  }

}
?>
