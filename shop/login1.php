<?php  
	require ('dbfunction.php');
session_start();	
	$msg='';
	if (isset($_REQUEST['login'])) 
	{
		$id=$_REQUEST['id'];
		$pwd=$_REQUEST['pwd'];
		
		if (check_Account($id,$pwd)=="admin") 
		{
			$_SESSION['id']=$id;

				header("location:admin.php");
		}
		else if(check_Account($id,$pwd)=="user")
		{

			    $_SESSION['id']=$id;
				header("location:showproduct.php");
		}
		else
		{
			$msg="<font color=green>invalid</font>";
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	 <br><br><center><h2>User Login Page</h2></center>
	 <hr color=red><br>
	
	<center>
		<form name="login" action="" method="post">
		
	
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="id"  required><br><br>
		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="pwd" required><br><br>
		<button  name="login" type="submit">Login</button>
		<a href="register.php"><button type="button" >Register</button></a><br><br>
		<a href="forgotpassword.php">Forgot Password???</a><br></br>
		<a href="changepassword.php">Change Password???</a><br></br>
		<?php echo  $msg;?>
	
		</form>
	</center>
</body>
</html>