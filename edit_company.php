<?php
session_start();
  require_once "auth_check.php";
  $title = "Edit Company";
  require_once "dashboard_header.php";
  $id = $_GET['id'];
  $select_query = "SELECT * FROM company WHERE id = $id";
  $company_list_form_db = mysqli_query($db_connect,$select_query);
  $company = mysqli_fetch_assoc($company_list_form_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 ml-4">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Company</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['edit_company_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['edit_company_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['edit_company_err']);
                   ?>
                  <?php if(isset($_SESSION['edit_company_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['edit_company_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['edit_company_success']);
                   ?>
                  <form action="edit_company_post.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $company['id']?>">
                    <input type="hidden" name="old_picture" value="<?= $company['company_picture']?>">

                    <div class="form-group">
                      <label for="name">Customer Name</label>
                      <input type="text" class="form-control" id="name" name="company_name" value="<?= $company['company_name']?>">
                    </div>

                    <div class="form-group">
                      <label for="picture">Customer Picture</label>
                      <input type="file" class="form-control" id="picture" name="company_picture">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-header bg-success text-center">
                  <h3>Picture</h3>
                </div>
              </div>
              <div class="card-body bg-info">
                <img src="uploads/company/<?= $company['company_picture']?>" alt="<?= $company['company_name']?>">
              </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
