<select name="ename1" class="form-control">
  <option>--Select Faculty Name--</option>
<?php
session_start();
$dept=$_SESSION['dept'];
include("conn.php");
$qr="select `facultyname` from `facultydata` where `facultydept`='$dept'";
$rs=mysql_query($qr);
$n=mysql_num_rows($rs);
echo $n;
if($n>0)
{
  while($row=mysql_fetch_array($rs1))
  {
?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
  <?php
  }
}
  ?>
</select>
 
