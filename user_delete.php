<?php
session_start();
  require_once "db.php";
  $user_id = $_GET['user_id'];
  $user_delete_query = "DELETE FROM users WHERE id = $user_id";
  mysqli_query($db_connect,$user_delete_query);
  $_SESSION['user_delete_msg'] = "User Delete Successfully.";
  header("Location: user_list.php");

?>
