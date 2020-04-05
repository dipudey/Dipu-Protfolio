<?php
session_start();
  $title = "Login Form";
  require_once "header.php";
?>

<div class="container">
  <div class="row">
    <div class="col-6 m-auto">
      <div class="card">
        <div class="card-header bg-info">
          <h2 class="text-center text-white">Login Form</h2>
        </div>
        <div class="card-body">
          <?php if (isset($_SESSION['login_err'])): ?>
            <div class="alert alert-danger">
              <?= $_SESSION['login_err'] ?>
            </div>
          <?php
            endif;
            unset($_SESSION['login_err']);
          ?>
          <?php if(isset($_GET['success_msg'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= $_GET['success_msg']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <form action="login_post.php" method="post">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Your Email Address" name="email_address">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password">
            </div>
            <button type="submit" class="btn btn-info">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  require_once "footer.php";
?>
