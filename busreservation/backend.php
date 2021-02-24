<?php
function connection()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";
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
//added
if($_GET['value']=='suggest')
{
	$conn=connection();
	$res1=array();
	if($_GET['from']!="")
	{
		$from = $_GET['from'];
	 	$sql="select depature from busroute where  `depature` LIKE '%".$from."%' ";
	 	$result=mysqli_query($conn,$sql);
	 	$i=0;
	 	while($row=mysqli_fetch_assoc($result))
	 	{
	    	if($row['depature']==$from)
	    	{
	    		$res1=array();
	    		break;
	    	}
	    	else
	    		$res1[$i++]=$row['depature'];
	    }
	}
	$res2=array();
	if($_GET['to']!="")
	{
		$to = $_GET['to'];
	 	$sql="select arival from busroute where  `arival` LIKE '%".$to."%' ";
	 	$result=mysqli_query($conn,$sql);
	 	$i=0;
	 	while($row=mysqli_fetch_assoc($result))
	 	{
	    	if($row['arival']==$to)
	    	{
	    		$res2=array();
	    		break;
	    	}
	    	else
	    		$res2[$i++]=$row['arival'];
	    }
	}
	$res=array($res1,$res2);
	$json=json_encode($res);
	echo $json;
    closeconnection($conn); 
}

//added
if($_GET['value']=='search'){
	$conn=connection();
	$from=$_GET['from'];
	$to=$_GET['to'];
	$date=$_GET['date'];
	//echo $date;
	$sql="select * from bus where routeid = (select routeid from busroute where depature = '".$from."' and arival ='".$to."')";

	$result=mysqli_query($conn,$sql);
	$res=array();
	$j=0;

	while($row=mysqli_fetch_assoc($result))
	{
		$res1=array();
		$i=0;
		$res1[$i++]=$row['busid'];
		//echo$row['busid'];
		$res1[$i++]=$row['busname'];
		$res1[$i++]=$row['seat no'];
		$res1[$i++]=$row['available service'];
		$res1[$i++]=$row['dtime'];
		$res1[$i++]=$row['atime'];
		$res1[$i++]=$row['routeid'];
		$res1[$i++]=$row['price'];
		$qry="select sum(seatno) from booking where busid='".$row['busid']."'and journeydate='".$date."'and status='booked'";
		$result1=mysqli_query($conn,$qry);
		$seat=mysqli_fetch_assoc($result1);
		//$row1=$seat['sum(seatno)'];
		//echo$res5['sum(seatno)'];
		$res1[$i++]=((int)$row['seat no'])-((int)$seat['sum(seatno)']);
		
		$qry1="select seatposition from booking where busid='".$row['busid']."'and journeydate='".$date."'and status='booked'";
		$result2=mysqli_query($conn,$qry1);

			$str="";
		while($seatposition=mysqli_fetch_assoc($result2)){
			$string=$seatposition['seatposition'];
			$str=",".$string;
				/*
				if($string[$m]==','){
					$seat=(int)substr($string, $n,$m-$n );
					$n=$m;
					$seats[$o++]=$seat;
				}
				$m++;
			}
					$seat=(int)substr($string, $n+1,strlen($string)-$n );
					$n=$m;
					$seats[$o++]=$seat;
									$res1[$i++]=$seats;*/
	
		}
		$str=$str.",";
		$res1[$i++]=$str;

		$res[$j++]=$res1;
	}
	
	
	$json=json_encode($res);
	echo $json;
}

if($_GET['value']=='checkout'){
	$conn=connection();
	$Bid = $_GET['Bid'];
	$Uid = $_GET['Uid'];
	$Tseats = $_GET['Tseats'];
	//$Sid = $_GET[''];
	$i=0;
	$res1=array();
	$sql="select max(ticketno) from booking";
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	$res1[$i++]=(int)$res['max(ticketno)'];

	$sql="select busname,routeid from bus where busid=".$Bid;
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	
	$res1[$i++]=$res['busname'];
	$Rid=$res['routeid'];
	$sql="select username from user where userid=".$Uid;
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	$res1[$i++]=$res["username"];

	$sql="select details from busroute where routeid=".$Rid;
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	$res1[$i++]=$res["details"];

	$sql="select address from user where userid=".$Uid;
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	$res1[$i++]=$res["address"];

	$sql="select seatno from booking where userid=".$Uid;
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	$res1[$i++]=(int)$res["seatno"];


	$sql="select * from food";
	$result=mysqli_query($conn,$sql);
	$food = array();
	$k=0;
	while($res=mysqli_fetch_assoc($result)){
	$food[$k++]=array($res["foodid"],$res["fname"],$res["fprice"]);
}
$res1[$i++]=$food;
	/*$sql="select servicename from service";
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_assoc($result);
	$res1[$i++]=$res["seatno"];*/
	$json=json_encode($res1);
	echo $json;


}

