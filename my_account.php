<?php
session_start();
  require_once "auth_check.php";
  $title = "My Account";
  require_once "dashboard_header.php";
  require_once "db.php";

  $eamil = $_SESSION['user_email'];
  $user_account_select_query = "SELECT * FROM users WHERE email_address = '$eamil'";
  $user_account_form_db = mysqli_query($db_connect,$user_account_select_query);
  $user_account_after_assoc = mysqli_fetch_assoc($user_account_form_db);


?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-info">
                <h2 class="text-center">My Account</h2>
              </div>

            <?php if(isset($_SESSION['profile_message_err'])): ?>
              <div class="alert alert-danger mt-3">
                <?= $_SESSION['profile_message_err']?>
              </div>
            <?php endif; ?>
              <?php
                unset($_SESSION['profile_message_err']);
              ?>
            <?php if(isset($_SESSION['profile_message_success'])): ?>
              <div class="alert alert-success mt-3">
                <?= $_SESSION['profile_message_success']?>
              </div>
            <?php endif; ?>
              <?php
                unset($_SESSION['profile_message_success']);
              ?>
              <div class="card-body">

                <div class="row">
                  <div class="col-5">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Name</td>
                          <td><?= $user_account_after_assoc['full_name']?></td>
                        </tr>
                        <tr>
                          <td>Email Address</td>
                          <td><?= $user_account_after_assoc['email_address']?></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td><?= $user_account_after_assoc['gender']?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-3 ml-5">
                    <div class="card">
                      <div class="card-header text-center bg-success">
                        <h5>Profile Picture</h5>
                      </div>
                      <div class="card-body text-center">
                        <img src="uploads/users/<?= $user_account_after_assoc['picture']?>" class="img-fluid" width="100" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card">
                      <div class="card-header text-center bg-success">
                        <h5>Change Profile Picture</h5>
                      </div>
                      <div class="card-body text-center">
                        <form action="my_account_post.php" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?= $user_account_after_assoc['id']?>">
                          <input type="hidden" name="old_picture" value="<?= $user_account_after_assoc['picture']?>">

                          <div class="form-group">
                            <label for="icon">New Picture</label>
                            <input type="file" class="form-control" id="icon" name="picture">
                          </div>
                          <button type="submit" class="btn btn-success">Change</button>
                        </form>
                      </div>
                    </div>
                  </div>
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
