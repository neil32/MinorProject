<?php
  session_start();
  include("conn.php");
  $adminid = $_POST['userid'];
  $password = $_POST['password'];
  $logintype = $_POST['type'];
  $qr="SELECT admin_id,admin_name,login_type FROM adminlogin WHERE admin_id=? AND (password=? AND login_type=?)";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("iss", $adminid, $password, $logintype);
  $preparedstmt->execute();
  $preparedstmt->store_result();
  $preparedstmt->bind_result($id,$name,$type);
  if($preparedstmt->fetch()){
    $_SESSION['status']="Active";
    $_SESSION['adminid']=$id;
    $_SESSION['adminname']=$name;
    //cookies
    if(isset($_POST['chk'])){
      $cookie_name = "userid";
      $cookie_value1 = $adminid;
      setcookie($cookie_name, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
      $cookie_name = "password";
      $cookie_value2 = $password;
      setcookie($cookie_name, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    switch($type) {
      case 'EH':
        $preparedstmt->close();
        $conn->close();
        include("popup.html");
      break;
      case 'DH':
        $qr2="SELECT hod_dept FROM departments WHERE hod_id=? AND hod_name=?";
        $preparedstmt2 = $conn->prepare($qr2);
        $preparedstmt2->bind_param("is", $adminid, $name);
        $preparedstmt2->execute();
        $preparedstmt2->bind_result($dept);
        if($preparedstmt2->fetch()){
          $_SESSION['dept']=$dept;
          $preparedstmt->close();
          $preparedstmt2->close();
          $conn->close();
          include("../admin2/popup2.html");
        }
        else
        {
          $preparedstmt->close();
          $preparedstmt2->close();
          $conn->close();
          header("location:index.php");
        }
      break;
      case 'FC':
        $preparedstmt->close();
        $conn->close();
        include("../admin3/popup3.html");
      break;
      case 'SH':
        $preparedstmt->close();
        $conn->close();
        include("../admin4/popup4.php");
      break;
    }
  }
  else {
    $preparedstmt->close();
    $conn->close();
    header("location:index.php");
  }
?>
