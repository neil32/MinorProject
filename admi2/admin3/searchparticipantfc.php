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
    $qr="SELECT eventid FROM eventdetails WHERE eventyear='$year'";
    $qr2="SELECT eventname FROM eventdetails WHERE eventyear='$year'";
    $rs=$conn->query($qr);
    if($rs->num_rows > 0){
      ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>SEARCH EVENT <small></small></h2>
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
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="searchparticipantfc2.php" method="post">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"> Search Participants By Event Id
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control col-md-7 col-xs-12" name="eid" required="required">
                      <option value="">  Select an Event ID  </option>
                      <?php
                      while($row=$rs->fetch_assoc())
                      {
                        ?>
                        <option value="<?php echo $row["eventid"]; ?>"><?php echo $row["eventid"]; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="btn1" class="btn btn-success">Search</button>
                  </div>
                </div>
              </form>
              <div class="ln_solid"></div>
              <div class="form-group" ><span align="center">OR</span><div class="ln_solid"></div>
              </div>
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="searchparticipantfc2.php" method="post">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Search Participant By Event Name
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control col-md-7 col-xs-12" name="ename" required="required">
                      <option value="">  Select an Event Name  </option>
                      <?php
                      $rs=$conn->query($qr2);
                      while($row2=$rs->fetch_assoc())
                      {
                        ?>
                        <option value="<?php echo $row2["eventname"]; ?>"> <?php echo $row2["eventname"]; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="btn2"  class="btn btn-success">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
      $conn->close();
    }
    else
    {
      ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>SEARCH EVENT <small></small></h2>
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
              <p>SORRY NO EVENTS TO SEARCH!</p>
            </div>
          </div>
        </div>
      </div>
      <?php
      $conn->close();
    }
    ?>
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
