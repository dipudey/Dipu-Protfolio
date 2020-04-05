<?php
session_start();
  require_once "db.php";
  $service_id = $_GET['service_id'];
  $service_delete_query = "DELETE FROM services WHERE id = $service_id";
  mysqli_query($db_connect,$service_delete_query);
  $_SESSION['service_delete_msg'] = "Service Delete Successfully.";
  header("Location: service_list.php");

?>
