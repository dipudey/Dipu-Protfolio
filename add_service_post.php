<?php
session_start();
  require_once "db.php";
  require_once "auth_check.php";

  $service_title = $_POST['service_title'];
  $service_icon  = $_POST['service_icon'];
  $service_description = $_POST['service_description'];

  if (empty($service_title) || empty($service_icon) || empty($service_description)) {
    $_SESSION['service_err'] = "Field must not be empty";
    header("Location: add_service.php");
  }
  else {
    $service_insert_query = "INSERT INTO services(service_title,service_icon,service_description) VALUES('$service_title','$service_icon','$service_description')";
    mysqli_query($db_connect,$service_insert_query);
    $_SESSION['service_success'] = "Service added sessfully..";
    header("Location: add_service.php");
  }


?>
