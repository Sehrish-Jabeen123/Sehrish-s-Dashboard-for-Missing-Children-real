<?php
include('security.php');
//session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
    <!-----Data Tables Examples------>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="color: #5A5A5A;">Missing Childs Edit</h6>
        </div>
        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "adminpanel");
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM abouts WHERE ID='$id'";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) {
            ?>
                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                        <div class="form-group">
                            <label style="color: #5A5A5A;">CHILD NAME</label>
                            <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="CHILD NAME">
                        </div>

                        <div class="form-group">
                            <label style="color: #5A5A5A;">GENDER</label>
                            <input type="text" name="edit_subtitle" value="<?php echo $row['subtitle'] ?>" class="form-control" placeholder="GENDER">
                        </div>

                        <div class="form-group">
                            <label style="color: #5A5A5A;">DISABILITY TYPE</label>
                            <input type="text" name="edit_description" value="<?php echo $row['description'] ?>" class="form-control" placeholder="DISABILITY TYPE">
                        </div>
                        <div class="form-group">
                            <label style="color: #5A5A5A;">AGE</label>
                            <input type="text" name="edit_links" value="<?php echo $row['links'] ?>" class="form-control" placeholder="AGE">
                        </div>

                        <a href="aboutus.php" class="btn btn-danger" style="color: white; background-color: #5A5A5A; border-color: #5A5A5A;">Cancel</a>
                        <button type="submit" name="update_btn" class="btn btn-primary" style="color: white; background-color: #007BFF; border-color: #007BFF;">Update</button>

                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>