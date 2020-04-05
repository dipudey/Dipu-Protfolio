<?php
session_start();
  require_once "db.php";
  require_once "auth_check.php";

  $service_id = $_POST['id'];
  $service_title = $_POST['service_title'];
  $service_icon  = $_POST['service_icon'];
  $service_description = $_POST['service_description'];

  if (empty($service_title) || empty($service_icon) || empty($service_description)) {
    $_SESSION['edit_service_err'] = "Field must not be empty";
    header("Location: service_edit.php?service_id=$service_id");
  }
  else {
    $service_update_query = "UPDATE services SET service_title = '$service_title',service_icon = '$service_icon',service_description = '$service_description' WHERE id = $service_id";
    mysqli_query($db_connect,$service_update_query);
    $_SESSION['edit_service_success'] = "Service edit sessfully..";
    header("Location: service_edit.php?service_id=$service_id");
  }


?>
