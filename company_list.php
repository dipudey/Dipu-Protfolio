<?php
session_start();
  require_once "auth_check.php";
  $title = "Company List";
  require_once "dashboard_header.php";
  require_once "db.php";

  $select_query = "SELECT * FROM company";
  $company_list_form_db = mysqli_query($db_connect,$select_query);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-warning">
                <h2 class="text-center">Company List</h2>
              </div>
              <?php if(isset($_SESSION['company_delete_msg'])): ?>
                <div class="alert alert-success mt-3">
                  <?= $_SESSION['company_delete_msg']?>
                </div>
              <?php
                endif;
                unset($_SESSION['company_delete_msg']);
              ?>
              <div class="card-body">
                <table id="service_list_data_table" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Serial No</th>
                      <th>Company Name</th>
                      <th>Company Picture</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach ($company_list_form_db as $company):
                    ?>
                    <tr class="bg-info">
                      <td><?= $i++ ?></td>
                      <td><?= $company['company_name']?></td>
                      <td>
                        <img src="uploads/company/<?= $company['company_picture']?>" width="100" height="100" alt="">
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="edit_company.php?id=<?= $company['id']?>" type="button" class="btn btn-success btn-sm">Edit</a>
                          <a href="delete_company.php?id=<?= $company['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"> </i>Delete</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php
                    if ($company_list_form_db->num_rows == 0):
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
