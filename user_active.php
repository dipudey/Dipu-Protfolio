<?php
  require_once "db.php";
  $user_id = $_GET['user_id'];
  $user_active_query = "UPDATE users SET status = 1 WHERE id = $user_id";
  mysqli_query($db_connect,$user_active_query);
  header("Location: user_list.php");
?>
