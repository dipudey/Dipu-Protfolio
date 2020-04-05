<!doctype html>
<html lang="en">


<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin_dashboard/assets/images/favicon.ico">

        <!-- App css -->
        <link href="admin_dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="admin_dashboard/assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('admin_dashboard/assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="" class="text-success">
                                    <span><img src="admin_dashboard/assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="form-horizontal" action="form.php" method="post">

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="full_name" value="<?php
                                          if (isset($_GET['old_name'])) {
                                            echo $_GET['old_name'];
                                          }
                                         ?>">
                                      <?php if(isset($_GET['name_err'])):?>
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= $_GET['name_err']?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email" value="<?php
                                          if(isset($_GET['old_email'])){
                                            echo $_GET['old_email'];
                                          }
                                        ?>">
                                      <?php if(isset($_GET['email_err'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <?= $_GET['email_err']?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                      <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="age">Age </label>
                                        <input type="text" class="form-control" id="age" placeholder="Enter Your age" name="age" value="<?php
                                          if(isset($_GET['old_age'])){
                                            echo $_GET['old_age'];
                                          }
                                        ?>">

                                      <?php if(isset($_GET['age_err'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <?= $_GET['age_err']?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                      <?php endif; ?>
                                    </div>
                                </div>



                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="Password">Password</label>
                                        <input type="password" class="form-control" id="Password" placeholder="Enter your Password" name="password">
                                      <?php if(isset($_GET['password_err'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <?= $_GET['password_err']?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                      <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="Confirm_Password">Confirm Password</label>
                                        <input type="password" class="form-control" id="Confirm_Password" placeholder="Enter confirm password" name="confirm_password">
                                      <?php if(isset($_GET['confirm_password_err'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <?= $_GET['confirm_password_err']?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                      <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="">Gender</label><br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                                          <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                                          <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                      <?php if(isset($_GET['gender_err'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <?= $_GET['gender_err']?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                      <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="login.php" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">

              <!-- <p class=""><?php //echo date("Y"); ?> © Dipu Dey. - mosha.com</p> -->
            </div>

        </div>


        <!-- jQuery  -->
        <script src="admin_dashboard/assets/js/jquery.min.js"></script>
        <script src="admin_dashboard/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin_dashboard/assets/js/metisMenu.min.js"></script>
        <script src="admin_dashboard/assets/js/waves.js"></script>
        <script src="admin_dashboard/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="admin_dashboard/assets/js/jquery.core.js"></script>
        <script src="admin_dashboard/assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
</html>