if($_GET['value']=="login")
{
	$conn=connection();
	$name=$_GET['name'];
	$pass=$_GET['pass'];
	$sql = "select userid,username,password from user where username='$name' and password='$pass'";
	$result1=mysqli_query($conn,$sql);
	$r=mysqli_fetch_assoc($result1);
	$userid=$r['userid'];
	echo $userid;
}
if($_GET['value']=='checkoutp')
{
	$i=1;
	$str=$_GET['str'];
	$conn=connection();
	$Bid=$_GET['Bid'];
	$Tseats=$_GET['Tseats'];
	$Tid=$_GET['Tid'];
	$Uid=$_GET['Uid'];
	$tprice=$_GET['tprice'];
	$status=$_GET['status'];
	$cdate=$_GET['cdate'];
	$cadate=$_GET['cadate'];
	$jdate=$_GET['jdate'];
	$foodid=$_GET['foodid'];


    $sql="select max(ticketno) from booking where 1";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $ticketno=(int)$row['max(ticketno)']+1;
   

	$slq="INSERT INTO `booking`(`busid`, `seatno`, `ticketno`, `userid`, `ticketprice`, `status`, `bookingdate`, `canceldate`, `journeydate`, `foodid`, `seatposition`) VALUES ('$Bid','$Tseats','$ticketno','$Uid','$tprice','$status','$cdate','$cadate','$jdate','$foodid','$str')";
	echo $slq;
    $result=mysqli_query($conn,$slq);	
}
if($_GET['value']=='signin')
{
	$conn=connection();
    $name=$_GET['name'];
    $email=$_GET['email'];
    $address=$_GET['adress'];
    $phone=$_GET['phone'];
    $password=$_GET['pass'];
    $atype="user";

    echo $name,$email,$address,$phone,$password;
    $sql="select max(userid) from user where 1";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $userid=(int)$row['max(userid)'];
    $userid++;
    $squ="insert into user values('$userid','$name','$email','$atype','$address','$phone','$password')";
    $result=mysqli_query($conn,$squ);
    echo $userid;	

}
if($_GET['value']=='uh'){
	$conn=connection();
	$Uid=$_GET['userid'];
	$sql="select * from booking where userid='".$Uid."' order by journeydate";
	$result=mysqli_query($conn,$sql);
	$j=0;
	$row=array();
	while($res=mysqli_fetch_assoc($result)){
		$res1=array();
		$i=0;
		$res1[$i++]=$res['busid'];
		$res1[$i++]=$res['seatno'];
		$res1[$i++]=$res['ticketno'];
		$res1[$i++]=$res['ticketprice'];
	    $res1[$i++]=$res['status'];
	    $res1[$i++]=$res['bookingdate'];
	    $res1[$i++]=$res['canceldate'];
	    $res1[$i++]=$res['journeydate'];
	    $row[$j++]=$res1;
	}
	$json=json_encode($row);
	echo $json;
}
if($_GET['value']=='deletebooking'){
	$conn=connection();
	$ticketno=$_GET['ticketno'];
	$sql="update booking set status='cancel' where ticketno='".$ticketno."'";
	$result1=mysqli_query($conn,$sql);
	$cmt="select busid,journeydate from booking where ticketno='".$ticketno."'";
	$result2=mysqli_query($conn,$cmt);
	$res=mysqli_fetch_assoc($result2);

	$busname="select busname from bus where busid='".$res['busid']."'";
	$buses=mysqli_query($conn,$busname);
	$bus=mysqli_fetch_assoc($buses);

	$qry="select userid from waiting where busid='".$res['busid']."'and journeydate='".$res['journeydate']."'";
	$result3=mysqli_query($conn,$qry);
	while($res1=mysqli_fetch_assoc($result3))
	{

		$ans="select username,email from user  where userid='".$res1['userid']."'";
		$result4=mysqli_query($conn,$ans);
		$res2=mysqli_fetch_assoc($result4);
		$email=$res2['email'];
		$msg = "hello ".$res2['username'].",\n Seats are available in ".$bus['busname']." for date ".$res['journeydate']." \nHurry up to book your tickets ";
		$msg=wordwrap($msg,70);
		mail("meetmeashwin@gmail.com","bus reservation",$msg);
	}
	$i=0;
	$row=array();
	$row[$i++]=$res2['email'];
	$json=json_encode($row);
	echo $json;
}
if($_GET['value']=="forget")
{
	$conn=connection();
	$name=$_GET['name'];
	$userid=$_GET['userid'];
	$email=$_GET['email'];
	$pass=$_GET['pass'];
	$repass=$_GET['repass'];
	$re="select username,userid,email from user where username='".$name."' and userid='".$userid."' and email='".$email."'";
	echo $re;
	$result1=mysqli_query($conn,$re);
	$row=mysqli_fetch_assoc($result1);
	if ($pass==$repass && $row['username']!="") 
	  {
		echo "yes";
		$sqle="update user set password='$pass' where userid='$userid'";
		echo $sqle;
		$result=mysqli_query($conn,$sqle);
	   }
	else
	{
		echo "no";
	}
		
}
if($_GET['value']=='addval'){
	$i=1;
	$str = "INSERT INTO `".$_GET['database']."` VALUES"; 
	$str=$str."('".$_GET['value0']."'";
	while(true)
	 {
		if(isset($_GET['value'.$i]))
		{
			$str=$str.",'".$_GET['value'.$i]."'";	
 			$i++;
		}
		else{
			$str=$str.")";
			break;
		}
		}
		$conn = connection();
		echo $str;
		$result1=mysqli_query($conn,$str);
	$row=mysqli_fetch_assoc($result1);
}
if($_GET['value']=='ui'){
	$conn=connection();
	$Uid=$_GET['userid'];
	$sql="select * from user where userid='".$Uid."'";
	$result=mysqli_query($conn,$sql);
	$j=0;
	$row=array();
	while($res=mysqli_fetch_assoc($result)){
		$res1=array();
		$i=0;
		$res1[$i++]=$res['userid'];
		$res1[$i++]=$res['username'];
		$res1[$i++]=$res['email'];
	    $res1[$i++]=$res['address'];
	    $res1[$i++]=$res['phoneno'];
	    $row[$j++]=$res1;
	}
	$json=json_encode($row);
	echo $json;
}
if($_GET['value']=='updateuser'){
	$conn=connection();
	$Uid=$_GET['Uid'];

	$sql="update user set ".$_GET['coloumn']."='".$_GET['input']."' where userid='".$Uid."'";
	$result=mysqli_query($conn,$sql);
	echo $sql;
}
if($_GET['value']=='notify'){
	$conn=connection();
	$Uid=$_GET['Uid'];
	$Busid=$_GET['busid'];
	$journeydate=$_GET['date'];

	$sql="insert into waiting (userid,busid,journeydate)value('".$Uid."','".$Busid."','".$journeydate."')";
	$result=mysqli_query($conn,$sql);
	echo $result;
}
//added
if($_GET['value']=='checking'){
	$conn=connection();
	$ticketno=$_GET['ticketno'];
	$password=$_GET['password'];
	$curdate=$_GET['curdate'];
	$sql="select userid from booking where `ticketno` LIKE '%".$ticketno."%'";
	$result=mysqli_query($conn,$sql);
	$res1=mysqli_fetch_assoc($result);
	if($res1!="")
	{
		$cmt="select password from user where userid='".$res1['userid']."'";
		echo $cmt;
		$result1=mysqli_query($conn,$cmt);
		$res2=mysqli_fetch_assoc($result1);
		if($res2['password']==$password)
		{
			$qry="update booking set status='cancel' where ticketno='".$ticketno."'";
			$res3=mysqli_query($conn,$qry);
			$final="update booking set canceldate='".$curdate."'where ticketno='".$ticketno."'";//added
			$res4=mysqli_query($conn,$final);
			echo("yes");
		}
		else{
			echo "no";
		}	
	}
	else{
		echo "no";
	}
}
if($_GET['value']=="bookingtable"){
	$conn=connection();
	$sql="select * from booking ";
	$result=mysqli_query($conn,$sql);
	$res=array();	
	$j=0;	
	while($row=mysqli_fetch_assoc($result))
	{
		$res1=array();
		$i=0;
		$res1[$i++]=$row['busid'];
		$res1[$i++]=$row['seatno'];
		$res1[$i++]=$row['ticketno'];
		$res1[$i++]=$row['userid'];
		$res1[$i++]=$row['ticketprice'];
		$res1[$i++]=$row['status'];
		$res1[$i++]=$row['bookingdate'];
		$res1[$i++]=$row['canceldate'];
		$res1[$i++]=$row['journeydate'];
		$res1[$i++]=$row['seatposition'];
		$res1[$i++]=$row['foodid'];
		$res[$j++]=$res1;
	}
	$json=json_encode($res);
	echo $json;
}
if($_GET['value']=="usertable"){
	$conn=connection();
	$sql="select * from user ";
	$result=mysqli_query($conn,$sql);
	$res=array();	
	$j=0;	
	while($row=mysqli_fetch_assoc($result))
	{
		$res1=array();
		$i=0;
		$res1[$i++]=$row['userid'];
		$res1[$i++]=$row['username'];
		$res1[$i++]=$row['email'];
		$res1[$i++]=$row['atype'];
		$res1[$i++]=$row['address'];
		$res1[$i++]=$row['phoneno'];
		$res1[$i++]=$row['password'];
		$res[$j++]=$res1;
	}
	$json=json_encode($res);
	echo $json;
}
if($_GET['value']=="bustable"){
	$conn=connection();
	$sql="select * from bus ";
	$result=mysqli_query($conn,$sql);
	$res=array();	
	$j=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$res1=array();
		$i=0;
		$res1[$i++]=$row['busid'];
		$res1[$i++]=$row['busname'];
		$res1[$i++]=$row['seat no'];
		$res1[$i++]=$row['available service'];
		$res1[$i++]=$row['dtime'];
		$res1[$i++]=$row['atime'];
		$res1[$i++]=$row['price'];
		$res1[$i++]=$row['routeid'];
		$res[$j++]=$res1;
	}
	$json=json_encode($res);
	echo $json;
}
if($_GET['value']=='update'){
	$conn=connection();
	$sql="update ".$_GET['table']." set ".$_GET['coloumn']." = '".$_GET['input']."' where ".$_GET['idname']." = ".$_GET['id'];
	$result=mysqli_query($conn,$sql);
	echo $sql;
}
if($_GET['value']=="foodtable"){
	$conn=connection();
	$sql="select * from food ";
	$result=mysqli_query($conn,$sql);
	$res=array();	
	$j=0;	
	while($row=mysqli_fetch_assoc($result))
	{
		$res1=array();
		$i=0;
		$res1[$i++]=$row['foodid'];
		$res1[$i++]=$row['fname'];
		$res1[$i++]=$row['fprice'];
		$res[$j++]=$res1;
	}
	$json=json_encode($res);
	echo $json;
}
if($_GET['value']=="delete"){
	$conn=connection();
	$sql="delete from ".$_GET['table']." where ".$_GET['coloumn']." = ".$_GET['val'] ;
	echo $sql;
	$result=mysqli_query($conn,$sql);
}
if($_GET['value']=="routetable"){
	$conn=connection();
	$sql="select * from busroute ";
	$result=mysqli_query($conn,$sql);
	$res=array();	
	$j=0;	
	while($row=mysqli_fetch_assoc($result))
	{
		$res1=array();
		$i=0;
		$res1[$i++]=$row['routeid'];
		$res1[$i++]=$row['depature'];
		$res1[$i++]=$row['arival'];
		$res1[$i++]=$row['details'];
		$res[$j++]=$res1;
	}
	$json=json_encode($res);
	echo $json;
}
//added
if($_GET['value']=="miss")
{
	$conn=connection();
	$ticketno=$_GET['ticketno'];
	$password=$_GET['password'];
	$curdatey=$_GET['curdatey'];
	$curdatem=$_GET['curdatem'];
	$curdated=$_GET['curdated'];
	$curhour=$_GET['curhour'];
	$curmin=$_GET['curmin'];
	$sql="select userid,journeydate,busid from booking where  `ticketno` ='".$ticketno."'";
	$result=mysqli_query($conn,$sql);
	$res1=mysqli_fetch_assoc($result);
	if($res1!="")
	{	
		$value=array();
		$i=0;
		$value[$i++]=$res1['userid'];
		$cmt="select password from user where userid='".$res1['userid']."'";
		$result1=mysqli_query($conn,$cmt);
		$res2=mysqli_fetch_assoc($result1);
		if($res2['password']==$password)
		{			
			$sqli="select dtime from bus where busid='".$res1['busid']."'";
			$result2=mysqli_query($conn,$sqli);
			$res3=mysqli_fetch_assoc($result2);
			$time=$res3['dtime'];
			//$value[$i++]=$time;
			$dh=((int)substr($time, 0,2));
			$dm=((int)substr($time, 3,2));
			$row=$res1['journeydate'];
			$value[$i++]=$row;
			$jdatey=((int)substr($row,0,4));
			$jdatem=((int)substr($row,5,2));
			$jdated=((int)substr($row,8,2));
			if($curdatey==$jdatey )
			{
				if($curdatem==$jdatem)
				{
					if($curdated==$jdated)
					{		
							if($dh==$curhour-1)
							{
								if($dm>=$curmin)
								{
									$qrys="select routeid from bus where busid='".$res1['busid']."'";
									$result3=mysqli_query($conn,$qrys);
									$res4=mysqli_fetch_assoc($result3);
									//echo$res4['routeid'];
									$cmnts="select busid from bus where routeid='".$res4['routeid']."'order by dtime";
									$result4=mysqli_query($conn,$cmnts);
									//$res5=mysqli_fetch_assoc($result4);
									while($row=mysqli_fetch_assoc($result4))
									{
										//echo$row['busid'];									
										if($row['busid']==$res1['busid'])
										{
											$row1=mysqli_fetch_assoc($result4);
											$nextbusid=$row1['busid'];
											$value[$i++]=$nextbusid;
											//echo$nextbusid;
											$sq="select sum(seatno) from booking where busid='".$nextbusid."'";
											$result5=mysqli_query($conn,$sq);
											$res5=mysqli_fetch_assoc($result5);
											//echo$res5['sum(seatno)'];
											$qy="SELECT `seat no` FROM `bus` WHERE `busid`='".$nextbusid."'";
											$result6=mysqli_query($conn,$qy);
											$res6=mysqli_fetch_assoc($result6);
											$row1=$res6['seat no'];
											$freeseat=((int)$res6['seat no'])-((int)$res5['sum(seatno)']);
											if($freeseat!=0)
											{
												$cms="select busname,dtime from bus where busid='".$nextbusid."'";
												$result7=mysqli_query($conn,$cms);
												$res7=mysqli_fetch_assoc($result7);
												$row2=$res7['busname'];
												$row3=$res7['dtime'];
												//$value=array();
												//$i=0;
												$value[$i++]=$row1;
												$value[$i++]=$row2;
												$value[$i++]=$row3;
												//echo $value;

												$json=json_encode($value);
												echo $json;

											}
											else
											{

											}
										}
									}
								}
							}
							else if($dh==$curhour)
							{
							}
							else
							{
								echo("no1");

							}
					}
				}


			}
			
		}
		else
		{
			echo("no");
		}
	}
	else
	{
		echo("no");
	}
	


}
if($_GET['value']=="need"){
	$conn=connection();
	$uid=$_GET['Uid'];
	$busid=$_GET['busid'];
	$journeydate=$_GET['journeydate'];
	$seatno=$_GET['seatno'];
	$ticketno=$_GET['ticketno'];
	$qu="update booking set status='reshedule' where ticketno='".$ticketno."'";
	$result=mysqli_query($conn,$qu);
	$sql="select max(ticketno) from booking";
	$result1=mysqli_query($conn,$sql);
	$res1=mysqli_fetch_assoc($result1);
	$qry="select price from bus where busid='".$busid."'";
	$result2=mysqli_query($conn,$qry);
	$res2=mysqli_fetch_assoc($result2);
	$cmt="select seatposition from booking where busid='".$busid."'and journeydate='".$journeydate."'";
	$result3=mysqli_query($conn,$cmt);
	//$position=array();

		$index=0;

		$array=array();
	while($row=mysqli_fetch_assoc($result3)){
		$row1=$row['seatposition'];
		$j=0;

		for($i=0;$i<strlen($row1);$i++)
		{
			if($row1[$i]==",")
			{
				$seat=substr($row1,$j,$i);
				$j=$j+(int)strlen($seat)+1;
				$seat=(int)$seat;
				$array[$index++]=$seat;
			}
		}

				$seat=(int)substr($row1,$j,strlen($row1));
				$array[$index++]=$seat;
	}

	for($k=1;$k<=(int)$seatno;$k++){
		$flag=0;
		foreach ($array as $seat) {
			if($seat==$k)
				$flag=1;
		}
		if($flag==0){
			//book seat on this seat go to checkout1
		}
	}
}

if($_GET['value']=='checkacctype'){
	$conn=connection();
	$session = $_GET['session'];
	$sql="select atype from user where `userid` = '".$session."'";
	$result=mysqli_query($conn,$sql);
	if($result){
		$row=mysqli_fetch_assoc($result);
		if($row['atype']=='admin')
			echo "yes";
		else
			echo "no";
	}
	else
		echo "no";
}

if($_GET['value']=='checksession'){
	$conn=connection();
	$session = $_GET['session'];
	$sql="select username from user where `userid` = '".$session."'";
	$result=mysqli_query($conn,$sql);
	if($result){
		$row=mysqli_fetch_assoc($result);
		if($row['username']!="")
			echo $row['username'];
		else
			echo "no";
	}
	else
		echo "no";
}
	?>