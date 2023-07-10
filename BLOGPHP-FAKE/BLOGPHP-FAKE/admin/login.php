<?php
session_start();
include('includes/header.php');
?>
<style>
  body {
    background-color: #5A5A5A;
  }
</style>
<div class="container" style="background-color: #5A5A5A;">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
  <div class="col-lg-12">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Log in Admins Here!</h1>
        <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
          echo '<h2 class="text-danger">' . $_SESSION['status'] . '</h2>';
          unset($_SESSION['status']);
        }
        ?>
      </div>
      <form class="user" action="logincode.php" method="POST">
        <div class="form-group">
          <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address..." style="background-color: #D3D3D3; border-color: #5A5A5A; color: #FFF;" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control form-control-user" placeholder="Password" style="background-color: #D3D3D3; border-color: #5A5A5A; color: #FFF;" required>
        </div>
        <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block" style="background-color: #007BFF; border-color: #007BFF; color: #FFF;">Login</button>
        <hr>
      </form>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<?php
include('includes/scripts.php');
?>
