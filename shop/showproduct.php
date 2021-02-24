

<?php
require('dbfunction.php');
session_start();
$productids=array();
$tprice="";
/*if(!isset($_SESSION['id']))
header("location:error.php");*/
?>
<html>
<style type="text/css">
  th,td{
    
    border:3px solid black;
    padding: 5px;
    text-align: center;
}
tr:nth-child(even){
  background-color: white;
}
  th{
    height: 50px;
  }

</style>
<center>
<body style="background-color: yellow">
  <a href="logout.php">logout</a>
<form name=show method=post action="" enctype="multipart/form-data">
Category:
<select name=category onchange="this.form.submit()">
<option> Choose</option>
<?php
$catgs=getProductCatg();
$catg="";
if(isset($_REQUEST['category']))
    $catg=$_REQUEST['category'];
foreach ($catgs as $value)
{
  if($catg==$value)
          echo "<option selected>".$value."</option>";
      else
         echo "<option >".$value."</option>";
}
?>
</select><br><br>
keyword
<input type="text" name="keyword">
<br><br>
range 
<input type="number" name="min" placeholder="min">
<input type="number" name="max" placeholder="max">
<button style="color: red" onclick="this.form.submit()">SHOW</button>
<br><br>
<table border=1 bgcolor=purple width="50%" >
  

<?php
$msg="";
$catg="";
$pdets=array();
if(isset($_REQUEST['category'])){
    if($_REQUEST['category'])
       {
        echo "<tr bgcolor=pink>
        <th>IMAGE</th>
        <th>ID</th>
        <th>NAME</th>
        <th>DETAILS</th>
        <th>PRICE</th>
        <th>SELECT</th>
        <th>NOI</th><th>AVAILABLE</th>
        <th>CART</th>
        <th>IMAGE</th>
        </tr>";
        $catg=null;
        $keyword=null;
        $min=null;
        $max=null;
        if(isset($_REQUEST['category']))
          if($_REQUEST['category']!="Choose")
             $catg=$_REQUEST['category'];
        $pdets=getProductsByCatg($catg,$keyword,$min,$max);
        $productids=array();
        $i=0;
        foreach ($pdets  as $pdet) 
        {
          if(isset($_REQUEST["keyword"])){
            $keyword=$_REQUEST["keyword"];
            $length = strlen($keyword);
            if(strncmp($pdet[1],$keyword,$length)!=0){
              continue;
            }
          }
          $filesrc="image/$pdet[0]".".jpg";
          $str="<tr><td><img height=100 width=100 src=$filesrc><td>";
          $str=$str."<td>$pdet[0]</td>";
          $str=$str."<td>$pdet[1]</td>";
          $str=$str."<td>$pdet[2]</td>";
          $str=$str."<td>$pdet[3]</td>";
    $str=$str."<td><input type=checkbox name=ch$pdet[0]></td>";
    $str=$str."<td><select name=noi$pdet[0]>";
    for($i=0;$i<=$pdet[4];$i++){
      $str=$str."<option>".$i."</option>";
    }
    $str=$str."</select></td>";
$str=$str."<td>$pdet[4]</td>";
 $str=$str."<td><input type=checkbox name=ch$pdet[0]></td></tr>";
          echo $str;
          $productids[$pdet[0]]=$pdet[3]; 
        }
        $_SESSION['pids']=$productids;
       }
     }
     else
       $msg="Please select the category";
       echo $msg;
?>
</table><br>
<input type="submit" value="Show Amount" name="tprice"style="color:red">
</br>
<?php
//$pids=$_SESSION['pids'];
//print_r($pids);
?>
<table  style="background-color: yellow"  border=1>
<?php
if(isset($_REQUEST['tprice'])){
 // die('test');
$pids=$_SESSION['pids'];
$tprice=0;
//die(print_r($pids));
foreach ($pids as $id => $price) {

  $chname="ch".$id;
  if(isset($_REQUEST[$chname]))
  {
    //die('test1');
    $pqty="noi".$id;
    $noqty=$_REQUEST[$pqty];
    $tprice=$noqty*$price+$tprice;
    echo "<tr><td>$id</td><td>$noqty</td><td>$price</td></tr>";
}
}
}
?>
</table>
<span><?php echo$tprice;?> </span>

</form>
</body>
</center>
</html>