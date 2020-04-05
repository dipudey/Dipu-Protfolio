<?php
session_start();
  require_once "db.php";
  $social_icon = $_POST['social_icon'];
  $social_link = $_POST['social_link'];

  if (empty($social_icon) || empty($social_link)) {
    $_SESSION['social_media_add_err'] = "Field Must Not be Empty!";
    header('location: add_social_media.php');
  }
  else {
    $social_media_insert_query = "INSERT INTO social_media(social_icon,social_link) VALUES('$social_icon','$social_link')";
    mysqli_query($db_connect,$social_media_insert_query);
    $_SESSION['social_media_add_success'] = "Social media added successfully...";
    header('location: add_social_media.php');
  }
?>
