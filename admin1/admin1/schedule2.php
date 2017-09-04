<?php
if(!empty($_POST['date']) && isset($_POST['btn']))
{
  session_start();
  $year=$_SESSION['eyear'];
  $flag=0;
  include("conn.php");
  include("function.php");
  $edate=$_POST['date'];
 if(isset($_POST['chk1']))
  {
    if(!empty($_POST['ename1']))
    {
      $ename=$_POST['ename1'];
      $etime=$_POST['etime1'];
      $evenue=$_POST['evenue1'];
      $qr="SELECT eventid FROM eventdetails WHERE eventname=? AND eventyear=?";
      $preparedstmt = $conn->prepare($qr);
      $preparedstmt->bind_param("ss", $ename, $year);
      $preparedstmt->execute();
      $preparedstmt->store_result();
      $rs=$preparedstmt->bind_result($row1);
      if(!empty($rs))
      {
        $preparedstmt->fetch();
        if(updateevent($row1,$ename,$edate,$etime,$evenue))
        {
          $flag++;
        }
      }
    }
  }
  if(isset($_POST['chk2']))
    {
      if(!empty($_POST['ename2']))
      {
        $ename=$_POST['ename2'];
        $etime=$_POST['etime2'];
        $evenue=$_POST['evenue2'];
        $qr="SELECT eventid FROM eventdetails WHERE eventname=? AND eventyear=?";
        $preparedstmt = $conn->prepare($qr);
        $preparedstmt->bind_param("ss", $ename, $year);
        $preparedstmt->store_result();
        $preparedstmt->execute();
        $rs=$preparedstmt->bind_result($row2);
        if(!empty($rs))
        {
          $preparedstmt->fetch();
          if(updateevent($row2,$ename,$edate,$etime,$evenue))
          {
            $flag++;
          }
        }
      }
    }
    if(isset($_POST['chk3']))
      {
        if(!empty($_POST['ename3']))
        {
          $ename=$_POST['ename3'];
          $etime=$_POST['etime3'];
          $evenue=$_POST['evenue3'];
          $qr="SELECT eventid FROM eventdetails WHERE eventname=? AND eventyear=?";
          $preparedstmt2 = $conn->prepare($qr);
          echo $preparedstmt2;
        }

}
}

 ?>
