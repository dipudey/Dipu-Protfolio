<?php
  require_once "db.php";
  $user_id = $_GET['user_id'];
  $user_deactive_query = "UPDATE users SET status = 2 WHERE id = $user_id";
  mysqli_query($db_connect,$user_deactive_query);
  header("Location: user_list.php");
?>
