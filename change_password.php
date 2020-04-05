<?php
session_start();
  require_once "auth_check.php";
  $title = "My Account";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Change Password</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['change_password_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['change_password_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['change_password_err']);
                  ?>
                  <?php if(isset($_SESSION['change_password_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['change_password_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['change_password_success']);
                  ?>
                  <form action="change_password_post.php" method="post">
                    <div class="form-group">
                      <label for="oldpassword">Old Password</label>
                      <input type="password" class="form-control" id="oldpassword" placeholder="Enter Your Old Password" name="old_password">
                    </div>
                    <div class="form-group">
                      <label for="newpassword">New Password</label>
                      <input type="password" class="form-control" id="newpassword" placeholder="Enter Your New Password" name="new_password">
                    </div>
                    <div class="form-group">
                      <label for="conpassword">Confirm Password</label>
                      <input type="password" class="form-control" id="conpassword" placeholder="Enter Your Confirm Password" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-success">Change</button>
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
