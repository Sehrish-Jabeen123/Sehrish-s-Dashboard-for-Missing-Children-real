<?php
include('security.php');

if(isset($_POST['save_faculty']))
{
   $name=$_POST['faculty_name']; 
   $gender=$_POST['faculty_gender']; 
   $disability=$_POST['faculty_disability']; 
   $images=$_FILES["faculty_image"]['name'];   
if(file_exists("/upload".$_FILES["faculty_image"]["name"]))
{
$store=$_FILES["faculty_image"]["name"];
$_SESSION['status']="Image already exists. '.$store.'";
header('Location: faculty.php');
}
else
{
           
            $query="INSERT INTO faculty(name,gender,disability,images) VALUES('$name','$gender','$disability','$images')";
            $query_run = mysqli_query($connection,$query);
            if($query_run)
                        {
                          //echo="Saved";
                     move_uploaded_file($_FILES["faculty_image"]["tmp_name"],"/upload".$_FILES["faculty_image"]["name"]);
                                $_SESSION['success']="Found Child Added";
                         header('Location: faculty.php');
                          }
                        else
                        {
                            $_SESSION['status']="Found Child Not Added";
                            header('Location: faculty.php');
                           }

}
}
if(isset($_POST['faculty_update_btn']))
{    $edit_id=$_POST['edit_id'];
    $edit_name=$_POST['edit_name'];
    $edit_gender=$_POST['edit_gender'];
     $edit_disability=$_POST['edit_disability'];
   $edit_faculty_image=$_FILES["faculty_image"]["name"];
   $query ="UPDATE faculty SET name='$edit_id',gender='$edit_gender',disability='$edit_disability',images='$edit_faculty_image' WHERE id='$edit_id'";
   $query_run=mysqli_query($connection,$query);
   if($query_run)
   {
    // move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/" . $_FILES["faculty_image"]["name"]);

    move_uploaded_file($_FILES["faculty_image"]["tmp_name"],"/upload".$_FILES["faculty_image"]["name"]);
    $_SESSION['success']="Found Child Updated";
header('Location: faculty.php');
   }
   else{
    $_SESSION['status']="Found Child Not Updated";
    header('Location: faculty.php');
   }
}
     
if(isset($_POST['faculty_delete_btn']))
{
    $id=$_POST['delete_id'];
    $query="DELETE  FROM faculty WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success']="Found Child Deleted";
        header('Location: faculty.php');
    }
    else
    {
        $_SESSION['success']="Found Child Not Deleted";
        header('Location: faculty.php');
    }
}









if(isset($_POST['registerbtn']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['confirmpassword'];
$usertype=$_POST['usertype'];
if($password===$cpassword)
{
$query="INSERT INTO register(username,email,password,usertype) VALUES('$username','$email','$password','$usertype')";
$query_run = mysqli_query($connection,$query);
if($query_run)
{
    //echo="Saved";
    $_SESSION['success']="Admin Profile Added";
    header('Location: register.php');
}
else{
    $_SESSION['status']="Admin Profile Not Added";
    header('Location: register.php');
}
}
else
{
    $_SESSION['status']="Password And Confirm Password Does Not Match ";
    header('Location: register.php'); 
}
} 
if(isset($_POST['updatebtn']))
{   $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];
    $usertypeupdate=$_POST['update_usertype'];
    $query="UPDATE register SET username='$username',email='$email', password='$password',usertype='$usertypeupdate' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    if( $query_run)
    {
         $_SESSION['success']="Admin Profile Is Updated";
         header('Location: register.php');
    }
    else
    {
        $_SESSION['status']="Admin Profile Is Not Updated";
        header('Location: register.php');
    }
}
if(isset($_POST['about_save']))
{   $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $description=$_POST['description'];
    $links=$_POST['links'];
    $query="INSERT INTO abouts (title,subtitle,description,links) VALUES('$title','$subtitle','$description','$links')";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
           $_SESSION['success']="Missing Childs Data Added";
           header('location:aboutus.php');
    }
    else
    {
        $_SESSION['status']="Missing Childs Data Not Added";
           header('location:aboutus.php');

    }
}
if(isset($_POST['update_btn']))
{
    $id=$_POST['edit_id'];
    $title=$_POST['edit_title'];
    $subtitle=$_POST['edit_subtitle'];
    $description=$_POST['edit_description'];
    $links=$_POST['edit_links'];
    $query="UPDATE abouts SET title='$title',subtitle='$subtitle', description='$description',links='$links' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    if( $query_run)
    {
         $_SESSION['success']="Missing Childs Data Is Updated";
         header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status']="Missing Childs Data Is Not Updated";
        header('Location: aboutus.php');
    }
}
if(isset($_POST['about_delete_btn']))
{
    $id=$_POST['delete_id'];
   
    // $query="DELETE from register WHERE id='$id'";
    $query = "DELETE FROM abouts WHERE id='$id'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success']="Missing Child Data is DELETED";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['success']="Missing Child Data is NOT DELETED";
        header('Location: aboutus.php');
    }
}


if(isset($_POST['delete_btn']))
{
    $id=$_POST['delete_id'];
   
    // $query="DELETE from register WHERE id='$id'";
    $query = "DELETE FROM register WHERE id='$id'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success']="Admin Profile is DELETED";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['success']="Admin Profile is NOT DELETED";
        header('Location: register.php');
    }
}

?>
<?php


if(isset($_POST['login_btn']))
{
    $email_login=$_POST['email'];
    $password_login=$_POST['password'];

    $query="SELECT * from register WHERE email='$email_login'AND password='$password_login'";
    $query_run=mysqli_query($connection,$query);
    if(mysqli_fetch_array($query_run))
    {
         $_SESSION['username']=$email_login;
         header('Location: index.php');
    }
    else
    {
        $_SESSION['status']='Email ID / Password is Invalid';
        header('Location: login.php');
    }
}
if(isset($_POST['logout_btn']))
{
session_destroy();
unset($_SESSION['username']);
}
?>
