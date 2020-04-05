<?php
session_start();
  require_once "db.php";

  $id = $_GET['id'];
  $select_query = "SELECT customer_picture FROM quotes WHERE id = $id";
  $quotes_form_db = mysqli_query($db_connect,$select_query);
  $quotes = mysqli_fetch_assoc($quotes_form_db);
  $old_picture = $quotes['customer_picture'];
  unlink("uploads/quotes/$old_picture");
  $delete_query = "DELETE FROM quotes WHERE id = $id";
  mysqli_query($db_connect,$delete_query);
  $_SESSION['quotes_delete_msg'] = "Data delete successfully..";
  header("Location: quotes_list.php");
?>
