<?php
session_start();
  require_once "db.php";
  $email_address = $_POST['email_address'];
  $password = md5($_POST['password']);
  $user_login_query = "SELECT * FROM users WHERE email_address = '$email_address' AND password = '$password'";
  $form_db_info = mysqli_query($db_connect,$user_login_query);
  if ($form_db_info->num_rows == 1) {
    $after_assoc = mysqli_fetch_assoc($form_db_info);
    if ($after_assoc['status'] == 2){
      header("location: deactive_user_id.php");
    }
    else{
      $_SESSION['user_name'] = $after_assoc['full_name'];
      $_SESSION['user_email'] = $after_assoc['email_address'];
      $_SESSION['user_id'] = $after_assoc['id'];
      header("location: dashboard.php");
    }

  }
  else {
    $_SESSION['login_err'] = "Email Address and Password doesn't match!";
    header("location: login.php");
  }

?>
