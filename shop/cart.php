<?php
require('dbfunction.php');
$delete="";
?>

<html>
<head>
	<title>cart items</title>
</head>
<body>
<marquee height="10%" width="100%" bgcolor="red" direction='left'>
	<font size="7" color="blue">
	<b>CART ITEMS</b>
    </font>
</marquee>
<table border="1" align="center" style="line-height:25px;">
<?php
  $conn=connection();
   $sql="select * from cart";
  $result=mysqli_query($conn,$sql);
 if($result->num_rows>0)
 {

            echo "
            	<tr>
            		<th>sl.no</th>
            		<th>Product</th>
            		<th>Price</th>
            		<th>Quantity</th>
            		<th>Total</th>
            		<th>Action</th>
            	<tr>";
        while($row =$result->fetch_assoc())
      {
         echo "
         <tr>
         	<td>".$row["sl.no"]."</td>
         	<td>".$row["product"]."</td>
         	<td>".$row['price']."</td>
         	<td>".$row['quantity']."</td>
         	<td>".$row['total']."</td>
         </tr>";
         }
     }
?>
</table>
</body>
</html>