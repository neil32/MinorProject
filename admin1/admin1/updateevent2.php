<?php
if((isset($_POST['btn1']) && $_POST['eid']=="null") || (isset($_POST['btn2']) && $_POST['ename']=="null"))
{
  header("location:updateevent.php");
}
?>
<!-- page header -->
<?php include("headeradmin1.php"); ?>
<!-- page sidebar -->
<?php include("sidebar1.php"); ?>
<?php
include("conn.php");
$year=$_SESSION['eyear'];
if(isset($_GET['id']))
{
  $eid=$_GET['id'];
  $qr="SELECT eventid,eventname,eventdate,eventtime,eventvenue FROM eventdetails WHERE eventid=? AND eventyear=?";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("is", $eid, $year);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($row1,$row2,$row3,$row4,$row5);
  $preparedstmt->fetch();
}
if(isset($_POST['btn1']))
{
  $eid=$_POST['eid'];
  $qr="SELECT eventid,eventname,eventdate,eventtime,eventvenue FROM eventdetails WHERE eventid=? AND eventyear=?";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("is", $eid, $year);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($row1,$row2,$row3,$row4,$row5);
  $preparedstmt->fetch();
}
elseif(isset($_POST['btn2']))
{
  $name=$_POST['ename'];
  $qr="SELECT eventid,eventname,eventdate,eventtime,eventvenue FROM eventdetails where eventname=? and eventyear=?";
  $preparedstmt = $conn->prepare($qr);
  $preparedstmt->bind_param("ss", $name, $year);
  $preparedstmt->execute();
  $rs=$preparedstmt->bind_result($row1,$row2,$row3,$row4,$row5);
  $preparedstmt->fetch();
}
 ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Events</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>UPDATE EVENT <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br/>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="updateevent3.php" method="POST">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Event ID </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="eid" class="form-control col-md-7 col-xs-12" name="eid" value="<?php echo $row1;  ?>" readonly="readonly" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Event Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="ename" class="form-control col-md-7 col-xs-12" name="ename" value="<?php echo $row2;?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Event Date </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="edate" name="edate" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $row3; ?>" type="date">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Event Time </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="etime" name="etime" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $row4; ?>" type="time">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" >Event Venue </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="evenue" class="form-control col-md-7 col-xs-12" type="text" name="evenue" value="<?php echo $row5; ?>">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" name="btn" value="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- footer content -->
    <?php include("footer.php"); ?>
    <!-- /footer content -->
  </div>
</div>
<div id="custom_notifications" class="custom-notifications dsp_none">
  <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
  </ul>
  <div class="clearfix"></div>
  <div id="notif-group" class="tabbed_notifications"></div>
</div>
<script src="../files/js/bootstrap.min.js"></script>
<!-- bootstrap progress js -->
<script src="../files/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../files/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../files/js/icheck/icheck.min.js"></script>
<!-- tags -->
<script src="../files/js/tags/jquery.tagsinput.min.js"></script>
<!-- switchery -->
<script src="../files/js/switchery/switchery.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../files/js/moment/moment.min.js"></script>
<script type="text/javascript" src="../files/js/datepicker/daterangepicker.js"></script>
<!-- richtext editor -->
<script src="../files/js/editor/bootstrap-wysiwyg.js"></script>
<script src="../files/js/editor/external/jquery.hotkeys.js"></script>
<script src="../files/js/editor/external/google-code-prettify/prettify.js"></script>
<!-- select2 -->
<script src="../files/js/select/select2.full.js"></script>
<!-- form validation -->
<script type="text/javascript" src="../files/js/parsley/parsley.min.js"></script>
<!-- textarea resize -->
<script src="../files/js/textarea/autosize.min.js"></script>
<script>
  autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="../files/js/autocomplete/countries.js"></script>
<script src="../files/js/autocomplete/jquery.autocomplete.js"></script>
<!-- pace -->
<script src="../files/js/pace/pace.min.js"></script>
<script src="../files/js/custom.js"></script>
</body>
</html>