<?php
session_start();
if($_SESSION['status']!="Active")
{
  header("location: adminlogin1.php");
}
$adminid=$_SESSION['adminid'];
$adminname=$_SESSION['adminname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap core CSS -->
  <link href="../files/css/bootstrap.min.css" rel="stylesheet">
  <link href="../files/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../files/css/animate.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="../files/css/custom.css" rel="stylesheet">
  <link rel="../files/stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="../files/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="../files/css/floatexamples.css" rel="stylesheet" type="text/css" />
  <script src="../files/js/jquery.min.js"></script>
  <script src="../files/js/nprogress.js"></script>
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav class="" role="navigation">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="../files/images/profile/techie1.jpg" alt=""><?php if(!empty($adminname)){echo $adminname;} ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
            <li><a href="profile1.php">  Profile</a>
            </li>
            <li><a href="setting1.php">  Setting</a>
            </li>
            <li>
              <a href="help1.php">Help</a>
            </li>
            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
