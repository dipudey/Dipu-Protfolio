<?php
session_start();
  require_once "db.php";
  $id = $_GET['id'];

  $delete_query = "DELETE FROM social_media WHERE id = $id";
  mysqli_query($db_connect,$delete_query);
  $_SESSION['social_media_delete_msg'] = "Data Delete Successfully...";
  header("location: social_media_list.php");


?>
