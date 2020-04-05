<?php
session_start();
  require_once "db.php";

  $customer_name = $_POST['customer_name'];
  $customer_comment = $_POST['customer_comment'];

  $orginal_photo_name = $_FILES['customer_picture']['name'];
  $after_explode = explode(".",$orginal_photo_name);
  $orginal_photo_extension = end($after_explode);
  $support_list = array('jpg','jpeg','png','PNG','JPG','JPEG');
  if (empty($customer_name) || empty($customer_comment) || empty($orginal_photo_name)) {
    $_SESSION['quotes_err'] = "Field must no be empty!";
    header("Location: add_quotes.php");
  }
  else {
    if (in_array($orginal_photo_extension,$support_list)) {
      if ($_FILES['customer_picture']['size'] > 500000) {
        $_SESSION['quotes_err'] = "Your file size is too large!";
        header("Location: add_quotes.php");
      }
      else {
        $quotes_insert_query = "INSERT INTO quotes(customer_name,customer_comment) VALUES('$customer_name','$customer_comment')";
        $quotes_insert_form_db = mysqli_query($db_connect,$quotes_insert_query);
        $last_insert_id = mysqli_insert_id($db_connect);
        $new_file_name = $last_insert_id.".".$orginal_photo_extension;
        $new_file_location = "uploads/quotes/".$new_file_name;
        move_uploaded_file($_FILES['customer_picture']['tmp_name'],$new_file_location);
        $quotes_update_query = "UPDATE quotes SET customer_picture = '$new_file_name' WHERE id = $last_insert_id";
        mysqli_query($db_connect,$quotes_update_query);
        $_SESSION['quotes_success'] = "Protfolio add successfully..";
        header("Location: add_quotes.php");
      }
    }
    else{
      $_SESSION['quotes_err'] = "This file formate doesn't supported!";
      header("Location: add_quotes.php");
    }
  }


?>
