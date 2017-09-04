<!-- page header -->
<?php include("headeradmin3.php"); ?>
<!-- page sidebar -->
<?php include("sidebar3.php"); ?>
<?php
include("conn.php");
$fid=$_SESSION['adminid'];
$year=$_SESSION['eyear'];
$qr="SELECT DISTINCT event_id FROM faculty_event WHERE faculty_id=?";
$preparedstmt=$conn->prepare($qr);
$preparedstmt->bind_param("i", $fid);
$preparedstmt->execute();
$rs=$preparedstmt->bind_result($row1);
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
            <h2>ASSIGN STUDENT CO-ORDINATORS<small></small></h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="assignsc2.php" method="POST" enctype="multipart/form-data">
              <table border="1" class="table table-striped responsive-utilities jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                  	<th>S.No.</th>
                    <th>Event Name</th>
                    <th>Student Name</th>
                  	<th>Computer Code</th>
                    <th>Check</th>
                  </tr>
                </thead>
                <tr>
                  <td>1</td>
                  <td>
                    <select name="ename1" class="form-control" required="required">
                      <option value="">  Select  </option>
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
                  </td>
                  <td><input type="text" class="form-control" name="sname1"></td>
                  <td><input type="text" class="form-control" name="ccode1"></td>
                  <td><input type="checkbox"  class="flat" name="chk1" value="chk1"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <select name="ename2" class="form-control">
                      <option value="null"> Select</option>
                      <?php
                      $preparedstmt->execute();
                      $rs=$preparedstmt->bind_result($row1);
                      while($preparedstmt->fetch())
                      {
                        $rs2=$conn->query($qr2);
                        $row2=$rs2->fetch_assoc();
                        ?>
                        <option value="<?php echo $row2["eventname"]; ?>"><?php echo $row2["eventname"]; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </td>
                  <td><input type="text" class="form-control" name="sname2"></td>
                  <td><input type="text" class="form-control" name="ccode2"></td>
                  <td><input type="checkbox"  class="flat" name="chk2" value="chk2"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <select name="ename3" class="form-control">
                      <option value="null"> Select</option>
                      <?php
                      $preparedstmt->execute();
                      $rs=$preparedstmt->bind_result($row1);
                      while($preparedstmt->fetch())
                      {
                        $rs2=$conn->query($qr2);
                        $row2=$rs2->fetch_assoc();
                        ?>
                        <option value="<?php echo $row2["eventname"]; ?>"><?php echo $row2["eventname"]; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </td>
                  <td><input type="text" class="form-control" name="sname3"></td>
                  <td><input type="text" class="form-control" name="ccode3"></td>
                  <td><input type="checkbox"  class="flat" name="chk3" value="chk3"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <select name="ename4" class="form-control">
                      <option value="null"> Select</option>
                      <?php
                      $preparedstmt->execute();
                      $rs=$preparedstmt->bind_result($row1);
                      while($preparedstmt->fetch())
                      {
                        $rs2=$conn->query($qr2);
                        $row2=$rs2->fetch_assoc();
                        ?>
                        <option value="<?php echo $row2["eventname"]; ?>"><?php echo $row2["eventname"]; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </td>
                  <td><input type="text" class="form-control" name="sname4"></td>
                  <td><input type="text" class="form-control" name="ccode4"></td>
                  <td><input type="checkbox"  class="flat" name="chk4" value="chk4"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <select name="ename5" class="form-control">
                      <option value="null"> Select</option>
                      <?php
                      $preparedstmt->execute();
                      $rs=$preparedstmt->bind_result($row1);
                      while($preparedstmt->fetch())
                      {
                        $rs2=$conn->query($qr2);
                        $row2=$rs2->fetch_assoc();
                        ?>
                        <option value="<?php echo $row2["eventname"]; ?>"><?php echo $row2["eventname"]; ?></option>
                        <?php
                      }
                        ?>
                    </select>
                  </td>
                  <td><input type="text" class="form-control" name="sname5"></td>
                  <td><input type="text" class="form-control" name="ccode5"></td>
                  <td><input type="checkbox"  class="flat" name="chk5" value="chk5"></td>
                </tr>
              </table>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <input type="submit" value="Submit" class="btn btn-success" name="btn"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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
