<?php
session_start();
  require_once "auth_check.php";
  $title = "Edit Protfolio";
  require_once "dashboard_header.php";
  $id  = $_GET['id'];
  $select_query = "SELECT * FROM protfolio WHERE id = $id";
  $protfolio_list_form_db = mysqli_query($db_connect,$select_query);
  $after_assoc = mysqli_fetch_assoc($protfolio_list_form_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 ml-4">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Edit Protfolio</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['protfolio_message_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['protfolio_message_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['protfolio_message_err']);
                   ?>
                  <?php if(isset($_SESSION['protfolio_message_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['protfolio_message_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['protfolio_message_success']);
                   ?>
                  <form action="edit_protfolio_post.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                    <div class="form-group">
                      <label for="Category">Category</label>
                      <input type="text" class="form-control" id="Category" value="<?= $after_assoc['category_name']?>" name="category_name">
                    </div>
                    <div class="form-group">
                      <label for="Title">Protfolio Title</label>
                      <input type="text" class="form-control" id="Title" value="<?= $after_assoc['protfolio_title']?>" name="protfolio_title">
                    </div>
                    <div class="form-group">
                      <label for="picture">Protfolio Picture</label>
                      <input type="file" class="form-control" id="picture" name="protfolio_picture">
                    </div>

                    <input type="hidden" name="old_picture" value="<?= $after_assoc['protfolio_picture']?>">

                    <button type="submit" class="btn btn-success">Update</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="card-header text-center bg-success">
                  <h3>Picture</h3>
                </div>
                <div class="card-body">
                  <img src="uploads/protfolio/<?= $after_assoc['protfolio_picture']?>" class="img-fluid" alt="">
                </div>
              </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
