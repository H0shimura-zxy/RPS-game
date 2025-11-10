<?php 
include('../db.php');
if(isset($_POST['name']) && isset($_POST['password']))
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	$query=mysqli_query($conn,"SELECT * FROM player WHERE name='$name' AND password='$password'");
    $row=mysqli_fetch_assoc($query);
	if(mysqli_num_rows($query)>0)
	{
        session_start();
        $_SESSION['id']=$row['id'];
		date_default_timezone_set('Asia/Yangon');
		$_SESSION['login_date']=date('Y-m-d h:i:s');
		$time=time();
		header("location:../menu.php");
	}else{
		echo '<script>alert("Login Failed,try again");location.href="../index.php"</script>';
	}
}

?>