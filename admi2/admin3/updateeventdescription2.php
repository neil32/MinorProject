<!-- page header -->
<?php include("headeradmin3.php"); ?>
<!-- page sidebar -->
<?php include("sidebar3.php"); ?>
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
    $year=$_SESSION['eyear'];
    if(isset($_POST['btn']))
    {
      $eid=$_POST['eid'];
      $qr1="SELECT eventname FROM eventdetails WHERE eventid=$eid";
      $qr2="SELECT description FROM eventdescription WHERE eventid=$eid";
      $rs1=$conn->query($qr1);
      $rs2=$conn->query($qr2);
      if(($rs1->num_rows>0) && ($rs2->num_rows>0))
      {
        $row1=$rs1->fetch_assoc();
        $row2=$rs2->fetch_assoc();
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="updateeventdescription3.php" method="POST">
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" name="ename" value="<?php echo $row1["eventname"];?>" readonly>
                    <br/>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea class="resizable_textarea form-control" placeholder="Vertically Resizable Text Area" name="desc" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal;resize: vertical; height: 90px;"><?php echo $row2["description"]; ?></textarea>
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
       <?php
      }
      $conn->close();
    }
    ?>
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
