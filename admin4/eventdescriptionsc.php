<!-- page header -->
<?php include("headeradmin4.php"); ?>
<!-- page sidebar -->
<?php include("sidebar4.php"); ?>
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
    <?php
    include("conn.php");
    $ccode=$_SESSION['adminid'];
    $year=$_SESSION['eyear'];
    $qr="SELECT eventid FROM student_event WHERE ccode=?";
    $preparedstmt=$conn->prepare($qr);
    $preparedstmt->bind_param("i", $ccode);
    $preparedstmt->execute();
    $rs=$preparedstmt->bind_result($row1);
   ?>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>ADD EVENT DESCRIPTION <small></small></h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="eventdescriptionsc2.php" method="POST">
              <div class="col-md-9 col-sm-6 col-xs-12">
                <select class="form-control" name="eid" required="required">
                  <option value="" >  Select Event Name  </option>
                  <?php
                  while($preparedstmt->fetch())
                  {
                    $qr2="SELECT eventname FROM eventdetails WHERE eventid=$row1 AND eventyear='$year'";
                    $rs2=$conn->query($qr2);
                    $row2=$rs2->fetch_assoc();
                  ?>
                  <option value="<?php echo $row2["eventname"]; ?>"><?php echo $row2["eventname"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
                <br/>
              </div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12">
                   <textarea class="resizable_textarea form-control" placeholder="Vertically Resizable Text Area" name="desc" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal;resize: vertical; height: 90px;" required="required"></textarea>
                 </div>
               </div>
               <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" name="btn" id="btn" class="btn btn-success">Submit</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <!-- /page content -->
  <!-- footer content -->
  <?php include("../admin1/footer.php"); ?>
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
<script src="../files/js/chartjs/chart.min.js"></script>
<script src="../files/js/custom.js"></script>
</body>
</html>
