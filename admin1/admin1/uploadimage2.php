<?php
include("function.php");
if(isset($_POST['btn']))
{
  $target_file = basename($_FILES['image']['name']);
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  if((isset($_POST['ename']) && $_POST['ename']=="null") || (getimagesize($_FILES['image']['tmp_name'])==false))
    {
      header("location:uploadimage.php");
    }
  elseif(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"))
    {
      header("location:error_filetype.php");
    }
    elseif($_FILES['image']['size'] > 2000000)
    {
      header("location:error_filesize.php");
    }
    else {
      $ename=$_POST['ename'];
      $image=addslashes($_FILES['image']['tmp_name']);
      $name=addslashes($_FILES['image']['name']);
      $image=file_get_contents($image);
      $image=base64_encode($image);
      if(saveImage($ename,$name,$image))
          {
              header("location:uploadimage3.php");
          }
       else
            {
              header("location:error_500.php");
            }

    }
}
else
 {
  header("location:error_500.php");
 }
 ?>
