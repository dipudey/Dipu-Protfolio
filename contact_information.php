<?php
session_start();
  require_once "auth_check.php";
  $title = "Contact Information";
  require_once "dashboard_header.php";
  $select_query = "SELECT * FROM contact_information WHERE id = 1";
  $select_data_from_db = mysqli_query($db_connect,$select_query);
  $after_assoc = mysqli_fetch_assoc($select_data_from_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Contact Information</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['contact_information_message_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['contact_information_message_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['contact_information_message_err']);
                   ?>
                  <?php if(isset($_SESSION['contact_information_message_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['contact_information_message_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['contact_information_message_success']);
                   ?>
                  <form action="contact_information_post.php" method="post">

                    <div class="form-group">
                      <label for="icon">Email Address</label>
                      <input type="text" class="form-control" id="icon" name="email_address" value="<?= $after_assoc['email_address']?>">
                    </div>
                    <div class="form-group">
                      <label for="icon">Phone Number</label>
                      <input type="text" class="form-control" id="icon" name="phone_number" value="<?= $after_assoc['phone_number']?>">
                    </div>
                    <div class="form-group">
                     <label for="comment">Address</label>
                     <textarea class="form-control" rows="3" id="comment" name="address"><?= $after_assoc['address']?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                  </form>
                </div>
              </div>

            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
