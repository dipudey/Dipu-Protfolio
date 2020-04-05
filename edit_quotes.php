<?php
session_start();
  require_once "auth_check.php";
  $title = "Edit Customer Quotes";
  require_once "dashboard_header.php";
  $id = $_GET['id'];
  $select_query = "SELECT * FROM quotes WHERE id = $id";
  $quotes_list_form_db = mysqli_query($db_connect,$select_query);
  $after_assoc = mysqli_fetch_assoc($quotes_list_form_db);
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 ml-4">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Edit Customer Quotes</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['edit_quotes_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['edit_quotes_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['edit_quotes_err']);
                   ?>
                  <?php if(isset($_SESSION['edit_quotes_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['edit_quotes_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['edit_quotes_success']);
                   ?>
                  <form action="edit_quotes_post.php" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="id" value="<?= $after_assoc['id']?>">
                    <input type="hidden" name="old_picture" value="<?= $after_assoc['customer_picture']?>">

                    <div class="form-group">
                      <label for="Category">Customer Name</label>
                      <input type="text" class="form-control" id="Category" value="<?= $after_assoc['customer_name']?>" name="customer_name">
                    </div>
                    <div class="form-group">
                      <label for="picture">Customer Picture</label>
                      <input type="file" class="form-control" id="picture" name="customer_picture">
                    </div>
                    <div class="form-group">
                     <label for="comment">Customer Comment</label>
                     <textarea class="form-control" rows="3" id="comment" name="customer_comment"><?= $after_assoc['customer_comment']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="card-header text-center bg-success">
                  <h3>Picture</h3>
                </div>
                <div class="card-body text-center">
                  <img src="uploads/quotes/<?= $after_assoc['customer_picture']?>" class="img-fluid" alt="">
                </div>
              </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
