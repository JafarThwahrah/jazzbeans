<?php include_once "../php/conn.php";
include_once "../methods.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                <span>Gold Member</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.html">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Basic UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/forms/basic_elements.html">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Form Elements</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/charts/chartjs.html">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Charts</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/icons/mdi.html">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Icons</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
      </ul>
    </nav> -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper  d-flex align-items-stretch">
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span> 
          </button> -->
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">

              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">


            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="<?php echo getUserInfo((int)$_SESSION["id"])["img"]; ?>" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo getUserInfo((int)$_SESSION["id"])["name"]; ?></p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>

                <div class="dropdown-divider"></div>
                <a href="../register/includes/logout.inc.php?id=<?php
                                                                echo $_SESSION["id"][0]; ?>" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>

              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-sm-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Total Revenue</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">$<?php
                                          $total = 0;
                                          foreach (getAllInvoices() as $key) {
                                            $total = $total + (int)$key["total_price"];
                                          }
                                          echo $total;
                                          ?></h2>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                      <h6 class="text-muted font-weight-normal"></h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Sales</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0"><?php $total = 0;
                                          foreach (getAllInvoices() as $key) {
                                            $total++;
                                          }
                                          echo $total;
                                          ?></h2>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                      <h6 class="text-muted font-weight-normal"></h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- strat table products -->
          <!-- get all products method -->
          <?php
          $products = getAllProduct();

          ?>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h4 class="card-title">Products table</h4>
                  <a href="http://localhost/jazzbeans/admin/add_product.php"> <button type="button" class="btn btn-primary mr-2">Add New Product</button>
                  </a>
                </div>

                </p>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> Name </th>
                        <th> Price </th>
                        <th> Short Description </th>
                        <th> publish </th>
                        <th> Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($products as $product) { ?>
                        <tr>
                          <td><?php echo $product["id"]; ?> </td>
                          <td><?php echo $product["name"]; ?></td>
                          <td> $ <?php echo $product["price"]; ?></td>
                          <td> <?php echo $product["short_desc"]; ?></td>
                          <td> <?php if ($product["short_desc"]) echo "Publish";
                                else echo "Unpublish";  ?> </td>
                          <td>
                            <div class="d-flex justify-content-around"> <a href="edit_product.php?p_id=<?php echo $product["id"]; ?>"> <button type="button" class="btn btn-outline-secondary btn-icon-text "> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                </button></a>
                              <a href="./del_product.php?p_id=<?php echo $product["id"]; ?>"><button type="button" class="btn btn-outline-danger btn-icon-text "> Delete
                                </button></a>

                            </div>
                          </td>
                        </tr>
                      <?php  }
                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- start category table============================= -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">


              <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h4 class="card-title">Categories table</h4>
                  <a href="http://localhost/jazzbeans/admin/add_category.php"> <button type="button" class="btn btn-primary mr-2">Add New Category</button>
                  </a>
                </div>
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>

                      <tr>
                        <th> ID </th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> Description </th>
                        <th class="text-center"> Actions </th>
                      </tr>


                    </thead>
                    <tbody>
                      <?php foreach (getAllCategories() as $category) { ?>
                        <tr>
                          <td> <?php echo $category["id"]; ?> </td>
                          <td class="py-1">
                            <img src="<?php echo $category["img"]; ?>" alt="image">
                          </td>
                          <td> <?php echo $category["name"]; ?> </td>
                          <td>
                            <?php echo $category["description"]; ?>
                          </td>
                          <td>
                            <div class="d-flex justify-content-around"> <a href="edit_category.php?c_id=<?php echo $category["id"]; ?>"> <button type="button" class="btn btn-outline-secondary btn-icon-text "> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                </button></a>
                              <a href="./del_category.php?c_id=<?php echo $category["id"]; ?>"><button type="button" class="btn btn-outline-danger btn-icon-text "> Delete
                                </button></a>

                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- start users table============================= -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">


              <div class="card-body">
                <h4 class="card-title">Users table</h4>


                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>

                      <tr>
                        <th> ID </th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> online </th>
                        <th class="text-center"> Actions </th>
                      </tr>


                    </thead>
                    <tbody>
                      <?php foreach (getAllUsers() as $user) { ?>
                        <tr>
                          <td> <?php echo $user["id"]; ?> </td>
                          <td class="py-1">
                            <img src="<?php echo $user["img"]; ?>" alt="image">
                          </td>
                          <td> <?php echo $user["name"]; ?> </td>
                          <td>
                            <?php echo $user["email"]; ?>
                          </td>
                          <td>
                            <?php echo $user["user_status"]; ?>
                          </td>
                          <td>
                            <div class="d-flex justify-content-around"> <a href="edit_user.php?u_id=<?php echo $user["id"]; ?>"> <button type="button" class="btn btn-outline-secondary btn-icon-text "> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                </button></a>
                              <a href="./del_user.php?u_id=<?php echo $user["id"]; ?>"><button type="button" class="btn btn-outline-danger btn-icon-text "> Delete
                                </button></a>

                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <!-- orders  -->
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Status</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>

                          <th> Client Name </th>
                          <th> Order No </th>
                          <th> Total Price </th>
                          <th> Payment </th>
                          <th> Date </th>
                          <th> Payment Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $invoicesIDs = [];
                        foreach (getAllInvoices() as $invoice) {
                          array_push($invoicesIDs, $invoice[0]);
                        ?>
                          <tr>
                            <td>
                              <img src="<?php echo getUserInfo($invoice["user_id"])["img"]; ?>" alt="image" />
                              <span class="pl-2"><?php echo getUserInfo($invoice["user_id"])["name"]; ?></span>
                            </td>
                            <td> <?php echo $invoice["invoice_num"]; ?> </td>
                            <td> $<?php echo $invoice["total_price"]; ?> </td>
                            <td> Cash </td>
                            <td> <?php echo $invoice["currentdate"]; ?> </td>

                            <td>
                              <div class="badge badge-outline-success">Approved</div>
                            </td>
                          </tr>



                        <?php }





                        ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Jazz Beans.com 2020</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>