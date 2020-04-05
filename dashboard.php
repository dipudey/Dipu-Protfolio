<?php
session_start();
  require_once "auth_check.php";
  $title = "Dashboard";
  require_once "dashboard_header.php";
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">
        <div class="row mt-5">

            <div class="col-3">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $count_user_list_query = "SELECT count(*) AS total_user FROM users";
                          $total_user_count = mysqli_query($db_connect,$count_user_list_query);
                          $total_user = mysqli_fetch_assoc($total_user_count);
                          echo $total_user['total_user'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-3">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-success">Total Message</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $count_contact_messages_list_query = "SELECT count(*) AS total_messages FROM contact_messages";
                          $total_contact_messages_count = mysqli_query($db_connect,$count_contact_messages_list_query);
                          $total_contact_messagess = mysqli_fetch_assoc($total_contact_messages_count);
                          echo $total_contact_messagess['total_messages'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-comments-o fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-3">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-info">Total Brand</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $count_commpany_list_query = "SELECT count(*) AS total_commpany FROM company";
                          $total_commpany_count = mysqli_query($db_connect,$count_commpany_list_query);
                          $total_commpany = mysqli_fetch_assoc($total_commpany_count);
                          echo $total_commpany['total_commpany'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-3">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-warning">Total Services</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $count_services_list_query = "SELECT count(*) AS total_services FROM services";
                          $total_services_count = mysqli_query($db_connect,$count_services_list_query);
                          $total_services = mysqli_fetch_assoc($total_services_count);
                          echo $total_services['total_services'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>



    </div> <!-- container -->

</div> <!-- content -->
<?php
  require_once "dashboard_footer.php";
?>
