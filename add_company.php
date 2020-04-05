<?php
session_start();
  require_once "auth_check.php";
  $title = "Add Company";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Company</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['company_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['company_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['company_err']);
                   ?>
                  <?php if(isset($_SESSION['company_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['company_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['company_success']);
                   ?>
                  <form action="add_company_post.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="name">Customer Name</label>
                      <input type="text" class="form-control" id="name" name="company_name">
                    </div>
                    
                    <div class="form-group">
                      <label for="picture">Customer Picture</label>
                      <input type="file" class="form-control" id="picture" name="company_picture">
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>
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
