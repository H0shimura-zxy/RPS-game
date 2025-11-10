<?php 
include('../db.php');
if(isset($_POST))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql="SELECT * FROM player WHERE name='$name'";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        echo '<script>alert("username already exist");location.href="../index.php"</script>';
    }else if($password== $cpassword)
    {
        mysqli_query($conn,"INSERT INTO player (name, email, password, created_date, modified_date) VALUES ('$name','$email','$password',now(),now())");
        echo '<script>alert("successfully registered!!");location.href="../index.php"</script>';
    }
    else{
        echo '<script>alert("password do not match!!");location.href="../index.php"</script>';
    }
};
?>