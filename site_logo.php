<?php
session_start();
  require_once "auth_check.php";
  $title = "Site Logo";
  require_once "dashboard_header.php";
  $select_query = "SELECT * FROM site_logo WHERE id = 1";
  $select_data_from_db = mysqli_query($db_connect,$select_query);
  $after_assoc = mysqli_fetch_assoc($select_data_from_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 ml-5">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Site Logo</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['logo_message_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['logo_message_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['logo_message_err']);
                   ?>
                  <?php if(isset($_SESSION['logo_message_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['logo_message_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['logo_message_success']);
                   ?>
                  <form action="site_logo_post.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="old_picture" value="<?= $after_assoc['logo']?>">

                    <div class="form-group">
                      <label for="icon">New Picture</label>
                      <input type="file" class="form-control" id="icon" name="logo">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                  </form>
                </div>
              </div>

            </div>
            <div class="col-3">
              <div class="card">
                <div class="card-header bg-success">
                  <h3 class="text-center text-white">Logo</h3>
                </div>
                <div class="card-body bg-secondary" height='200px'>
                  <img src="uploads/site_logo/<?= $after_assoc['logo']?>" alt="" class="img-fluid">
                </div>
              </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
