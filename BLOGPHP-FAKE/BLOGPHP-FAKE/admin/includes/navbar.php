<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Panel</title>
    <style>
    .panel {
  display: flex;
  background-color: #5A5A5A;
}

.sidebar {
  width: 200px;
  background-color: #5A5A5A;
  padding: 20px;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar-menu li {
  margin-bottom: 10px;
}

.sidebar-menu li a {
  text-decoration: none;
  color: #FFFFFF;
}

.panel-content {
  flex: 1;
  padding: 20px;
}
.sidebar-menu li a {
    font-weight: normal;
  }

  .sidebar-menu li a:hover {
    font-weight: bold;
  }

</style>

</head>
<body>
    
<!-- Sidebar -->

<div class="panel">
  <div class="panel-content">
    <!-- Main panel content goes here -->
    <!-- <h1>Welcome to the Panel</h1>
    <p>This is the main content area of the panel.</p> -->
    <!-- Sidebar content goes here -->
    <div>
    <img src="./images/logooooo.png" class="logo" alt="" style="width: 100%;height: 80px;">
    </div>
    <div>
        <hr>
      </div>
      <div>
        <hr>
      </div>
    <ul class="sidebar-menu">
      <li><a href="index.php">Home</a></li>
      <div>
        <hr>
      </div>
      <li><a href="register.php">About Admin</a></li>
      <div>
        <hr>
      </div>
      <li><a href="aboutus.php">About Missing Childs</a></li>
      <div>
        <hr>
      </div>
      <li><a href="faculty.php">About Found Childs</a></li>
      <div>
        <hr>
      </div>
      <li><a href="login.php">Logout </a></li>
    </ul>
  </div>
</div>



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column"style="background-color:#5A5A5A;">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container">
                <div class="page-heading align-center">
                    <h1 style="color: #5A5A5A;">Dashboard</h1>
                </div>
            </div>

            <!-- Topbar Navbar -->
           
    <!-- Main Content -->



                    
                            <!-- Dropdown - User Information -->


                        

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                 

                    <!-- Topbar Navbar -->


                </nav>
                <!-- End of Topbar -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: gray;">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Select "Logout" below if you are ready to end your current session.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="logout.php" method="POST">
                    <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>