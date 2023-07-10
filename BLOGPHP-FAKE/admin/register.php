<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<!-- Button trigger modal -->
<!-----<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>---->

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="addAdminProfileLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header" style="background-color: #5A5A5A;">
    <h5 class="modal-title" id="addAdminProfileLabel">Add Admin Profile</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
  <form action="code.php" method="POST">
    <div class="form-group">
      <label for="username">Admin Name</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Enter Name" pattern="[A-Za-z]+" required>
      <!-- The pattern attribute restricts input to alphabetic characters only -->
    </div>

    <div class="form-group">
    <label for="email">Admin Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
    <!-- The required attribute ensures the email field is not empty -->
  </div>


  <div class="form-group">
    <label for="password">Admin Password</label>
    <div class="password-input-container">
      <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" pattern="^(?!.*\s).+$" title="Password cannot contain spaces" required>
      <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
      <label for="showPassword">Show Password</label>
    </div>
  </div>

  <div class="form-group">
    <label for="confirmpassword">Confirm Password</label>
    <div class="password-input-container">
      <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Enter Confirm Password" pattern="^(?!.*\s).+$" title="Password cannot contain spaces" required>
      <input type="checkbox" id="showConfirmPassword" onchange="toggleConfirmPasswordVisibility()">
      <label for="showConfirmPassword">Show Password</label>
    </div>
  </div>

<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("showPassword");

    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>


<script>
  function validatePassword() {
    var passwordInput = document.getElementById("password");
    var passwordValue = passwordInput.value;

    if (passwordValue.includes(" ")) {
      passwordInput.setCustomValidity("Password cannot contain spaces");
    } else {
      passwordInput.setCustomValidity(""); // Reset custom validation message
    }
  }
</script>
<script>
  function toggleConfirmPasswordVisibility() {
    var confirmPasswordInput = document.getElementById("confirmpassword");
    var showConfirmPasswordCheckbox = document.getElementById("showConfirmPassword");

    if (showConfirmPasswordCheckbox.checked) {
      confirmPasswordInput.type = "text";
    } else {
      confirmPasswordInput.type = "password";
    }
  }
</script>


          <input type="hidden" name="usertype" value="admin">

          <div class="modal-footer">
            <button type="submit" name="registerbtn" class="btn btn-primary" style="background-color: #007BFF;">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #5A5A5A;">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
  <!-- Data Tables Examples -->
  <div class="card shadow mb-4" style="border-color: #CED4DA;">
    <div class="card-header py-3 bg-white">
      <h6 class="m-0 font-weight-bold text-primary">
        <span style="color: #5A5A5A">Admin Profile</span>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile" style="background-color: #5A5A5A; border-color: #5A5A5A;">Add Admin Profile</button>
      </h6>
    </div>
    <div class="card-body">
      <?php
      if(isset($_SESSION['success']) && $_SESSION['success'] != '') {
          echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
          unset($_SESSION['success']);
      }
      if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
          echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
          unset($_SESSION['status']);
      }
      ?>
      <div class="table-responsive">
        <?php
        $connection = mysqli_connect("localhost","root","","adminpanel");
       

                $query = "SELECT * FROM register";
                $query_run = mysqli_query($connection,$query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="color: #343A40;">Admin ID</th>
                            <th style="color: #343A40;">Username</th>
                            <th style="color: #343A40;">Email</th>
                            <th style="color: #343A40;">Password</th>
                            <th style="color: #343A40;">Edit</th>
                            <th style="color: #343A40;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0) {
                            while($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td>
                                        <form action="register_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success" style="background-color: #007BFF; border-color: #007BFF; color: #FFF;">EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger" style="background-color: #5A5A5A; border-color: #5A5A5A; color: #FFF;">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No record found";
                       

                    }
                    ?>
                </tbody>
            </table>
       

        </div>
                </div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>






















