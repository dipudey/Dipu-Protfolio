<?php
session_start();
  require_once "auth_check.php";
  $title = "Add Service";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Services</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['service_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['service_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['service_err']);
                   ?>
                  <?php if(isset($_SESSION['service_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['service_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['service_success']);
                   ?>
                  <form action="add_service_post.php" method="post">
                    <div class="form-group">
                      <label for="ServiceTitle">Service Title</label>
                      <input type="text" class="form-control" id="ServiceTitle" placeholder="Enter Service Title" name="service_title">
                    </div>
                    <div class="form-group">
                      <label for="icon">Service Icon</label>
                      <input type="text" class="form-control" id="icon" placeholder="Enter Service Title" name="service_icon">
                    </div>
                    <div class="form-group">
                     <label for="comment">Service Description</label>
                     <textarea class="form-control" rows="3" id="comment" name="service_description"></textarea>
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
