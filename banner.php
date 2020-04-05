<?php
session_start();
  require_once "auth_check.php";
  $title = "Banner";
  require_once "dashboard_header.php";
  $select_query = "SELECT * FROM banner WHERE id = 1";
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
                  <h2 class="text-center text-white">Banner</h2>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['about_message_err'])): ?>
                    <div class="alert alert-danger">
                      <?= $_SESSION['about_message_err']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['about_message_err']);
                   ?>
                  <?php if(isset($_SESSION['about_message_success'])): ?>
                    <div class="alert alert-success">
                      <?= $_SESSION['about_message_success']?>
                    </div>
                  <?php
                    endif;
                    unset($_SESSION['about_message_success']);
                   ?>
                  <form action="banner_post.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="old_picture" value="<?= $after_assoc['picture']?>">
                    <div class="form-group">
                      <label for="Title">Title</label>
                      <input type="text" class="form-control" id="Title" placeholder="Enter Title" name="title" value="<?= $after_assoc['title']?>">
                    </div>
                    <div class="form-group">
                      <label for="icon">New Picture</label>
                      <input type="file" class="form-control" id="icon" name="picture">
                    </div>
                    <div class="form-group">
                      <label for="comment">Description</label>
                      <textarea class="form-control" rows="3" id="comment" name="description"><?=$after_assoc['description']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                  </form>
                </div>
              </div>

            </div>
            <div class="col-3">
              <div class="card">
                <div class="card-header bg-success">
                  <h3 class="text-center text-white">Picture</h3>
                </div>
                <div class="card-body" height='200px'>
                  <img src="uploads/banner/<?= $after_assoc['picture']?>" alt="" class="img-fluid">
                </div>
              </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<?php
  require_once "dashboard_footer.php";
?>
