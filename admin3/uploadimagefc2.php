<?php
include("../admin1/function.php");
if(isset($_POST['btn']))
{
  $target_file = basename($_FILES['image']['name']);
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  if((isset($_POST['eid']) && $_POST['eid']=="null") || (getimagesize($_FILES['image']['tmp_name'])==false))
    {
      header("location:uploadimagefc1.php");
    }
  elseif(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"))
    {
      header("location:error_filetypefc.php");
    }
    elseif($_FILES['image']['size'] > 2000000)
    {
      header("location:error_filesizefc.php");
    }
    else {
      $eid=$_POST['eid'];
      $image=addslashes($_FILES['image']['tmp_name']);
      $name=addslashes($_FILES['image']['name']);
      $image=file_get_contents($image);
      $image=base64_encode($image);
      if(saveImage($eid,$name,$image))
          {
              header("location:uploadimagefc3.php");
          }
       else
            {
              header("location:error_500fc.php");
            }

    }
}
else
 {
  header("location:error_500fc.php");
 }
 ?>
