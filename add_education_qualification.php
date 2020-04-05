<?php
session_start();
  require_once "auth_check.php";
  $title = "Add Education Qualification";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Education Qualification</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['qualification_add_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['qualification_add_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['qualification_add_err']);
                   ?>
                  <?php if(isset($_SESSION['qualification_add_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['qualification_add_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['qualification_add_success']);
                   ?>

                  <form action="education_qualification_post.php" method="post">
                    <div class="form-group">
                      <label for="Qualification">Education Qualification Name</label>
                      <input type="text" class="form-control" id="Qualification" placeholder="Enter qualification name" name="qualification_name">
                    </div>
                    <div class="form-group">
                      <label for="year">Qualification Year</label>
                      <input type="number" class="form-control" id="year" name="qualification_year" placeholder="Enter qualification year">
                    </div>
                    <div class="form-group">
                      <label for="persent">Qualification Persent</label>
                      <input type="number" class="form-control" id="persent" name="qualification_persent" placeholder="Enter qualification persent">
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
