<?php
session_start();
  require_once "db.php";

  $feature_item = $_POST['feature_item'];
  $active_products = $_POST['active_products'];
  $experience = $_POST['experience'];
  $clients = $_POST['clients'];

  $update_query = "UPDATE my_work SET feature_item = $feature_item,active_products=$active_products,experience=$experience,clients=$clients";
  mysqli_query($db_connect,$update_query);
  $_SESSION['my_work_update_success'] = "Work Updated successfully..";
  header("Location: my_work.php");

?>
