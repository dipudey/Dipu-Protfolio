<?php
session_start();
  require_once "db.php";;
  $email_address = $_POST['email_address'];
  $phone_number = $_POST['phone_number'];
  $address = mysqli_real_escape_string($db_connect,$_POST['address']);

  if (empty($email_address) || empty($phone_number) || empty($address)) {
    $_SESSION['contact_information_message_err'] = "Field Must Not Be Empty!";
    header("Location: contact_information.php");
  }
  else {
    $update_query = "UPDATE contact_information SET email_address = '$email_address',phone_number = '$phone_number',address = '$address' WHERE id = 1";
    mysqli_query($db_connect,$update_query);
    $_SESSION['contact_information_message_success'] = "Contact Information Updated Successfully..";
    header("Location: contact_information.php");
  }
?>
