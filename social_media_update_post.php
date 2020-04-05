<?php
session_start();
  require_once "db.php";
  $id = $_POST['id'];
  $social_icon = $_POST['social_icon'];
  $social_link = $_POST['social_link'];

  if (empty($social_icon) || empty($social_link)) {
    $_SESSION['social_media_edit_err'] = "Field Must Not be Empty!";
    header("location: social_media_edit.php?id=$id");
  }
  else {
    $social_media_update_query = "UPDATE social_media SET social_icon='$social_icon', social_link = '$social_link' WHERE id = $id";
    mysqli_query($db_connect,$social_media_update_query);
    $_SESSION['social_media_edit_success'] = "Social media edit successfully...";
    header("location: social_media_edit.php?id=$id");
  }
?>
