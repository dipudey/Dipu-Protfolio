<?php
session_start();
  require_once "auth_check.php";
  $title = "Edit Social Media";
  require_once "dashboard_header.php";
  $id = $_GET['id'];
  $select_query = "SELECT * FROM social_media WHERE id = $id";
  $social_media_list_form_db = mysqli_query($db_connect,$select_query);
  $after_assoc_social_medial = mysqli_fetch_assoc($social_media_list_form_db);

?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Edit Social Media</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['social_media_edit_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['social_media_edit_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['social_media_edit_err']);
                   ?>
                  <?php if(isset($_SESSION['social_media_edit_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['social_media_edit_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['social_media_edit_success']);
                   ?>
                  <form action="social_media_update_post.php" method="post">
                    <input type="hidden" name="id" value="<?= $after_assoc_social_medial['id']?>">
                    <div class="form-group">
                      <label for="icon">Social Media Icon</label>
                      <input type="text" class="form-control" id="icon" value="<?= $after_assoc_social_medial['social_icon']?>" name="social_icon">
                    </div>
                    <div class="form-group">
                      <label for="link">Social Media Link</label>
                      <input type="text" class="form-control" id="link" name="social_link" value="<?=$after_assoc_social_medial['social_link']?>">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
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
