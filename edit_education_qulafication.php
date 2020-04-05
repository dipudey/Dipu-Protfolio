<?php
session_start();
  require_once "auth_check.php";
  $title = "Edit Education Qualification";
  require_once "dashboard_header.php";
  $id = $_GET['id'];
  $select_query = "SELECT * FROM education WHERE id = $id";
  $education_list_form_db = mysqli_query($db_connect,$select_query);
  $after_assoc_education = mysqli_fetch_assoc($education_list_form_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Edit Education Qualification</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['qualification_edit_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['qualification_edit_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['qualification_edit_err']);
                   ?>
                  <?php if(isset($_SESSION['qualification_edit_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['qualification_edit_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['qualification_edit_success']);
                   ?>

                  <form action="edit_education_qualification_post.php" method="post">
                    <input type="hidden" name="id" value="<?= $after_assoc_education['id']?>">
                    <div class="form-group">
                      <label for="Qualification">Education Qualification Name</label>
                      <input type="text" class="form-control" id="Qualification" value="<?= $after_assoc_education['qualification_name']?>" name="qualification_name">
                    </div>
                    <div class="form-group">
                      <label for="year">Qualification Year</label>
                      <input type="number" class="form-control" id="year" name="qualification_year" value="<?= $after_assoc_education['qualification_year']?>">
                    </div>
                    <div class="form-group">
                      <label for="persent">Qualification Persent</label>
                      <input type="number" class="form-control" id="persent" name="qualification_persent" value="<?= $after_assoc_education['qualification_persent']?>">
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
