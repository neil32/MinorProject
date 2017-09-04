<!-- page header -->
   <?php include("headeradmin1.php"); ?>
   <!-- page sidebar -->
   <?php include("sidebar1.php"); ?>


      <!-- page content -->
      <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="row tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Events</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span><hr>
            </div>
          </div>

          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Participants</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span><hr>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Faculty Coordinators</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span><hr>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Student Heads</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span><hr>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span><hr>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-clock-o"></i> Days Left</span>
              <div class="count">-123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span><hr>
              </div>
        </div>

        <!--participants table-->

        <br />
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Participants<small>(List of participants)</small></h2>
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
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="abc.jsp" method="GET">
  <table border="1" width="70%" cellpadding= "1" cellspacing="5">
	<tr>
		<th>Event ID</th>
		<th>Event Name</th>
    <th>Number of Participants</th>
    <th></th>
	</tr>
	<tr>
		<td><em>E1</em></td>
		<td>Cricket</td>
    <td>20</td>
    <td><a href="view.php">View</a>

	</tr>
	<tr>
		<td>E2</td>
		<td>Batminton</td>
    <td>30</td>
    <td><a href="view.php">View</a>
	</tr>
	<tr>
		<td>E3</td>
		<td>Volly Ball</td>
    <td>40</td>
    <td><a href="view.php">View</a>
	</tr>
	<tr>
		<td>E4</td>
		<td>Football</td>
    <td>50</td>
    <td><a href="view.php">View</a>
	</tr>
</table>
                </form>
              </div>
            </div>
          </div>
        </div>

  </div>

  <!-- footer content -->
  <?php include("footer.php"); ?>
  <!-- /footer content -->


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
