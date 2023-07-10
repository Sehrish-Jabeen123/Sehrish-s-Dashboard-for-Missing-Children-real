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
            <h6 class="m-0 font-weight-bold text-primary" style="color: #5A5A5A;">EDIT Admin Profile</h6>
        </div>
        <div class="card-body">
            <?php
            $connection=mysqli_connect("localhost","root","","adminpanel");
            if(isset($_POST['edit_btn']))
            {
                $id=$_POST['edit_id'];
                $query="SELECT * FROM register WHERE ID='$id'";
                $query_run=mysqli_query($connection,$query);
                foreach($query_run as $row)
                {
                    ?>
                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id"  value="<?php echo $row['id']?>">
                        <div class="form-group">
                            <label style="color: #5A5A5A;">Admin Name</label>
                            <input type="text" name="edit_username" value="<?php echo $row['username']?>" class="form-control" placeholder="Admin Name">
                        </div>
                        <div class="form-group">
                            <label style="color: #5A5A5A;">Admin Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email']?>" class="form-control" placeholder="Admin Email">
                        </div>
                        <div class="form-group">
                            <label style="color: #5A5A5A;">Admin Password</label>
                            <input type="password" name="edit_password" value="<?php echo $row['password']?>" class="form-control" placeholder="Admin Password">
                        </div>
                        <!-- <div class="form-group">
                            <label style="color: #343A40;">USERTYPE</label>
                            <select name="update_usertype" class="form-control">
                                <option value="admin" name="admin"></option>
                                <option value="user" name="user"></option>
                            </select>
                        </div> -->
                        <a href="register.php" class="btn btn-danger" style="color: white; background-color: #5A5A5A; border-color: #5A5A5A;">Cancel</a>
                        <button type="submit" name="updatebtn" class="btn btn-primary"style="color: white; background-color: #007BFF; border-color: #007BFF;">Update</button>

                    </form>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>


</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>