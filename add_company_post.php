<?php
session_start();
  require_once "db.php";

  $company_name = $_POST['company_name'];

  $orginal_photo_name = $_FILES['company_picture']['name'];
  $after_explode = explode(".",$orginal_photo_name);
  $orginal_photo_extension = end($after_explode);
  $support_list = array('jpg','jpeg','png','PNG','JPG','JPEG');
  if (empty($orginal_photo_name) || empty($company_name)) {
    $_SESSION['company_err'] = "Field must no be empty!";
    header("Location: add_company.php");
  }
  else {
    if (in_array($orginal_photo_extension,$support_list)) {
      if ($_FILES['company_picture']['size'] > 500000) {
        $_SESSION['company_err'] = "Your file size is too large!";
        header("Location: add_company.php");
      }
      else {
        $insert_query = "INSERT INTO company(company_name) VALUES('$company_name')";
        mysqli_query($db_connect,$insert_query);
        $last_insert_id = mysqli_insert_id($db_connect);
        $new_file_name = $last_insert_id.".".$orginal_photo_extension;
        $new_file_location = "uploads/company/".$new_file_name;
        move_uploaded_file($_FILES['company_picture']['tmp_name'],$new_file_location);
        $update_query = "UPDATE company SET company_picture = '$new_file_name' WHERE id = $last_insert_id";
        mysqli_query($db_connect,$update_query);
        $_SESSION['company_success'] = "Company add successfully..";
        header("Location: add_company.php");
      }
    }
    else{
      $_SESSION['company_err'] = "This file formate doesn't supported!";
      header("Location: add_company.php");
    }
  }


?>
