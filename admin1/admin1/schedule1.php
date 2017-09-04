<!-- page header -->
<?php include("headeradmin1.php");?>
<!-- page sidebar -->
<?php include("sidebar1.php"); ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Create Schedule</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <?php
    $year=$_SESSION['eyear'];
    include("conn.php");
    $qr="SELECT eventname FROM eventdetails WHERE eventyear=?";
    $preparedstmt=$conn->prepare($qr);
    $preparedstmt->bind_param("s", $year);
    $preparedstmt->execute();
    $rs=$preparedstmt->bind_result($row1);
    if(!empty($rs))
    {
     ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><small></small></h2>
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
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="schedule2.php" method="POST">
                <table>
                  <tr>
                    <td><input type="date" class="form-control" name="date" id="date"></td>
                  </tr>
                </table>
                <table border="1" class="table table-striped responsive-utilities jambo_table bulk_action">
                  <tr class="headings">
                    <thead>
                      <th>S.No.</th>
                     	<th>Event Name</th>
                      <th>Event Time</th>
                      <th>Event Venue</th>
                      <th>Check</th>
                    </thead>
                  </tr>
                  <tr>
                    <th>1</th>
                    <th>
                      <select name="ename1" class="form-control">
                        <option value="null">  Select Event  </option>
                        <?php
                        while($preparedstmt->fetch())
                        {
                          ?>
                          <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                    </th>
                    <th><input type="time" class="form-control" name="etime1"></th>
                    <th><input type="text" class="form-control" name="evenue1"></th>
                    <td><input type="checkbox" class="flat" name="chk1" value="chk1"></td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <th>
                      <select name="ename2" class="form-control">
                        <option >--Select an Event Name--</option>
                        <?php
                        $preparedstmt->execute();
                        while($preparedstmt->fetch())
                        {
                          ?>
                          <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                    </th>
                    <th><input type="time" class="form-control" name="etime2"></th>
                    <th><input type="text" name="evenue2" class="form-control"></th>
                    <td><input type="checkbox" class="flat" name="chk2" value="chk2"></td>
                  </tr>
                  <tr>
                    <th>3</th>
                    <th>
                      <select name="ename3" class="form-control">
                        <option >--Select an Event Name--</option>
                        <?php
                        $preparedstmt->execute();
                        while($preparedstmt->fetch())
                        {
                          ?>
                          <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                    </th>
                    <th><input type="time" class="form-control" name="etime3"></th>
                    <th><input type="text" class="form-control" name="evenue3"></th>
                    <th><input type="checkbox" class="flat" name="chk3" value="chk3"></th>
                    </tr>
                    <tr>
                      <th>4</th>
                      <th>
                        <select name="ename4" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime4"></th>
                      <th><input type="text" class="form-control" name="evenue4"></th>
                      <th><input type="checkbox" class="flat" name="chk4" value="chk4"></th>
                    </tr>
                    <tr>
                      <th>5</th>
                      <th>
                        <select name="ename5" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime5"></th>
                      <th><input type="text" class="form-control" name="evenue5"></th>
                      <th><input type="checkbox" class="flat" name="chk5" value="chk5"></th>
                    </tr>
                    <tr>
                      <th>6</th>
                      <th>
                        <select name="ename6" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime6"></th>
                      <th><input type="text" class="form-control" name="evenue6"></th>
                      <th><input type="checkbox" class="flat" name="chk6" value="chk6"></th>
                    </tr>
                    <tr>
                      <th>7</th>
                      <th>
                        <select name="ename7" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime7"></th>
                      <th><input type="text" class="form-control" name="evenue7"></th>
                      <th><input type="checkbox" class="flat" name="chk7" value="chk7"></th>
                    </tr>
                    <tr>
                      <th>8</th>
                      <th>
                        <select name="ename8" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime8"></th>
                      <th><input type="text" class="form-control"  name="evenue8"></th>
                      <th><input type="checkbox" class="flat" name="chk8" value="chk8"></th>
                    </tr>
                    <tr>
                      <th>9</th>
                      <th>
                        <select name="ename9" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime9"></th>
                      <th><input type="text" class="form-control"  name="evenue9"></th>
                      <th><input type="checkbox" class="flat" name="chk9" value="chk9"></th>
                    </tr>
                    <tr>
                      <th>10</th>
                      <th>
                        <select name="ename10" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime10"></th>
                      <th><input type="text" class="form-control" name="evenue10"></th>
                      <th><input type="checkbox" class="flat" name="chk10" value="chk10"></th>
                    </tr>
                    <tr>
                      <th>11</th>
                      <th>
                        <select name="ename11" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime11"></th>
                      <th><input type="text" class="form-control" name="evenue11"></th>
                      <th><input type="checkbox" class="flat" name="chk11" value="chk11"></th>
                    </tr>
                    <tr>
                      <th>12</th>
                      <th>
                        <select name="ename12" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime12"></th>
                      <th><input type="text" class="form-control" name="evenue12"></th>
                      <th><input type="checkbox" class="flat" name="chk12" value="chk12"></th>
                    </tr>
                    <tr>
                      <th>13</th>
                      <th>
                        <select name="ename13" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime13"></th>
                      <th><input type="text" class="form-control"  name="evenue13"></th>
                      <th><input type="checkbox" class="flat" name="chk13" value="chk13"></th>
                    </tr>
                    <tr>
                      <th>14</th>
                      <th>
                        <select name="ename14" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime14"></th>
                      <th><input type="text" class="form-control" name="evenue14"></th>
                      <th><input type="checkbox" class="flat" name="chk14" value="chk14"></th>
                    </tr>
                    <tr>
                      <th>15</th>
                      <th>
                        <select name="ename15" class="form-control">
                          <option >--Select an Event Name--</option>
                          <?php
                          $preparedstmt->execute();
                          while($preparedstmt->fetch())
                          {
                            ?>
                            <option value="<?php echo $row1; ?>"><?php echo $row1; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                      <th><input type="time" class="form-control" name="etime15"></th>
                      <th><input type="text" class="form-control" name="evenue15"></th>
                      <th><input type="checkbox" class="flat" name="chk15" value="chk15"></th>
                    </tr>
                </table>
                <div class="ln_solid"></div>
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
    else
    {
      ?>

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
              <p>SORRY NO EVENTS TO SCHEDULED!</p>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
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
