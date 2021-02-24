<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
body{
	position: relative;
	height: 100%;
    background-color: #dcdcdcc7;
}
#box{    
	position: relative;
    background-color: white;
    width: 623px;
    left: 415px;
    height: 718px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    top: 100px;
    font-family: Roboto,sans-serif;
}
	.selection{
		width: 400px;
		height: 100px;
		background-color: yellow;
		position: relative;
		top: 20px;
		border-color: white;
		margin-bottom: 20px;
		display: none;
	}
	.text{
		font-style: inherit;
		font-size: 18px;
		color: #000000bf;
		margin-bottom: 5px;
		font-weight: 500;
	}
	#head{

    height: 255px;
    background-color: #673ab7;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.20);
    position: absolute;
    top: -5px;
    left: -10px;
    width: 100%;
	}
	#layout{
	    position: relative;
    top: 59px;
    left: 30px;
}
#service input{
	margin-right: 100px;
	margin-left: 10px;
	height: 18px;
	width: 18px;
	position: relative;
	top: 5px;
}
.ans{
position: relative;
    top: -22px;
    margin-bottom: 5px;
    left: 250px;
}
#service{
	position: relative;
	top:25px;
	font-style: inherit;
	margin-right: 20px;
	left: 50px;
	color: #000000bf;
	font-weight: 500;
}
#tp{
	 position: relative;
	top: 40px;
}
</style>
<body style="position: absolute;width: 100%;height: 100vh; top: 0px; left: 0px;">
	<div id=head></div>		
	<div id=box>
		<div id="layout">
		<div id="heading" style="font-weight: 400;color: #000000a6;font-size: 28px;margin-bottom: 36px;">CONFIRMATION</div>
		<div class="text">
			Tickteid: 
			<div id="Tid" class="ans"></div>
		</div>
		<div class="text">
			Busname:
			<div id="Bname"class="ans"></div>
		</div>
		<div class="text">
			Username:<div id="Uname"class="ans"></div>
		</div>
		<div class="text">
			Route details: <div id="route"class="ans"></div>
		</div>		
		<div class="text">
			Address:<div id="Uaddress"class="ans"></div>
		</div>
		<div class="text">
			Total no:of seats:<div id="Tseats"class="ans"></div>
		</div>
			<div id="avail" style="font-style: inherit;font-size: 20px; color: #000000bf;"> Avilable service:</div>
			
		<div id="service">Meals<input type="checkbox" class="cb"name="" onclick="myservice(1)">
												
									PA<input type="checkbox" class="cb"name="" onclick="myservice(2)">
									RF<input type="checkbox"class="cb" name="" onclick="myservice(3)">
									<select id="sc" style="display: none">
										<option>choose</option>
									</select><BR>
						
								</div>
								<div id="tp">
									total price:<div id="tprice"></div>
				</div>
		</div>
								<button onclick="showprice()" style="position: absolute;top: 75%;right: 50px;">CHECK OUT</button>

		
	</div>
<script type="text/javascript">
	var foodid=0;
	var session=localStorage.getItem("blogin");
	/*if(session !=null && session!="-1" && session!=-1)
	{
	alert("unauthorized login, please login ");
	window.location.href="http://localhost/busreservation/home.php";
}*/
	var Bid=localStorage.getItem('busid');
	var Uid=Number(session);
	var Tseatnos=Number(localStorage.getItem('selectedseatnumber'));
	var selectedseats=localStorage.getItem('selectedseats'); 
    var selectedseats = selectedseats.replace(/"/g,"");
    selectedseats=selectedseats.replace('[',"");
    selectedseats=selectedseats.replace(']',"");
	var tprice=Number(localStorage.getItem('totalcost'));
	document.getElementById('tprice').innerHTML=tprice;
	var jdate=localStorage.getItem('jdate');
 var cadate='0000:00:00';
		var d = new Date();
		var cdate=d.toISOString().slice(0,10);

		var check= new XMLHttpRequest();
		check.onreadystatechange = function()	
		{
			if (check.readyState == 4 && check.status == 200)
			{
				console.log(check.responseText);
				console.log(check.responseText);
				var data=JSON.parse(check.responseText);
				//console.log(data);
				document.getElementById("Tid").innerHTML=data[0];
				document.getElementById("Bname").innerHTML=data[1];
				document.getElementById("Uname").innerHTML=data[2];
				document.getElementById("route").innerHTML=data[3];
				document.getElementById("Uaddress").innerHTML=data[4];
				document.getElementById("Tseats").innerHTML=Tseatnos;
				for (var k=0;k<data[6].length;k++) {
					var ele=document.createElement("option");
					ele.innerHTML=data[6][k][1];
					ele.onclick=function(){
						var foodname=this.innerHTML;
						for(var k=0;k<data[6].length;k++){
							if(data[6][k][1]==foodname){
								foodid=data[6][k][0];
								break;
							}
						}
					}
					document.getElementById("sc").appendChild(ele);
				}
			
			}
		}

		check.open("GET","backend.php?value=checkout&Bid="+Bid+"&Uid="+Uid+"&Tseats="+Tseatnos,true);
		check.send();
		/*function myservice(check){	
			var box=document.getElementsByClassName("cb")[check];
			if(check==1){
				if(box.checked==true){
					document.getElementById("selection").style.display="display";

				}
			}
		}*/
		function myservice(check){
			var box=document.getElementsByClassName("cb")[check-1];
			if(check==1){
				if(box.checked==true){
					document.getElementById("sc").style.display="block";
				
				}
				else{
					document.getElementById("sc").style.display="none";
			}
			}
			
			if(check==2){
				if(box.checked==true){
					var length=Tseats.length;
				var price=tprice+1000;
				document.getElementById("tprice").innerHTML=price;
				}
				else{
					var length=Tseats.length;
				var price=tprice;
				document.getElementById("tprice").innerHTML=price;
				}
			}
		}	
	function showprice()
	{
        var status='booked';
	 var Tid=document.getElementById('Tid').innerHTML;
		var Bname=document.getElementById('Bname').innerHTML;
		var Uname=document.getElementById('Uname').innerHTML;
		var route=document.getElementById('route').innerHTML;
		var Uaddress=document.getElementById('Uaddress').innerHTML;
		var Tseat=document.getElementById('Tseats').innerHTML;
		console.log(Bname,Tid,Uname,route,Uaddress,Tseats);
		var check= new XMLHttpRequest();
		check.onreadystatechange = function()
		{
			if (check.readyState == 4 && check.status == 200)
			{				console.log(check.responseText);
			alert("congratulations, seats have been booked");
			window.location.href="home.php";				
			}
		}
		console.log(selectedseats);
		check.open("GET","backend.php?value=checkoutp&Bid="+Bid+"&Tseats="+Tseatnos+"&Tid="+Tid+"&Uid="+Uid+"&tprice="+tprice+"&status="+status+"&cdate="+cdate+"&cadate="+cadate+"&jdate="+jdate+"&foodid="+foodid+"&str="+selectedseats,true);
		check.send();
	}

	

</script>
</body>
</html>