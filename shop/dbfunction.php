<?php

function connection()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
    die("Connection failed");
}
return $conn;
}
function closeconnection($conn)
{
  mysqli_close($conn);
}
function get_products()
{
  $conn=connection();
  $sql="select pid,pname,pdet,price from product1";
  $result=mysqli_query($conn,$sql);
  closeconnection($conn);
  $products=array();$i=0;
  while($row=mysql_fetch_assoc($result))
  {   $pid=$row['pid'];
      $pname=$row['pname'];
      $pdet=$row['pdet'];
      $price=$row['price'];

      $products[$i]=array($pid,$pname,$pdet,$price);

      $i++;
  }
  closeconnection($conn);
  return $products;   
}
function getNewProductid()
{
  $conn=connection();
    $sql="select max(pid) as maxid from product1";
    $result=mysqli_query($conn,$sql);
    $pid=1;
    if(mysqli_num_rows($result))
    {
      if($row=mysqli_fetch_assoc($result))
        $pid=$row['maxid']+1;
    }    
 
   closeconnection($conn);
    return $pid;
}
function addProducts($pname,$pdet,$price,$category,$available)
{
  $conn=connection();
    $newid=getNewProductid();
    $sql="insert into product1 values('$newid','$pname','$pdet','$price','$category','$available')";
   // echo "<br>".$sql."<br>";
    $nor=mysqli_query($conn,$sql);

  closeconnection($conn);
  if($nor>0)
    return true;
  else
    return false;
}
function getAllProductIds()
{

   $conn=connection();
   $sql="select pid from product1";
  $result=mysqli_query($conn,$sql);  
  $idarray=array();$i=0;
  while($row=mysqli_fetch_assoc($result))
  {         
      $idarray[$i]=$row['pid'];
      $i++;
  }
   closeconnection($conn);
   return $idarray;
}

function getProductDetails($pid)
{
  $conn=connection();
  $sql="select pid,pname,pdet,price from product1 where pid='$pid'";
  //echo "<br>$sql<br>";
  $result=mysqli_query($conn,$sql);  
  $proddet=array();
  if($row=mysqli_fetch_assoc($result))
  {         
      $proddet[0]=$row['pid'];
      $proddet[1]=$row['pname'];
      $proddet[2]=$row['pdet'];
      $proddet[3]=$row['price'];
  }
   closeconnection($conn);
   return $proddet;
}
function updateProduct($pid,$pname,$pdet,$price,$catg,$available)
{
   $conn=connection();
   $sql="update product1 set pname='$pname',pdet='$pdet',price='$price',category='$catg',available='$available' where pid='$pid'";
   //echo "<br>$sql<br>";
   $nor=mysqli_query($conn,$sql);
   closeconnection($conn);
   if($nor>0)
     return true;
    else
     return false;
   
}
function getProductCatg()
{
  $conn=connection();
    $sql="select distinct category from product1";
    $result=mysqli_query($conn,$sql);
    $catgs=array();$i=0;
    while($row=mysqli_fetch_assoc($result))
    {
      $catgs[$i++]=$row['category'] ;
    }
  closeconnection($conn);
  return $catgs;
}
function getProductsByCatg($catg=null,$keyword=null,$min=null,$max=null)
{
  $conn=connection();
  if($catg!=null || $keyword!=null || $min!=null || $max!=null)
  {
  $condstr="where ";
  if($catg!=null)
    $condstr=$condstr." category='".$catg."' and ";
  if($keyword!=null)
    $condstr=$condstr." `pname` LIKE '%".$keyword."%' and ";
  if($min!=null )
    $condstr=$condstr." price <='".$min."' and ";
   if($max!=null)
    $condstr=$condstr." price >='".$max."' and ";
  
    $condstr=$condstr." 1";
  $sql="SELECT `pid`, `pname`, `pdet`, `price`, `category`, `available` FROM `product1`".$condstr ;
}
else
  $sql="select pid,pname,pdet,price,available from product1";


    
    $result=mysqli_query($conn,$sql);
    $pdets=array();$i=0;
    while($row=mysqli_fetch_assoc($result))
    {
      $pdets[$i++]=array(
      $row['pid'],$row['pname'],$row['pdet'],$row['price'],$row['available']) ;
      //$i++;
    }
  closeconnection($conn);
  return $pdets;
}
function addAccount($id,$pwd,$atype,$A)
  {
    $conn=connection();
    
    $sql="insert into useraccount values('$id','$pwd','$atype','$A')";
    $nor=mysqli_query($conn,$sql);

    closeconnection($conn);
    if ($nor>0) 
    {
      return true;

    }
    else
      return false;
  }


  function forgot($id,$A,$cpwd1)
  {
    $conn=connection();
    $sql="update useraccount set pwd='$cpwd1' where id='$id' && A='$A'";

    $nor=mysqli_query($conn,$sql);

    closeconnection($conn);

    if ($nor>0) 
    {
      return true;

    }
    else
      return false;
  }

  function check($id)
  {
    $conn=connection(); 
  $sql="SELECT id from useraccount";
  $result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0)
   {
    while ($row=mysqli_fetch_assoc($result)) 
    {
      
      if ($row['id']==$id) 
      {
        $flag=true;
        return $flag;
        break;
      }

    }
  
  }

    closeconnection($conn);
    
  }
function updatePass($id,$pwd,$cpwd1)
  {

    $conn=connection();
    $sql="update useraccount set pwd='$cpwd1' where id='$id'";

    $nor=mysqli_query($conn,$sql);

    closeconnection($conn);

    if ($nor>0) 
    {
      return true;

    }
    else
      return false;
    
  }
function check_Account($id,$pwd)
{
  $conn=connection();
$sql="select id,pwd,atype from useraccount ";
$result=mysqli_query($conn,$sql);
$flag=false;
$atype="";
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    //echo $row['id']."---".$row['pwd']."---".$row['atype'];
    //echo"<br>";
        if($row['id']==$id  && $row['pwd']==$pwd)
        {
          $atype=$row['atype'];
          break;
        }
  }

}

  //echo "no user data present.";
  closeconnection($conn);
    return $atype;
   
}
function checkadmin($id,$pwd)
{
  $conn=connection();
  $sql="select id,pwd,atype from useraccount where atype='admin'";
  $result=mysqli_query($conn,$sql);
  $flag=false;
  if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    //echo $row['id']."---".$row['pwd']."---".$row['atype'];
    //echo"<br>";
        if($row['id']==$id && $row['pwd']==$pwd)
        {
          $flag=true;
          break;
        }
  }

}
closeconnection($conn);
return $flag;
}

?>