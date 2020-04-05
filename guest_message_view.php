<?php
session_start();
  require_once "auth_check.php";
  $title = "message view";
  require_once "dashboard_header.php";
  require_once "db.php";
  $guest_id = $_GET['guest_id'];
  $status_update_query = "UPDATE contact_messages SET status = 2 WHERE id = $guest_id";
  mysqli_query($db_connect,$status_update_query);
  $message_view_query = "SELECT guest_message FROM contact_messages WHERE id = $guest_id";
  $message_view_form_db = mysqli_query($db_connect,$message_view_query);
  $message_view = mysqli_fetch_assoc($message_view_form_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header bg-info">
                    <h2 class="text-center text-white">Message View</h2>
                  </div>
                  <div class="card-body">
                    <h4>
                      <?= $message_view['guest_message']?>
                    </h4>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      <a href="contact_message_list.php" class="btn btn-outline-success mr-5">Back</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->
<?php
  require_once "dashboard_footer.php";
?>
