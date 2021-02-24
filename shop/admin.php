<?php

session_start();
if(!isset($_SESSION['id']))
	header('location: error.php');
$id=$_SESSION['id'];








?>
<?php
require('dbfunction.php');

$productids=array();
$tdelete="";
$tprice="";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href=logout.php>logout</a>
<form name="show" method="get" action="">

	categry:
	<select name=categry onchange="this.form.submit()">
		<option>choose</option>


		<?php

			$catgs=getProductCatg();
			$categry="";
			if(isset($_REQUEST['categry']))
				$categry=$_REQUEST['categry'];
			foreach ($catgs as $value)
			{
				if($categry==$value)
					echo "<option selected>".$value."</option>";
				else	
					echo "<option>".$value."</option>";
			}
		?>
		</select><br>
  		<table border=1 bgcolor=cycan>
  			<tr bgcolor=pink>
  				<td>ID</td>
  				<td>Name</td>
  				<td>Details</td>
  				<td>Price</td>
  				<td>Delete</td>
  			<td>Edit</td>
  		
		<?php
		$msg="";
		$categry="";
		$pdets=array();
			if(isset($_REQUEST['categry']))
				if($_REQUEST['categry']!='choose')
				{
					//echo "<tr bgcolor=pink><td>name>/td><td>"
					$categry=$_REQUEST['categry'];
					$catg=null;
       				$keyword=null;
       				$min=null;
        			$max=null;
					$pdets=getProductsByCatg($catg,$keyword,$min,$max);
					
					$productids=array();$i=0;
					foreach ($pdets as $pdet) 
					{
						$str="<tr><td>$pdet[0]</td>";
						$str=$str."<td>$pdet[1]</td>";
						$str=$str."<td>$pdet[2]</td>";
						$str=$str."<td>$pdet[3]</td>";
						
						$str=$str."<td><a href=delete.php>delete</a></td></td>";
						$str=$str."<td><a href=update.php>Update</a></td></tr>";
						echo $str;
						$productids[$pdet[0]]=$pdet[3];
						$_SESSION['pids']=$productids;
					}
				}
				else
					$msg="please select the category";
  					echo $msg;


		?>
</table></br>

<button><a href="addprd.php">add</a></button>
</br>	

<span><?php echo $tprice ?></span>
</form>	
</body>
</html> 

