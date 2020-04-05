<?php
session_start();
  require_once "auth_check.php";
  $title = "Edit Service";
  require_once "dashboard_header.php";
  $service_id = $_GET['service_id'];
  $service_select_query = "SELECT * FROM services WHERE id = $service_id";
  $service_select = mysqli_query($db_connect,$service_select_query);
  $after_assos_service = mysqli_fetch_assoc($service_select);
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
                  <?php if(isset($_SESSION['edit_service_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['edit_service_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['edit_service_err']);
                   ?>
                  <?php if(isset($_SESSION['edit_service_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['edit_service_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['edit_service_success']);
                   ?>
                  <form action="edit_service_post.php" method="post">
                    <input type="hidden" name="id" value="<?= $after_assos_service['id'] ?>">
                    <div class="form-group">
                      <label for="ServiceTitle">Service Title</label>
                      <input type="text" class="form-control" id="ServiceTitle" placeholder="Enter Service Title" name="service_title" value="<?= $after_assos_service['service_title'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="icon">Service Icon</label>
                      <input type="text" class="form-control" id="icon" placeholder="Enter Service Title" value="<?= $after_assos_service['service_icon'] ?>" name="service_icon">
                    </div>
                    <div class="form-group">
                     <label for="comment">Service Description</label>
                     <textarea class="form-control" rows="3" id="comment" name="service_description"><?= $after_assos_service['service_description'] ?></textarea>
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
