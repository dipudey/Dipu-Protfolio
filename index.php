<?php
session_start();
require_once "db.php";
?>
<?php
  // Contact Information php code here
  $select_contact_information_query = "SELECT * FROM contact_information WHERE id = 1";
  $contact_information_form_db = mysqli_query($db_connect,$select_contact_information_query);
  $contact_information_after_assoc = mysqli_fetch_assoc($contact_information_form_db);
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dipu Personal Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="fontend_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="fontend_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontend_assets/css/animate.min.css">
        <link rel="stylesheet" href="fontend_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="fontend_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="fontend_assets/css/flaticon.css">
        <link rel="stylesheet" href="fontend_assets/css/slick.css">
        <link rel="stylesheet" href="fontend_assets/css/aos.css">
        <link rel="stylesheet" href="fontend_assets/css/default.css">
        <link rel="stylesheet" href="fontend_assets/css/style.css">
        <link rel="stylesheet" href="fontend_assets/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">

                                <nav class="navbar navbar-expand-lg">
                                  <!-- site_logo php code here -->
                                  <?php
                                    $site_logo_select_query = "SELECT * FROM site_logo WHERE id = 1";
                                    $site_logo_select_data_from_db = mysqli_query($db_connect,$site_logo_select_query);
                                    $site_logo_after_assoc = mysqli_fetch_assoc($site_logo_select_data_from_db);
                                  ?>
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="uploads/site_logo/<?= $site_logo_after_assoc['logo']?>" alt="Logo"></a>

                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="uploads/site_logo/<?= $site_logo_after_assoc['logo']?>" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.php">
                        <img src="uploads/site_logo/<?= $site_logo_after_assoc['logo']?>" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?= $contact_information_after_assoc['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+<?= $contact_information_after_assoc['phone_number']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?= $contact_information_after_assoc['email_address']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                  <?php
                    $social_media_select_query = "SELECT * FROM social_media";
                    $service_list_form_db = mysqli_query($db_connect,$social_media_select_query);
                    foreach($service_list_form_db as $social_media):
                  ?>
                    <a href="<?= $social_media['social_link']?>"><i class="<?= $social_media['social_icon']?>"></i></a>
                  <?php endforeach; ?>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                          <?php
                            $banner_select_query = "SELECT * FROM banner WHERE id = 1";
                            $banner_select_data_from_db = mysqli_query($db_connect,$banner_select_query);
                            $after_assoc_baner = mysqli_fetch_assoc($banner_select_data_from_db);
                          ?>
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $after_assoc_baner['title']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $after_assoc_baner['description']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                      <?php
                                        $social_media_select_query = "SELECT * FROM social_media";
                                        $service_list_form_db = mysqli_query($db_connect,$social_media_select_query);
                                        foreach($service_list_form_db as $social_media):
                                      ?>
                                        <li><a href="<?= $social_media['social_link']?>"><i class="<?= $social_media['social_icon']?>"></i></a></li>
                                      <?php endforeach; ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="uploads/banner/<?= $after_assoc_baner['picture']?>" alt="banner_picture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="fontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                  <?php
                    $about_me_select_query = "SELECT * FROM about_me WHERE id = 1";
                    $about_me_from_db = mysqli_query($db_connect,$about_me_select_query);
                    $about_me_after_assoc = mysqli_fetch_assoc($about_me_from_db);
                  ?>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="uploads/about/<?=$about_me_after_assoc['picture']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?= $about_me_after_assoc['description']?></p>
                                <h3>Education:</h3>
                            </div>

                            <!-- Education Item -->
                          <?php
                            $select_query = "SELECT * FROM education";
                            $education_list_form_db = mysqli_query($db_connect,$select_query);
                            foreach($education_list_form_db as $education):
                          ?>
                            <div class="education">
                                <div class="year"><?= $education['qualification_year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $education['qualification_name']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $education['qualification_persent']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                            <!-- Education Item end -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
            <?php
              $service_select_query = "SELECT * FROM services ORDER BY id DESC LIMIT 6";
              $service_list_form_db = mysqli_query($db_connect,$service_select_query);
              foreach($service_list_form_db as $service):
            ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                <i class="<?=$service['service_icon']?>"></i>
								<h3><?=$service['service_title']?></h3>
								<p>
									<?=$service['service_description']?>
								</p>
							</div>
						</div>
          <?php endforeach; ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <?php
                        $select_query = "SELECT * FROM protfolio ORDER BY id DESC LIMIT 6";
                        $protfolio_list_form_db = mysqli_query($db_connect,$select_query);
                        foreach ($protfolio_list_form_db as $protfolio):
                      ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
              								<div class="speaker-thumb">
              									<img src="uploads/protfolio/<?=$protfolio['protfolio_picture']?>" alt="img">
              								</div>
              								<div class="speaker-overlay">
              									<span><?=$protfolio['category_name']?></span>
              									<h4><a href=""><?=$protfolio['protfolio_title']?></a></h4>
              								</div>
              							</div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                          <?php
                            $my_work_select_query = "SELECT * FROM my_work WHERE id = 1";
                            $my_work_form_db = mysqli_query($db_connect,$my_work_select_query);
                            $after_assoc_my_work = mysqli_fetch_assoc($my_work_form_db);
                          ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $after_assoc_my_work['feature_item']?></span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $after_assoc_my_work['active_products']?></span></h2>
                                        <span>Active Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-event"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$after_assoc_my_work['experience']?></span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$after_assoc_my_work['clients']?></span>k</h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                              <?php
                                $select_query = "SELECT * FROM quotes ORDER BY id DESC";
                                $quotes_list_form_db = mysqli_query($db_connect,$select_query);
                                foreach ($quotes_list_form_db as $quotes):
                              ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="uploads/quotes/<?= $quotes['customer_picture']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $quotes['customer_comment']?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $quotes['customer_name']?></h5>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                      <?php
                        $select_query = "SELECT * FROM company";
                        $company_list_form_db = mysqli_query($db_connect,$select_query);
                        foreach($company_list_form_db as $company):
                      ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="uploads/company/<?= $company['company_picture']?>" alt="<?= $company['company_name']?>">
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>

                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $contact_information_after_assoc['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+<?= $contact_information_after_assoc['phone_number']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $contact_information_after_assoc['email_address']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                              <?php if(isset($_SESSION['contact_message_err'])): ?>
                                <div class="alert alert-danger">
                                  <?= $_SESSION['contact_message_err']?>
                                </div>
                              <?php endif; ?>
                              <?php unset($_SESSION['contact_message_err']); ?>
                              <?php if(isset($_SESSION['contact_message_success'])): ?>
                                <div class="alert alert-success">
                                  <?= $_SESSION['contact_message_success']?>
                                </div>
                              <?php endif; ?>
                              <?php unset($_SESSION['contact_message_success']); ?>
                                <form action="contact_post.php" method="post">
                                    <input type="text" placeholder="your name *" name="guest_name">
                                    <input type="text" placeholder="your email *" name="guest_email">
                                    <textarea name="message" id="message" placeholder="your message *" name="guest_message"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Dipu Dey</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="fontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="fontend_assets/js/popper.min.js"></script>
        <script src="fontend_assets/js/bootstrap.min.js"></script>
        <script src="fontend_assets/js/isotope.pkgd.min.js"></script>
        <script src="fontend_assets/js/one-page-nav-min.js"></script>
        <script src="fontend_assets/js/slick.min.js"></script>
        <script src="fontend_assets/js/ajax-form.js"></script>
        <script src="fontend_assets/js/wow.min.js"></script>
        <script src="fontend_assets/js/aos.js"></script>
        <script src="fontend_assets/js/jquery.waypoints.min.js"></script>
        <script src="fontend_assets/js/jquery.counterup.min.js"></script>
        <script src="fontend_assets/js/jquery.scrollUp.min.js"></script>
        <script src="fontend_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="fontend_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="fontend_assets/js/plugins.js"></script>
        <script src="fontend_assets/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
