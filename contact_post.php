<?php
session_start();
  require_once "db.php";
  $guest_name = $_POST['guest_name'];
  $guest_email = $_POST['guest_email'];
  $message = htmlspecialchars($_POST['message']);
  // $message = trim($message);
  // $message = stripslashes($message);


  if (empty($guest_name)){
    $_SESSION['contact_message_err'] = "Please provide your name..!";
    header("Location: index.php#contact");
  }
  else if (empty($guest_email)){
    $_SESSION['contact_message_err'] = "Please provide your email..!";
    header("Location: index.php#contact");
  }
  else if (!filter_var($guest_email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['contact_message_err'] = "Please provide a valided email..!";
    header("Location: index.php#contact");
  }
  else if (empty($message)){
    $_SESSION['contact_message_err'] = "Write your message..";
    header("Location: index.php#contact");
  }
  else{
    $message_senta_time = date("Y-m-d h:i:s");
    $message = mysqli_real_escape_string($db_connect,$message);
    $message_insert_query = "INSERT INTO contact_messages(guest_name,guest_email,guest_message,message_sent_time) values('$guest_name','$guest_email','$message','$message_senta_time')";
    echo $message_insert_query;
    mysqli_query($db_connect,$message_insert_query);
    $_SESSION['contact_message_success'] = "Your Message Sent Successfully....";
    header("Location: index.php#contact");
  }
?>
