<?php
session_start();
  require_once "db.php";
  $id = $_POST['id'];
  $qualification_name = $_POST['qualification_name'];
  $qualification_year = $_POST['qualification_year'];
  $qualification_persent = $_POST['qualification_persent'];

  if (empty($qualification_name) || empty($qualification_year) || empty($qualification_persent)) {
    $_SESSION['qualification_edit_err'] = "Field must not be empty!";
    header("location: edit_education_qulafication.php?id=$id");
  }
  else {
    $education_update_query = "UPDATE education SET qualification_name='$qualification_name',qualification_year=$qualification_year,qualification_persent=$qualification_persent WHERE id = $id";
    mysqli_query($db_connect,$education_update_query);
    $_SESSION['qualification_edit_success'] = "Education Qualification updated successfully..";
    header("location: edit_education_qulafication.php?id=$id");
  }
?>
