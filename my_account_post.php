<?php
session_start();
  require_once "db.php";
  $id = $_POST['id'];

  if (empty($_FILES['picture']['name'])) {
    $_SESSION['profile_message_err'] = "Field Must not be empty!";
    header("Location: my_account.php");
  }
  else{
    $picture_explode = explode('.',$_FILES['picture']['name']);
    $picture_extension = end($picture_explode);
    $support_formate = array('jpeg','jpg','png','JPEG','JPG','PNG');
    if (in_array($picture_extension,$support_formate)){
      if ($_FILES['picture']['size'] < 2097152) {
        $old_picture = $_POST['old_picture'];
        if ($old_picture != 'default_picture.jpg') {
          unlink("uploads/users/$old_picture");
          $new_picture_name = $id.".".$picture_extension;
          $new_location = "uploads/users/$new_picture_name";
          move_uploaded_file($_FILES['picture']['tmp_name'],$new_location);

          $update_query = "UPDATE users SET picture = '$new_picture_name' WHERE id = $id";
          mysqli_query($db_connect,$update_query);
          $_SESSION['profile_message_success'] = "Profile Picture Changed successfully";
          header("Location: my_account.php");
        }
        else {
          $new_picture_name = $id.".".$picture_extension;
          $new_location = "uploads/users/$new_picture_name";
          move_uploaded_file($_FILES['picture']['tmp_name'],$new_location);

          $update_query = "UPDATE users SET picture = '$new_picture_name' WHERE id = $id";
          mysqli_query($db_connect,$update_query);
          $_SESSION['profile_message_success'] = "Profile Picture Changed successfully";
          header("Location: my_account.php");
        }

      }
      else {
        $_SESSION['profile_message_err'] = "Your Picture is too large!";
        header("Location: my_account.php");
      }
    }
    else {
      $_SESSION['profile_message_err'] = "File formate doesn't supported!";
      header("Location: my_account.php");
    }

  }
?>
