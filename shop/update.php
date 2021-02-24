<?php 
require('dbfunction.php');
$msg="";
$proddet=array("","","","");
if(isset($_REQUEST['show']))
{
	$id=$_REQUEST['pid'];
	echo "<br>".$id."<br>";
	if($id !="select")
	$proddet=getproductdetails($id);
else
	$msg="please select id";

}
if(isset($_REQUEST['update']))
{
	$pid=$_REQUEST['pid'];$pname=$_REQUEST['pname'];
	$pdet=$_REQUEST['pdet'];$price=$_REQUEST['price'];
	$catg=$_REQUEST['pdet'];$price=$_REQUEST['category'];
	$available=$_REQUEST['pdet'];$price=$_REQUEST['available'];

	if(updateProduct($pid,$pname,$pdet,$price,$catg,$available))
	{
		$msg="<font color=green>updated </font>";
		//clearform();
	}
	else
		$msg="<font color=red> not updated </font>";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form name="upd" method="get">
 	productID:<select name="pid"> 
 		<option value="select">Select</option>
 		

 		<?php
 		$idarray=getAllProductIds();
 		foreach ($idarray as $pid) {
 			if ($_REQUEST['pid']==$pid && $_REQUEST['show']) 
 				echo "<option selected>".$pid."</option>";
 			else
 				 			echo "<option>".$pid."</option>";
 		}
 		?>
 	</select>
 	<input type="submit" name="show" value="show">
 	<br>
 	name:<input type="text" name="pname" size=10 value='<?php echo $proddet[1];?>'><br>
 	details:<input type="text" name="pdet" size=10 value='<?php echo $proddet[2];?>'><br>
 	price:<input type="text" name="price" size=10 value='<?php echo $proddet[3];?>'><br>
 	category:<input type="text" name="category" size=10 value='<?php echo $proddet[4];?>'><br>
 	available:<input type="text" name="available" size=10 value='<?php echo $proddet[5];?>'><br>
 	<input type="submit" name="update" value="update">
 	<?php echo $msg; ?>
 </form>
 </body>
 </html>