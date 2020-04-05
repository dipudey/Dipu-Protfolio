<?php
session_start();
  require_once "db.php";
  $old_pssword = $_POST['old_password'];
  $encrypt_old_pssword = md5($_POST['old_password']);
  $new_pssword = $_POST['new_password'];
  $confirm_pssword = $_POST['confirm_password'];

  $user_email = $_SESSION['user_email'];
// Cheack the password field validation with upper case,lower case,number and special character
  $upper_case_err = preg_match("@[A-Z]@",$_POST['new_password']);
  $lower_case_err = preg_match("@[a-z]@",$_POST['new_password']);
  $password_number_err = preg_match("@[0-9]@",$_POST['new_password']);
  $special_chars_password = preg_match("@[#,$]@",$_POST['new_password']);

  $old_password_check_query = "SELECT * FROM users WHERE email_address = '$user_email' AND password = '$encrypt_old_pssword'";
  $form_db = mysqli_query($db_connect,$old_password_check_query);

  if ($form_db->num_rows == 0) {
    $_SESSION['change_password_err'] = "Your Old Password Doesn't Match!";
    header("Location: change_password.php");
  }
  else if(empty($new_pssword)){
    $_SESSION['change_password_err'] = "Please Provide a New Password!";
    header("Location: change_password.php");
  }
  else if($new_pssword == $old_pssword){
    $_SESSION['change_password_err'] = "Your New password can not be same your old password!";
    header("Location: change_password.php");
  }
  else if(strlen($new_pssword) < 8){
    $_SESSION['change_password_err'] = "Your password is too short Please enter password 8 or 8 more digit";
    header("Location: change_password.php");
  }
  else if(!$upper_case_err || !$lower_case_err || !$password_number_err || !$special_chars_password){
    $_SESSION['change_password_err'] = "Enter a Password with upper case,lower case,number and special chars";
    header("Location: change_password.php");
  }
  else if (empty($confirm_pssword)) {
    $_SESSION['change_password_err'] = "Please Provide Your Confirm Password!";
    header("Location: change_password.php");
  }
  else if($new_pssword != $confirm_pssword){
    $_SESSION['change_password_err'] = "Confirm Password Doesn't match!";
    header("Location: change_password.php");
  }
  else{
    $encrypt_new_password = md5($new_pssword);
    $password_change_query = "UPDATE users SET password = '$encrypt_new_password'";
    $_SESSION['change_password_success'] = "Your password change successfully";
    mysqli_query($db_connect,$password_change_query);
    header("Location: change_password.php");
  }
?>
