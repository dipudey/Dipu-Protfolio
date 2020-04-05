<?php
session_start();
  $title = 'message seen';
  require_once "db.php";
  $guest_id = $_GET['guest_id'];

  $status_update_query = "UPDATE contact_messages SET status = 2 WHERE id = $guest_id";
  mysqli_query($db_connect,$status_update_query);
  $_SESSION['message_seen_success'] = "Message Seen Successfully..!";
  header("Location: contact_message_list.php");

?>
