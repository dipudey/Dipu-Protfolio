<?php
session_start();
  require_once "db.php";

  $id = $_GET['id'];

  //picture Delete
  $select_query = "SELECT protfolio_picture FROM protfolio WHERE id = $id";
  $protfolio_form_db = mysqli_query($db_connect,$select_query);
  $protfolio = mysqli_fetch_assoc($protfolio_form_db);
  $old_picture = $protfolio['protfolio_picture'];
  unlink("uploads/protfolio/$old_picture");
  //delete query
  $delete_query = "DELETE FROM protfolio WHERE id = $id";
  mysqli_query($db_connect,$delete_query);
  $_SESSION['protfolio_delete_msg'] = "Data delete successfully..";
  header("Location: protfolio_list.php");
?>
