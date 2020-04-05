<?php
session_start();
require_once "db.php";
  $title = mysqli_real_escape_string($db_connect,$_POST['title']);
  $description = mysqli_real_escape_string($db_connect,$_POST['description']);

  if ($_FILES['picture']['name']){
    $picture_explode = explode('.',$_FILES['picture']['name']);
    $picture_extension = end($picture_explode);
    $support_formate = array('jpeg','jpg','png','JPEG','JPG','PNG');
    if (in_array($picture_extension,$support_formate)){
      if ($_FILES['picture']['size'] < 2097152) {
        $old_picture = $_POST['old_picture'];
        unlink("uploads/banner/$old_picture");
        $new_picture_name = '1'.".".$picture_extension;
        $new_location = "uploads/banner/$new_picture_name";
        move_uploaded_file($_FILES['picture']['tmp_name'],$new_location);

        $update_query = "UPDATE banner SET title = '$title',description = '$description',picture = '$new_picture_name' WHERE id = 1";
        mysqli_query($db_connect,$update_query);
        $_SESSION['about_message_success'] = "Data Updated successfully";
        header("Location: banner.php");
      }
      else {
        $_SESSION['about_message_err'] = "Your Picture is too large!";
        header("Location: banner.php");
      }
    }
    else {
      $_SESSION['about_message_err'] = "File formate doesn't supported!";
      header("Location: banner.php");
    }

  }
  else {
    $update_query = "UPDATE banner SET title = '$title',description = '$description' WHERE id = 1";
    mysqli_query($db_connect,$update_query);
    $_SESSION['about_message_success'] = "Data Updated successfully";
    header("Location: banner.php");
  }
?>
