<?php
session_start();
  require_once "auth_check.php";
  $title = "Education Qualification List";
  require_once "dashboard_header.php";
  require_once "db.php";

  $select_query = "SELECT * FROM education";
  $education_list_form_db = mysqli_query($db_connect,$select_query);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-warning">
                <h2 class="text-center">Education Qualification List</h2>
              </div>
              <?php if(isset($_SESSION['education_delete_msg'])): ?>
                <div class="alert alert-success mt-3">
                  <?= $_SESSION['education_delete_msg']?>
                </div>
              <?php
                endif;
                unset($_SESSION['education_delete_msg']);
              ?>
              <div class="card-body">
                <table id="service_list_data_table" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Serial No</th>
                      <th>Education Qualification Name</th>
                      <th>Education Qualification Year</th>
                      <th>Education Qualification Parsent</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach ($education_list_form_db as $education):
                    ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= $education['qualification_name']?></td>
                      <td><?= $education['qualification_year']?></td>
                      <td><?= $education['qualification_persent']?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="edit_education_qulafication.php?id=<?= $education['id']?>" type="button" class="btn btn-success btn-sm">Edit</a>
                          <a href="delete_education_qulafication.php?id=<?= $education['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"> </i>Delete</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php
                    if ($education_list_form_db->num_rows == 0):
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
