<?php
session_start();
  require_once "auth_check.php";
  $title = "Add Social Media";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Social Media</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['social_media_add_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['social_media_add_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['social_media_add_err']);
                   ?>
                  <?php if(isset($_SESSION['social_media_add_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['social_media_add_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['social_media_add_success']);
                   ?>
                  <form action="social_media_post.php" method="post">
                    <div class="form-group">
                      <label for="icon">Social Media Icon</label>
                      <input type="text" class="form-control" id="icon" placeholder="Enter social media icon name" name="social_icon">
                    </div>
                    <div class="form-group">
                      <label for="link">Social Media Link</label>
                      <input type="text" class="form-control" id="link" name="social_link" placeholder="Enter social media link">
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
