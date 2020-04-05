<?php
  $title = "Registration Form";
  require_once "header.php";
?>
<div class="container">
  <div class="row">
    <div class="col-6 m-auto">
      <div class="card">
        <div class="card-header bg-info">
          <h2 class="text-center">Registration Form</h2>
        </div>
        <div class="card-body">

          <form action="form.php" method="post">
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="full_name" value="<?php
                if (isset($_GET['old_name'])) {
                  echo $_GET['old_name'];
                }
               ?>">
            </div>
            <?php if(isset($_GET['name_err'])):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= $_GET['name_err']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email" value="<?php
                if(isset($_GET['old_email'])){
                  echo $_GET['old_email'];
                }
              ?>">
            </div>
            <?php if(isset($_GET['email_err'])): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_GET['email_err']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>

            <div class="form-group">
              <label for="age">Age </label>
              <input type="text" class="form-control" id="age" placeholder="Enter Your age" name="age" value="<?php
                if(isset($_GET['old_age'])){
                  echo $_GET['old_age'];
                }
              ?>">
            </div>

            <?php if(isset($_GET['age_err'])): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_GET['age_err']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>

            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Enter your Password" name="password">
            </div>
            <?php if(isset($_GET['password_err'])): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_GET['password_err']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>

            <div class="form-group">
              <label for="Confirm_Password">Confirm Password</label>
              <input type="password" class="form-control" id="Confirm_Password" placeholder="Enter confirm password" name="confirm_password">
            </div>
            <?php if(isset($_GET['confirm_password_err'])): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_GET['confirm_password_err']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>


            <div class="form-group">
              <label for="">Gender</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
            </div>
            <?php if(isset($_GET['gender_err'])): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_GET['gender_err']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>


            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php"; ?>
