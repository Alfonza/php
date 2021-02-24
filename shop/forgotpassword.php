
<?php

	require ('dbfunction.php');
	$msg='';
	$id="";
	if (isset($_REQUEST['show'])) 
	{
		$id=$_REQUEST['id'];
		if (check($id)) 
		{
		
		$msg="<font color=green>Account Found </font>";
		}
		else
			$msg="<font color=green>Account Not Found </font>";
	}
	if (isset($_REQUEST['submit'])) 
	{
		$id=$_REQUEST['id'];
		$cpwd1=$_REQUEST['cpwd1'];
		$A=$_REQUEST['A'];
		
		if (forgot($id,$A,$cpwd1)) 
		{
			$msg="<font color=green>Account Password Changed</font>";

		}
		else
		{
			$msg="<font color=green>Account not found</font>"; 
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
</head>
<body>
 
	<br><h2>Forgot password</h2>
	 <hr color=red><br>
	 <form name="forgot" action="" method="post">
	<b>Enter Username</b>
	<input type="text" placeholder="Enter Username" name="id" value="<?php echo $id; ?>"required>
	<input type="submit" name="show" value="CHECK"><br><br>
	
	<b>Security Question</b>
				<select><option value="select" placeholder="Select Question">Select Question</option>
					
				<option value="1">	What is your email id?</option>
				<option value="2">	What is your nick name?</option>
				<option value="3">	Who is your best friend?</option>
				<option value="4">	what is your fav food?</option>
				
				</select><br><br>
					<b>Answer</b>
				<input type="text" placeholder="Security Answer" name="A" ><br><br>
			<b>Enter New Password</b>
		<input type="password" placeholder="Enter Password" name="cpwd1" ><br><br>
		<b>Confirm New Password</b>
		<input type="password" placeholder="Re-Enter Password" name="cpwd2" ><br><br>
	
	<button  name="submit" type="submit">submit</button>
		<?php echo  $msg;?>
	</form>
</body>
</html>