<?php
require('dbfunction.php');
$msg="";
$id=getNewProductid();
if(isset($_REQUEST['submit']))
{
	$pname=$_REQUEST['pname'];
	$pdet=$_REQUEST['pdet'];
	$price=$_REQUEST['price'];
	$category=$_REQUEST['category'];
	$available=$_REQUEST['available'];
	if(addProducts($pname,$pdet,$price,$category,$available))
		$msg="<font color=green>Added</font>";
	else
			$msg="<font color=green> not Added</font>";
	$filename=$_FILES["file1"]["name"];
	//$file_tmp=$_FILES['filetoUpload']['']
	$file_tmp=$_FILES['file1']['tmp_name'];
	$path_parts=pathinfo($_FILES['file1']['name']);
	$extension=$path_parts['extension'];
	if(!($extension=="jpg"||$extension=="png"||$extension=="bmp"))
		die("file format is not correct");
	if($filename!="")
	{
		//$target_dir="~/image/";
		
		$newfilename=$id.".jpg";
		move_uploaded_file($file_tmp,"image/".$newfilename);
		
	}
	

		
}
?>

<html>

<style type="text/css">
	form{
		margin-top: 100px;
		font-style: italic;
		font-weight: bold;
	}
</style>
<center>
<body style="background-color: yellow">
	<form method="post" action=""  enctype="multipart/form-data" >
	new product id:<span id=span1 name=id>
		<?php
		
		echo $id;


		?>
	</span><br>
	product name:<input type=text size=10 name=pname><br><br>
		product del:<input type=text size=10 name=pdet><br><br>
			product price:<input type=text size=10 name=price><br><br>
			product categry:<input type="text" name="category"size=10><br><br>
			product available<input type="text" name="available"size=10><br><br>
			upload image:<input type="file" name="file1" id="filetoUpload">
				<input type=submit  name=submit value="add" style="color: red">
					<input type=reset value=Reset style="color: red"><br>
					<?php
					 echo $msg;?>

	</form>
</body>
</center>
</html> 