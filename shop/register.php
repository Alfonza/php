<?php  
	require ('dbfunction.php');
	$msg='';
	if (isset($_REQUEST['register'])) 
	{
		$id=$_REQUEST['id'];
		$pwd=$_REQUEST['pwd'];
		$atype=$_REQUEST['atype'];
		$A=$_REQUEST['A'];
		if (addAccount($id,$pwd,$atype,$A)) 
		{
			$msg="<font color=green>Added</font>";
		}
		else 
			$msg="<font color=green>Not Added</font>"; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	 <h2>User Register Page</h2>
	 <hr color=red><br>
	 <form action="register.php" method="post">
			
				<b>Username</b>
				<input type="text" placeholder="Enter Username" name="id" required><br><br>
				<b>Password</b>
				<input type="password" placeholder="Enter Password" name="pwd" required><br><br>
				<b>Confirm Password</b>
				<input type="password" placeholder="Re-Enter Password" name="cpassword" required><br><br>
				<b>Account Type</b>
				<select  name=atype value="select" placeholder="Select Account">Select Account
					
				<option value="user">	user</option>
				<option value="admin">	admin</option>
				
				
				</select><br><br>
					
				<b>Security Question</b>
				<select><option value="select" placeholder="Select Question">Select Question</option>
					
				<option value="1">	What is your email id?</option>
				<option value="2">	What is your nick name?</option>
				<option value="3">	Who is your best friend?</option>
				<option value="4">	what is your fvr food?</option>
			
				
				</select><br><br>
					<b>Answer</b>
				<input type="text" placeholder="Security Answer" name="A" required><br><br>
				
				<button name="register" type="submit">Sign Up</button>
				
				<a href="login1.php"><button type="button" >Back to Login</button></a><br>
				<?php echo  $msg;?>
			
		</form>
</body>
</html>