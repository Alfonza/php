<?php  
	require ('dbfunction.php');
	$msg='';
	if (isset($_REQUEST['submit'])) 
	{
		$id=$_REQUEST['id'];
		$pwd=$_REQUEST['pwd'];
		$cpwd1=$_REQUEST['cpwd1'];
		$cpwd2=$_REQUEST['cpwd2'];
		

		
		if (updatePass($id,$pwd,$cpwd1)) 
		{
			$msg="<font color=green>Changed</font>";
		}
		else 
			$msg="<font color=green>Not Changed</font>"; 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>
</head>
<body>

	<form name="cpass" action="changepassword.php" method="post">
		<br><h2>Change password register</h2></center>
	 <hr color=red><br>
	 	<b>Username</b>
		<input type="text" placeholder="Enter Username" name="id"  required><br><br>
		<b>Enter Old Password</b>
		<input type="password" placeholder="Enter Password" name="pwd" required><br><br>
		<b>Enter New Password</b>
		<input type="password" placeholder="Enter Password" name="cpwd1" required><br><br>
		<b>Confirm New Password</b>
		<input type="password" placeholder="Re-Enter Password" name="cpwd2" required><br><br>
		<button  name="submit" type="submit">Submit</button>
		<?php echo  $msg;?>
	</form>
</body>
</html>