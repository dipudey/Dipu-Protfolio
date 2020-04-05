<?php
session_start();
  require_once "db.php";

  if (empty($_FILES['logo']['name'])) {
    $_SESSION['logo_message_err'] = "Field Must not be empty!";
    header("Location: site_logo.php");
  }
  else{
    $picture_explode = explode('.',$_FILES['logo']['name']);
    $picture_extension = end($picture_explode);
    $support_formate = array('jpeg','jpg','png','JPEG','JPG','PNG');
    if (in_array($picture_extension,$support_formate)){
      if ($_FILES['logo']['size'] < 2097152) {
        $old_picture = $_POST['old_picture'];
        unlink("uploads/site_logo/$old_picture");
        $new_picture_name = '1'.".".$picture_extension;
        $new_location = "uploads/site_logo/$new_picture_name";
        move_uploaded_file($_FILES['logo']['tmp_name'],$new_location);

        $update_query = "UPDATE site_logo SET logo = '$new_picture_name' WHERE id = 1";
        mysqli_query($db_connect,$update_query);
        $_SESSION['logo_message_success'] = "Logo Updated successfully";
        header("Location: site_logo.php");
      }
      else {
        $_SESSION['logo_message_err'] = "Your Picture is too large!";
        header("Location: site_logo.php");
      }
    }
    else {
      $_SESSION['logo_message_err'] = "File formate doesn't supported!";
      header("Location: site_logo.php");
    }

  }
?>
