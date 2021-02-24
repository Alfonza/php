<?php
if(isset($_REQUEST['submit']))
{
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
		$pid=$_REQUEST['id'];
		$newfilename=$pid.".jpg";
		move_uploaded_file($file_tmp,"image/".$newfilename);
		die('uploaded');
	}
	else
		die('error');
/*if(($_FILES['filetoUpload']['name']!="")){
	$target_dir="images/";
	$file=$_FILES['filetoUpload']['name'];
	$filename=$_REQUEST['id'];
	$ext='jpg';
	$path_filename_ext=$target_dir.$filename.".".$ext;
	if(file_exists($path_filename_ext)){
		echo"sorry,file already exist";
	}
	else{
		move_uploaded_file($file,$path_filename_ext);
		echo"file uploaded";
	}
}*/
}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		select image to upload:
		image id:<input type="text" name="id"size=10><br>
		<input type="file" name="file1" id="filetoUpload">
		<input type="submit" value="UploadImage"name="submit">
	</form>

</body>
</html>