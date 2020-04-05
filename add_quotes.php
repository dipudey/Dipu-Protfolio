<?php
session_start();
  require_once "auth_check.php";
  $title = "Add Customer Quotes";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-8 m-auto">
              <div class="card">
                <div class="card-header bg-info">
                  <h2 class="text-center text-white">Add Customer Quotes</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['quotes_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['quotes_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['quotes_err']);
                   ?>
                  <?php if(isset($_SESSION['quotes_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['quotes_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['quotes_success']);
                   ?>
                  <form action="add_quotes_post.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Category">Customer Name</label>
                      <input type="text" class="form-control" id="Category" placeholder="Enter customer name" name="customer_name">
                    </div>
                    <div class="form-group">
                      <label for="picture">Customer Picture</label>
                      <input type="file" class="form-control" id="picture" name="customer_picture">
                    </div>
                    <div class="form-group">
                     <label for="comment">Customer Comment</label>
                     <textarea class="form-control" rows="3" id="comment" name="customer_comment"></textarea>
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
