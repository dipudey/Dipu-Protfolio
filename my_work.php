<?php
session_start();
  require_once "auth_check.php";
  $title = "My Work";
  require_once "dashboard_header.php";
  $my_work_select_query = "SELECT * FROM my_work WHERE id = 1";
  $my_work_form_db = mysqli_query($db_connect,$my_work_select_query);
  $after_assoc_my_work = mysqli_fetch_assoc($my_work_form_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">My Work</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['my_work_update_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['my_work_update_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['my_work_update_success']);
                  ?>
                  <form action="my_work_post.php" method="post">
                    <div class="form-group">
                      <label for="FeatureItem">Feature Item</label>
                      <input type="number" class="form-control" id="FeatureItem" name="feature_item" value="<?= $after_assoc_my_work['feature_item']?>">
                    </div>
                    <div class="form-group">
                      <label for="ActiveProducts">Active Products</label>
                      <input type="number" class="form-control" id="ActiveProducts" name="active_products" value="<?= $after_assoc_my_work['active_products']?>">
                    </div>
                    <div class="form-group">
                      <label for="YearExperience">Year Experience</label>
                      <input type="number" class="form-control" id="YearExperience" name="experience" value="<?=$after_assoc_my_work['experience']?>">
                    </div>
                    <div class="form-group">
                      <label for="OurClients">Our Clients</label>
                      <input type="number" class="form-control" id="OurClients" name="clients" value="<?=$after_assoc_my_work['clients']?>">
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
