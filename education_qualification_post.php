<?php
session_start();
  require_once "db.php";
  $qualification_name = $_POST['qualification_name'];
  $qualification_year = $_POST['qualification_year'];
  $qualification_persent = $_POST['qualification_persent'];

  if (empty($qualification_name) || empty($qualification_year) || empty($qualification_persent)) {
    $_SESSION['qualification_add_err'] = "Field must not be empty!";
    header("location: add_education_qualification.php");
  }
  else {
    $education_insert_query = "INSERT INTO education (qualification_name,qualification_year,qualification_persent) VALUES('$qualification_name',$qualification_year,$qualification_persent)";
    mysqli_query($db_connect,$education_insert_query);
    $_SESSION['qualification_add_success'] = "Education Qualification added successfully..";
    header("location: add_education_qualification.php");
  }
?>
