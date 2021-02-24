<?php
 
    if(isset($_POST['upload'])){
        $maxsize=5;
        $format=array('image/jpeg');
    if($_FILES['fileupload']['size']>=$maxsize){
        $error_1='File Size too large';
        echo '<script>alert("'.$error_1.'")</script>';
    }
    elseif($_FILES['fileupload']['size']==0){
        $error_2='Invalid File';
        echo '<script>alert("'.$error_2.'")</script>';
    }
    elseif(!in_array($_FILES['fileupload']['type'],$format)){
        $error_3='Format Not Supported.Only .jpeg files are accepted';
        echo '<script>alert("'.$error_3.'")</script>';
        }

        else{
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
            if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)){ 
            echo "The file ". basename($_FILES["fileupload"]["name"]). " has been uploaded.";
            }
            else{
                echo "sorry";
                }
            }
    }




?>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
<label>Upload An Image</label>
<input type="file" name="fileupload" >
<input type="submit" name="upload">
</form>
</body>
</html>