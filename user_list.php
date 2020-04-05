<?php
session_start();
  require_once "auth_check.php";
  $title = "User List";
  require_once "dashboard_header.php";
  require_once "db.php";

  $select_query = "SELECT * FROM users";
  $user_list_form_db = mysqli_query($db_connect,$select_query);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-warning">
                <h2 class="text-center">User List</h2>
              </div>

            <?php if(isset($_SESSION['user_delete_msg'])): ?>
              <div class="alert alert-success mt-3">
                <?= $_SESSION['user_delete_msg']?>
              </div>
            <?php endif; ?>
              <?php
                unset($_SESSION['user_delete_msg']);
              ?>
              <div class="card-body">
                <table id="user_list_data_table" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Serial No</th>
                      <th>Unic Id</th>
                      <th>Full Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach ($user_list_form_db as $user):
                    ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= $user['id']?></td>
                      <td><?= $user['full_name']?></td>
                      <td><?= $user['email_address']?></td>
                      <td><?= $user['age']?></td>
                      <td><?= $user['gender']?></td>
                      <td>
                        <?php
                          if($user['status'] == 1){
                        ?>
                        <span class="badge badge-pill badge-success">Active</span>
                        <?php
                          }else{
                        ?>
                        <span class="badge badge-pill badge-danger">Deactive</span>
                        <?php
                          }
                        ?>
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <?php if($user['status']==1): ?>
                          <a href="user_deactive.php?user_id=<?= $user['id']?>" type="button" class="btn btn-warning btn-sm">Deactive</a>
                        <?php endif ?>
                        <?php if($user['status']==2): ?>
                          <a href="user_active.php?user_id=<?= $user['id']?>" type="button" class="btn btn-success btn-sm">Active</a>
                        <?php endif ?>
                          <a href="user_delete.php?user_id=<?= $user['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"> </i>Delete</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php
                    if ($user_list_form_db->num_rows == 0):
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
