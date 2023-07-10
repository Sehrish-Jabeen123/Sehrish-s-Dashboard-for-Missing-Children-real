<?php
include('security.php');


include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="ABOUTUSMODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #5A5A5A;">
    <h5 class="modal-title" id="addAdminProfileLabel">ADD MISSING CHILDS DETAILS HERE</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

            <form action="code.php" method="POST">

                <div class="modal-body">
                <div class="form-group">
  <label>CHILD NAME</label>
  <input type="text" name="title" class="form-control" placeholder="Child Name" pattern="[A-Za-z]+" required>
  <!-- The pattern attribute restricts input to alphabetic characters only -->
</div>

<div class="form-group">
  <label>GENDER</label>
  <select name="subtitle" class="form-control" required>
    <option value="">Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
    <!-- Add more options for different gender identities -->
  </select>
</div>


<div class="form-group">
  <label>DISABILITY TYPE</label>
  <select name="description" class="form-control" required>
    <option value="">Select Disability Type</option>
    <option value="Physical">Physical Disability</option>
    <option value="Visual">Visual Impairment</option>
    <option value="Hearing">Hearing Impairment</option>
    <option value="Cognitive">Cognitive Disability</option>
    <!-- Add more options for different disability types -->
  </select>
</div>


<div class="form-group">
  <label for="age">AGE</label>
  <input type="number" name="links" id="age" class="form-control" placeholder="Child Age" min="0" required>
</div>


                </div>
                <div class="modal-footer">
                <button type="submit" name="about_save" class="btn btn-primary"style="background-color: #007BFF;">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"style="background-color: #5A5A5A;">Close</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4" style="border-color: #CED4DA;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <span style="color: gray;">Enter Data Of Missing Childs</span>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ABOUTUSMODAL" style="background-color: #5A5A5A; border-color: ##5A5A5A;">ADD MISSING CHILDS DETAILS HERE</button>
            </h6>
        </div>
        <div class="card-body">
            <?php
            if(isset($_SESSION['success']) && $_SESSION['success'] != '') 
            {
                echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
                unset($_SESSION['success']);
            }
            if(isset($_SESSION['status']) && $_SESSION['status'] != '') 
            {
                echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                unset($_SESSION['status']);
            }
            ?>
            <div class="table-responsive">
                <?php
                $query = "SELECT * FROM abouts";
                $connection = mysqli_connect("localhost", "root", "", "adminpanel");
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color: gray;">
                            <th>CHILD ID</th>
                            <th>CHILD NAME</th>
                            <th>GENDER</th>
                            <th>DISABILITY TYPE</th>
                            <th>AGE</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr style="color: gray;">
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['subtitle']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><?php echo $row['links']; ?></td>
                                    <td>
                                        <form action="about_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success" style="background-color: #007BFF; border-color: #007BFF; color: white;">EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="about_delete_btn" class="btn btn-danger" style="background-color: #5A5A5A; border-color: #5A5A5A; color: white;">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="7" style="color: gray;">No record found</td></tr>';
                        }
                        ?>

        </tbody>
    </table>
</div>



        </div>
    </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>