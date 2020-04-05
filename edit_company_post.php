<?php
session_start();
  require_once "db.php";

  $id = $_POST['id'];
  $company_name = $_POST['company_name'];

  $orginal_photo_name = $_FILES['company_picture']['name'];
  $after_explode = explode(".",$orginal_photo_name);
  $orginal_photo_extension = end($after_explode);
  $support_list = array('jpg','jpeg','png','PNG','JPG','JPEG');
  if (!$orginal_photo_name){
    $quotes_update_query = "UPDATE company SET company_name = '$company_name' WHERE id = $id";
    mysqli_query($db_connect,$quotes_update_query);
    $_SESSION['edit_company_success'] = "Data update successfully..";
    header("Location: edit_company.php?id=$id");
  }
  else {
    if (in_array($orginal_photo_extension,$support_list)) {
      if ($_FILES['company_picture']['size'] > 500000) {
        $_SESSION['edit_company_err'] = "Your file size is too large!";
        header("Location: edit_quotes.php?id=$id");
      }
      else {
        $old_picture = $_POST['old_picture'];
        unlink("uploads/company/$old_picture");
        //new file name
        $new_file_name = $id.".".$orginal_photo_extension;
        // new file location
        $new_file_location = "uploads/company/".$new_file_name;
        move_uploaded_file($_FILES['company_picture']['tmp_name'],$new_file_location);
        $quotes_update_query = "UPDATE company SET company_name = '$company_name',company_picture = '$new_file_name' WHERE id = $id";
        mysqli_query($db_connect,$quotes_update_query);
        $_SESSION['edit_company_success'] = "Protfolio add successfully..";
        header("Location: edit_company.php?id=$id");
      }
    }
    else{
      $_SESSION['edit_company_err'] = "This file formate doesn't supported!";
      header("Location: edit_company.php?id=$id");
    }
  }


?>
