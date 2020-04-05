<?php
  // require the Database connection
  require_once "db.php";

  $full_name = $_POST['full_name'];
  $email_address = $_POST['email'];
  $age = $_POST['age'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $gender = $_POST['gender'];
  //name number validation check
  $name_number_err = preg_match("@[0-9]@",$full_name);
  //password validation check
  $upper_case_err = preg_match("@[A-Z]@",$_POST['password']);
  $lower_case_err = preg_match("@[a-z]@",$_POST['password']);
  $password_number_err = preg_match("@[0-9]@",$_POST['password']);
  $special_chars_password = preg_match("@[#,$]@",$_POST['password']);

  if (empty($full_name)) {
    $name_err = "Please Provide Your Full Nmae!";
    header("Location: registration.php?name_err=".$name_err);
  }
  else if($name_number_err){
    $name_err = "you don't use any number in this field!";
    header("Location: registration.php?name_err=".$name_err);
  }
  else if(empty($email_address)){
    $email_err = "Please Provide Your Email Address!";
    header("Location: registration.php?email_err=".$email_err."&old_name=".$full_name);
  }
  else if (!filter_var($email_address,FILTER_VALIDATE_EMAIL)) {
    $email_err = "Your Email Address is Invalided!";
    header("Location: registration.php?email_err=".$email_err."&old_name=".$full_name);
  }
  else if (empty($age)) {
    $age_err = "Please Provide Your Age!";
    header("Location: registration.php?age_err=".$age_err."&old_name=".$full_name."&old_email=".$email_address);
  }
  else if ($age < 18) {
    $age_err = "You can't Registration Because You are not 18+ years";
    header("Location: registration.php?age_err=".$age_err."&old_name=".$full_name."&old_email=".$email_address);
  }
  else if(empty($password)){
    $password_err = "Please Provide a Password!";
    header("Location: registration.php?password_err=".$password_err."&old_name=".$full_name."&old_email=".$email_address."&old_age=".$age);
  }
  else if(strlen($password) < 8){
    $password_err = "Your password is too short Please enter password 8 or 8 more digit";
    header("Location: registration.php?password_err=".$password_err."&old_name=".$full_name."&old_email=".$email_address."&old_age=".$age);
  }
  else if(!$upper_case_err || !$lower_case_err || !$password_number_err || !$special_chars_password){
    $password_err = "Enter a Password with upper case,lower case,number and special chars";
    header("Location: registration.php?password_err=".$password_err."&old_name=".$full_name."&old_email=".$email_address."&old_age=".$age);
  }
  else if (empty($confirm_password)) {
    $confirm_password_err = "Please Provide Your Confirm Password!";
    header("Location: registration.php?confirm_password_err=".$confirm_password_err."&old_name=".$full_name."&old_email=".$email_address."&old_age=".$age);
  }
  else if($password != $confirm_password){
    $confirm_password_err = "Confirm Password Doesn't match!";
    header("Location: registration.php?confirm_password_err=".$confirm_password_err."&old_name=".$full_name."&old_email=".$email_address."&old_age=".$age);
  }
  else if(empty($gender)){
    $gender_err = "Please Select Your Gender!";
    header("Location: registration.php?gender_err=".$gender_err."&old_name=".$full_name."&old_email=".$email_address);
  }
  else {
    $user_email_check_query = "SELECT * FROM users WHERE email_address = '$email_address'";
    $form_db_info = mysqli_query($db_connect,$user_email_check_query);
    if ($form_db_info->num_rows == 1){
      $email_err = "Your are used this email already!";
      header("Location: registration.php?email_err=".$email_err."&old_name=".$full_name);
    }
    else {
      $encrypt_password = md5($password);
      $form_data_insert_query = "INSERT INTO users (full_name,email_address,age,password,gender) VALUES('$full_name','$email_address',$age,'$encrypt_password','$gender')";
      mysqli_query($db_connect,$form_data_insert_query);
      $success_msg = "Your Account Created Successfully.Now you can login";
      header("Location: login.php?success_msg=".$success_msg);
    }
  }
?>
