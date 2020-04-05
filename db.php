<?php
  define('HOST_NAME','localhost');
  define('USER_NAME','root');
  define('PASSWORD','');
  define('DB_NAME','mosha');

  $db_connect = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME);
  if (mysqli_connect_errno()){
      echo "Your error is : ".mysqli_connect_error();
      exit;
  }
?>
