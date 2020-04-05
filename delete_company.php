<?php
session_start();
  require_once "db.php";

  $id = $_GET['id'];
  $select_query = "SELECT company_picture FROM company WHERE id = $id";
  $company_form_db = mysqli_query($db_connect,$select_query);
  $company = mysqli_fetch_assoc($company_form_db);
  $old_picture = $company['company_picture'];
  unlink("uploads/company/$old_picture");
  $delete_query = "DELETE FROM company WHERE id = $id";
  mysqli_query($db_connect,$delete_query);
  $_SESSION['company_delete_msg'] = "Data delete successfully..";
  header("Location: company_list.php");
?>
