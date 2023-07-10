<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Found Childs Edit</h6>
        </div>
    </div>
    <div class="card-body">
    <?php
                 if(isset($_POST['edit_data_btn']))
                 {
                    $id=$_POST['edit_id'];
                    $query="SELECT * FROM faculty WHERE id='$id'";
                    $query_run=mysqli_query($connection,$query);
                    foreach($query_run as $row)
                    {
                           ?>
<form action="code.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
    <div class="form-group">
        <label style="color:white">Age</label>
        <input type="text" name="edit_name" value="<?php echo $row['name']?>" class="form-control" placeholder="Enter Name" required>
    </div> 

    <div class="form-group">
        <label style="color:white">Name</label>
        <input type="text" name="edit_gender" value="<?php echo $row['gender']?>" class="form-control" placeholder="Enter Gender" required>
    </div> 

    <div class="form-group">
        <label style="color:white">Disability Type</label>
        <input type="text" name="edit_disability" value="<?php echo $row['disability']?>" class="form-control" placeholder="Enter Disability Type" required>
    </div> 

    <div class="form-group">
        <label style="color:white">Upload Image</label>
        <input type="file" name="faculty_image" value="<?php echo $row['images']?>" class="form-control" required>
    </div>  

    <a href="faculty.php" class="btn btn-danger" style="background-color: #5A5A5A; border-color: #5A5A5A; color: #FFFFFF;">Cancel</a>
    <button type="submit" name="faculty_update_btn" class="btn btn-primary" style="background-color: #007BFF; border-color: #007BFF;">Update</button>
</form>



                           <?php
                    }
                 }
           ?>
    </div>
</div>













<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
