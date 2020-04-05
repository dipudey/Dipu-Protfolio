<?php
session_start();
  require_once "auth_check.php";
  $title = "Contact Message List";
  require_once "dashboard_header.php";
  require_once "db.php";

  $select_contact_messages_query = "SELECT * FROM contact_messages";
  $contact_messages_list_form_db = mysqli_query($db_connect,$select_contact_messages_query);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-info">
                <h2 class="text-center">Contact Message List</h2>
              </div>
              <?php if (isset($_SESSION['message_seen_success'])): ?>
                <div class="alert alert-success">
                  <?= $_SESSION['message_seen_success']?>
                </div>
              <?php endif; ?>
              <?php unset($_SESSION['message_seen_success']); ?>
              <div class="card-body">
                <table id="contact_messages_list_table" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Serial No</th>
                      <th>Message Status</th>
                      <th>Guest Name</th>
                      <th>Guest Email</th>
                      <th>Message Sent date & time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach ($contact_messages_list_form_db as $message):
                    ?>
                    <tr class="<?= ($message['status'] == 1)?'bg-secondary text-white':'' ?>">
                      <td><?= $i++ ?></td>
                      <td>
                        <?php
                          if ($message['status'] == 1){
                            echo "<span class='badge badge-pill badge-danger'>Unseen</span>";
                          }else {
                            echo "<span class='badge badge-pill badge-success'>Seen</span>";
                          }
                        ?>
                      </td>
                      <td><?= $message['guest_name']?></td>
                      <td><?= $message['guest_email']?></td>
                      <td>
                        <?php
                          date_default_timezone_set("Asia/Dhaka");
                          echo date('d-m-Y h-i-sa',strtotime($message['message_sent_time']));
                        ?>
                      </td>
                      <td>
                        <?php if ($message['status'] == 1): ?>
                          <a href="guest_message_seen.php?guest_id=<?= $message['id'] ?>" type="button" class="btn btn-warning btn-sm">Seen</a>
                        <?php endif; ?>
                        <a href="guest_message_view.php?guest_id=<?= $message['id'] ?>" type="button" class="btn btn-success btn-sm">View</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php
                    if ($contact_messages_list_form_db->num_rows == 0):
                  ?>
                  <tr>
                    <td colspan="50" class="text-center"><h6 class="text-danger">No Data Available.</h6></td>
                  </tr>
                  <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
