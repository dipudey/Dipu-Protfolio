<?php require_once "db.php"; ?>
<!doctype html>
<html lang="en">

<?php
  $eamil = $_SESSION['user_email'];
  $user_account_select_query = "SELECT picture FROM users WHERE email_address = '$eamil'";
  $user_account_form_db = mysqli_query($db_connect,$user_account_select_query);
  $user_account_after_assoc = mysqli_fetch_assoc($user_account_form_db);
?>

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title><?= $title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin_dashboard/assets/images/favicon.ico">

        <!-- App css -->
        <link rel="stylesheet" href="fontend_assets/css/fontawesome-all.min.css">
        <link href="admin_dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="admin_dashboard/assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <script src="admin_dashboard/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="uploads/users/<?= $user_account_after_assoc['picture']?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?= $_SESSION['user_name'] ?></a> </h5>
                        <p class="text-muted"><?= $_SESSION['user_email'] ?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="dashboard.php">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="site_logo.php">
                                    <i class="fa fa-bandcamp"></i> <span> Site Logo </span>
                                </a>
                            </li>

                            <li>
                                <a href="contact_information.php">
                                    <i class="fa fa-location-arrow"></i> <span> Contact Information </span>
                                </a>
                            </li>

                            <li>
                                <a href="banner.php">
                                    <i class="icon-picture"></i> <span>Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="about_me.php">
                                    <i class="fa fa-suitcase"></i> <span>About Me</span>
                                </a>
                            </li>
                            <li>
                                <a href="user_list.php">
                                    <i class="fa fa-users"></i><span class="badge badge-danger badge-pill float-right">
                                      <?php
                                        $count_user_list_query = "SELECT count(*) AS total_user FROM users";
                                        $total_user_count = mysqli_query($db_connect,$count_user_list_query);
                                        $total_user = mysqli_fetch_assoc($total_user_count);
                                        echo $total_user['total_user'];
                                      ?>
                                    </span> <span> User List </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_message_list.php">
                                    <i class="fa fa-comment-o"></i><span class="badge badge-danger badge-pill float-right">
                                      <?php
                                        $count_contact_messages_list_query = "SELECT count(*) AS total_messages FROM contact_messages";
                                        $total_contact_messages_count = mysqli_query($db_connect,$count_contact_messages_list_query);
                                        $total_contact_messagess = mysqli_fetch_assoc($total_contact_messages_count);
                                        echo $total_contact_messagess['total_messages'];
                                      ?>
                                    </span> <span> Message List </span>
                                </a>
                            </li>

                            <li>
                                <a href="avascript: void(0);"><i class="fi-layers"></i> <span> Education </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_education_qualification.php">Add Education</a></li>
                                    <li><a href="education_qualification_list.php">Education List</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="avascript: void(0);"><i class="fa fa-sellsy"></i> <span> Service </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_service.php">Add Service</a></li>
                                    <li><a href="service_list.php">Service List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="my_work.php">
                                    <i class="icon-grid"></i> <span> My Work</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-globe"></i> <span> Social Media </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_social_media.php">Add Social Media</a></li>
                                    <li><a href="social_media_list.php">Social Media List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-user-md"></i> <span> Protfolio </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_protfolio.php">Add Protfolio</a></li>
                                    <li><a href="protfolio_list.php">Protfolio List</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="icon-share-alt "></i> <span> Testimonial </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_quotes.php">Add Testimonial</a></li>
                                    <li><a href="quotes_list.php">Testimonial List</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-building"></i> <span> Company </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_company.php">Add Company</a></li>
                                    <li><a href="company_list.php">Company List</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">


                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="uploads/users/<?= $user_account_after_assoc['picture']?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= $_SESSION['user_name']?><i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="my_account.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="change_password.php" class="dropdown-item notify-item">
                                        <i class=" icon-key"></i> <span>Change Password</span>
                                    </a>

                                    <!-- item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->
