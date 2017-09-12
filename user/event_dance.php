<?php
include("header.php");
include("../admin1/function.php");
?>
<!--HOME SECTION START-->
<div id="home" >
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
<div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">
<img src="assets/img/team/dance.jpg" alt="dance" width=100% height=100% >
</div>
</div>
</div>
</div>
<div class="gallery" class="image">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="services-wrapper">
  </div>
<?php
$eid=$_GET['eid'];
$qr="SELECT `description` from `eventdescription` where `eventid`=$eid";
$rs=mysql_query($qr);
if($row=mysql_fetch_array($rs))
{
?>
  <font face="Eras Demi ITC" size="5"><?php echo $desc; ?></font>
<?php
}
else
{
?>
<br/>
<font face="Eras Demi ITC" size="5">Dance Competetion</font>
<?php
}
?>
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
  <div class="row animate-in" data-anim-type="fade-in-up">
  <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
<br/>
<a href="participate.php?eid=5" class=" btn button-custom btn-custom-two">Participate</a>
</div>
</div>
</div>



<!--HOME SECTION END-->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
