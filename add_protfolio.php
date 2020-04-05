<?php
session_start();
  require_once "auth_check.php";
  $title = "Add Protfolio";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Protfolio</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['protfolio_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['protfolio_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['protfolio_err']);
                   ?>
                  <?php if(isset($_SESSION['protfolio_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['protfolio_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['protfolio_success']);
                   ?>
                  <form action="add_protfolio_post.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Category">Category</label>
                      <input type="text" class="form-control" id="Category" placeholder="Enter category name" name="category_name">
                    </div>
                    <div class="form-group">
                      <label for="Title">Protfolio Title</label>
                      <input type="text" class="form-control" id="Title" placeholder="Enter Protfolio Title" name="protfolio_title">
                    </div>
                    <div class="form-group">
                      <label for="picture">Protfolio Picture</label>
                      <input type="file" class="form-control" id="picture" name="protfolio_picture">
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
