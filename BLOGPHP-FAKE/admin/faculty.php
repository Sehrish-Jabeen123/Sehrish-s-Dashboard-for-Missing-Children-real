<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Modal -->
<div class="modal fade" id="facultyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #5A5A5A;">
    <h5 class="modal-title" id="addAdminProfileLabel">Add Found Childs</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

            <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                <div class="form-group">
  <label style="color: #5A5A5A;">Found Child Name</label>
  <input type="text" name="faculty_name" class="form-control" placeholder="Enter Name" pattern="[A-Za-z]+" required>
  <!-- The pattern attribute restricts input to alphabetic characters only -->
</div>

<div class="form-group">
  <label style="color: #5A5A5A;">Gender</label>
  <select name="faculty_gender" class="form-control" required>
    <option value="">Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
    <!-- Add more options for different gender identities -->
  </select>
</div>

                    <div class="form-group">
  <label style="color: #5A5A5A;">Disability Type</label>
  <select name="faculty_disability" class="form-control" required>
    <option value="">Select Disability Type</option>
    <option value="Physical">Physical Disability</option>
    <option value="Visual">Visual Impairment</option>
    <option value="Hearing">Hearing Impairment</option>
    <option value="Cognitive">Cognitive Disability</option>
    <!-- Add more options for different disability types -->
  </select>
</div>

                    <div class="form-group">
                        <label style="color: #5A5A5A;">Upload Image</label>
                        <input type="file" name="faculty_image" type="faculty_image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #5A5A5A; border-color: #5A5A5A;">Close</button>
                    <button type="submit" name="save_faculty" class="btn btn-primary" style="color: white; background-color: #007BFF; border-color: #007BFF;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fuid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Enter FOUND Childs
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultyModal"style="background-color: #5A5A5A; border-color: ##5A5A5A;">ADD FOUND CHILDS 
            </button>
            <h6>
        </div>
        <div class="card-body">
        <?php
                 if(isset($_SESSION['success']) && $_SESSION['success'] !='') 
                 {
                   echo '<h2 class="bg-primry "> '.$_SESSION['success'].' </h2>';
                   unset($_SESSION['success']);
                 }
                 if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                 {
                   echo '<h2 class="bg-danger "> '.$_SESSION['status'].' </h2>';
                   unset($_SESSION['status']);
                 }
           ?>

<div class="table-responsive">
    <?php
    $query = "SELECT * FROM faculty";
    $connection = mysqli_connect("localhost", "root", "", "adminpanel");
    $query_run = mysqli_query($connection, $query);
    if (mysqli_num_rows($query_run) > 0) {
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: #343A40;">ID</th>
                    <th style="color: #343A40;">Age</th>
                    <th style="color: #343A40;">Name</th>
                    <th style="color: #343A40;">Disability</th>
                    <th style="color: #343A40;">Image</th>
                    <th style="color: #343A40;">Edit</th>
                    <th style="color: #343A40;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                    <tr>
                        <td style="color: #343A40;"><?php echo $row['id']; ?></td>
                        <td style="color: #343A40;"><?php echo $row['name']; ?></td>
                        <td style="color: #343A40;"><?php echo $row['gender']; ?></td>
                        <td style="color: #343A40;"><?php echo $row['disability']; ?></td>
                        <td><?php echo '<img src="upload/'. $row['images'].'" width="100px;" height="100px;" alt="Image">' ?></td>
                        <td>
                            <form action="faculty_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_data_btn" class="btn btn-success" style="background-color: #007BFF; border-color: #007BFF;">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="faculty_delete_btn" class="btn btn-danger" style="background-color: #5A5A5A; border-color: #5A5A5A;">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo '<p style="color: #343A40;">No record found</p>';
    }
    ?>
</div>










<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
