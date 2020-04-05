<?php
session_start();
  require_once "db.php";

  $id = $_POST['id'];
  $category_name = $_POST['category_name'];
  $protfolio_title = $_POST['protfolio_title'];

  $orginal_photo_name = $_FILES['protfolio_picture']['name'];
  $after_explode = explode(".",$orginal_photo_name);
  $orginal_photo_extension = end($after_explode);
  $support_list = array('jpg','jpeg','png','PNG','JPG','JPEG');
  if (!$orginal_photo_name){
    $protfolio_update_query = "UPDATE protfolio SET category_name='$category_name',protfolio_title='$protfolio_title' WHERE id = $id";
    mysqli_query($db_connect,$protfolio_update_query);
    $_SESSION['protfolio_message_success'] = "Data update successfully..";
    header("Location: edit_protfolio.php?id=$id");
  }
  else {
    if (in_array($orginal_photo_extension,$support_list)) {
      if ($_FILES['protfolio_picture']['size'] > 500000) {
        $_SESSION['protfolio_err'] = "Your file size is too large!";
        header("Location: edit_protfolio.php?id=$id");
      }
      else {
        $old_picture = $_POST['old_picture'];
        unlink("uploads/protfolio/$old_picture");
        //new file name
        $new_picture_name = $id.".".$orginal_photo_extension;
        // new file location
        $new_file_location = "uploads/protfolio/".$new_picture_name;
        move_uploaded_file($_FILES['protfolio_picture']['tmp_name'],$new_file_location);
        $protfolio_update_query = "UPDATE protfolio SET category_name='$category_name',protfolio_title='$protfolio_title',protfolio_picture = '$new_picture_name' WHERE id = $id";
        mysqli_query($db_connect,$protfolio_update_query);
        $_SESSION['protfolio_message_success'] = "Protfolio add successfully..";
        header("Location: edit_protfolio.php?id=$id");
      }
    }
    else{
      $_SESSION['protfolio_message_err'] = "This file formate doesn't supported!";
      header("Location: edit_protfolio.php?id=$id");
    }
  }


?>
