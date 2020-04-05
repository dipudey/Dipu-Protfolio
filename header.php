<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item <?php
              if($_SERVER['PHP_SELF'] == "/form/registration.php"){
                echo "active";
              }

            ?>">
              <a class="nav-link" href="registration.php">Registration</a>
            </li>
            <li class="nav-item <?php
              if($_SERVER['PHP_SELF'] == "/form/login.php"){
                echo "active";
              }
            ?>">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item <?php
              if($_SERVER['PHP_SELF'] == "/form/user_list.php"){
                echo "active";
              }
            ?>">
              <a class="nav-link" href="user_list.php">User List</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
