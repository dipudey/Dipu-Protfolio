<?php
session_start();
  require_once "db.php";

  $category_name = $_POST['category_name'];
  $protfolio_title = $_POST['protfolio_title'];

  $orginal_photo_name = $_FILES['protfolio_picture']['name'];
  $after_explode = explode(".",$orginal_photo_name);
  $orginal_photo_extension = end($after_explode);
  $support_list = array('jpg','jpeg','png','PNG','JPG','JPEG');
  if (empty($category_name) || empty($protfolio_title) || empty($orginal_photo_name)) {
    $_SESSION['protfolio_err'] = "Field must no be empty!";
    header("Location: add_protfolio.php");
  }
  else {
    if (in_array($orginal_photo_extension,$support_list)) {
      if ($_FILES['protfolio_picture']['size'] > 500000) {
        $_SESSION['protfolio_err'] = "Your file size is too large!";
        header("Location: add_protfolio.php");
      }
      else {
        $protfolio_insert_query = "INSERT INTO protfolio (category_name,protfolio_title) VALUES('$category_name','$protfolio_title')";
        $protfolio_insert_form_db = mysqli_query($db_connect,$protfolio_insert_query);
        $last_insert_id = mysqli_insert_id($db_connect);
        $new_file_name = $last_insert_id.".".$orginal_photo_extension;
        $new_file_location = "uploads/protfolio/".$new_file_name;
        move_uploaded_file($_FILES['protfolio_picture']['tmp_name'],$new_file_location);
        $protfolio_update_query = "UPDATE protfolio SET protfolio_picture = '$new_file_name' WHERE id = $last_insert_id";
        mysqli_query($db_connect,$protfolio_update_query);
        $_SESSION['protfolio_success'] = "Protfolio add successfully..";
        header("Location: add_protfolio.php");
      }
    }
    else{
      $_SESSION['protfolio_err'] = "This file formate doesn't supported!";
      header("Location: add_protfolio.php");
    }
  }


?>
