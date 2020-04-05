<?php
session_start();
  require_once "db.php";
  $id = $_GET['id'];
  $delete_query = "DELETE FROM education WHERE id = $id";
  mysqli_query($db_connect,$delete_query);
  $_SESSION['education_delete_msg'] = "Data Delete successfully..";
  header("location: education_qualification_list.php");

?>
