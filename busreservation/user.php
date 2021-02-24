<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
.card div{
	position: relative;
	top: 5px;
	left: 5px;
}
.card{
	background-color: #1514151c;
height: 85px;
width: 700px;
top: 155px;
position: relative;
left: 30px;
margin-top: 14px;
border: 2px solid #d9d9d9;
}
#username,#email,#address,#phoneno
{
	position: relative;
top: -25px;
left: 186px;
font-size: 18px;
color: #201f1fbd;
font-family: sans-serif;
font-weight: 500;
}
#username input,#email input,#address input,#phoneno input
{
	border-right: none;
	border-left: none;
	border-top: none; 
	border-bottom: 2px solid #6736bd;
}
table,td,th{
	border:1px solid black;
}
	#sidebar{
		height: 100%;
		width: 20%;
		top: 0px;
		left: 0px;
		position: absolute;
		background-color: yellow;
	}
	#tabbuttons{
		width: 20%;
		height: 60%;
		bottom: 0px;
		position: fixed;
		top: 275px;
	}
	button{
		position: relative;
		width: 20%;
		margin-bottom: 2px;
	}
	#icon{
		    width: 200px;
    background-color: #6736bd;
    height: 200px;
    position: relative;
    border-radius: 50%;
    left: 55px;
    top: 48px;
    font-size: 50px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.25);
	}
	#content{
		width: 80%;
		right: 0px;
		position: absolute;
		height: 100%;
		background-color: red;
		top: 0px;
	}
	#tb{
		position: relative;
    	top: 28px;
    	width: 497%;
	}
	#bb{
		position: relative;
    top: 53px;
    width: 496%;
    right: 0px;
}
	.cards{
width: 645px;
height: 324px;
background-color: white;
position: relative;
top: 169px;
border-color: white;
margin-bottom: 100px;
left: 94px;
	}
	#sidebar{
		height: 100%;
		width: 307px;
		top: 0px;
		left: 0px;
		position: absolute;
		background-color: white;
	}
.title{
	font-size: 18px;
font-family: sans-serif;
font-weight: 500;
color: #201f1fbd;
}
	#tabbuttons button{
    position: relative;
    width: 279px;
    height: 52px;
    left: 17px;
    top: 85px;
    margin-bottom: 2px;
    border: none;
	font-size: 18px;
	}
	#tabbuttons button:hover{
		background-color: #6736bd;
		color: white;
		    position: relative;
    }
    #content #tablecontent
    {
    	width: 100%;
height: auto;
position: relative;
top: 172px;
border-top: 1px solid #cacaca;
    }
	#content{
width: 841px;
right: 0px;
position: absolute;
height: 100%;
background-color: white;
top: 0px;
border-left: 1px solid #31313142;
left: 307px;
	}
	label{
		position: relative;
left: 43px;
top: 71px;
font-size: 35px;
font-family: sans-serif;
color: #6736bd;
	}
	hr{
		position: relative;
top: 89px;
border-color: #cacaca;
	}
#logout{
		top: 6px;
left: 1105px;
width: 78px;
height: 33px;
font-size: 15px;
font-weight: 500;
padding-bottom: 2px;
border: none;
background-color: #6736bd;
color: white;
	}
	#home{
top: 6px;
left: 944px;
width: 78px;
height: 33px;
font-size: 15px;
font-weight: 500;
padding-bottom: 2px;
border: none;
background-color: #6736bd;
color: white;
	}
	#texta
	{
		    position: relative;
    left: 110px;
    top: -133px;
    font-weight: bold;
    font-size: 126px;
    color: white;
}
	}
	#line
	{
		    width: 283px;
    height: 0.5px;
    background-color: #90909040;
    top:  281px;
    left: 15px;
    position: absolute;
	}

table button
{
	color: white;
    height: 29px;
    width: 76px;
    position: relative;
    top: 2px;
    border: none;
    background-color: #6736bd;
    color: white;
    margin-left: 6px;
    margin-right: 6px;
}
	#container {
position: absolute;
top: 67px;
left: 43px;
width: 1150px;
height: 90%;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.25);
}
#line{width: 283px;
height: 0.5px;
background-color: #90909040;
top: 281px;
left: 15px;
position: absolute;}
table,td,th{
	border:none; 
	overflow: auto;
}
th{
	background-color: #6736bd;
color: white;
font-weight: 500;
}

	table {
border-collapse: collapse;
width: 760px;
position: relative;
top: 30px;
left: 30px;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.25);
}

th, td {
	overflow: auto;
  text-align: center;
  padding: 8px;
  font-size: 15px;
}
td input{
	overflow: auto;
	width: 50px;
	border-bottom: 2px solid #6736bd;
	border-left: none;
	border-top: none;
	border-right: none;
	text-align: center;
}
tr:nth-child(even) {background-color: white;}
tr:nth-child(odd) {background-color: #ececec;}

</style>
</style>
<body style="font-family: sans-serif;">
	<button id="logout" onclick="localStorage.setItem('blogin',-1);window.location.href='home.php'">Logout</button>
	<button id="home" onclick="window.location.href='home.php'">home</button><br>
	<div id="container">
	<div id="sidebar">
		<div id="icon"></div>
		<div id="line"></div>
		<div id="texta">U</div>
		<div id="tabbuttons">
		<button onclick="info()"style="height: 50px;">userinfo</button>
		<button onclick="history()"   style="height: 50px;" >User history</button>
		</div>
	</div>
	<div id="content">
		<label>Account Information</label>
		<div id="tablecontent" ></div>
		
	</div>
</div>
	<script type="text/javascript">

function display(value,index,array)
{
	row = document.createElement('tr');
	for(var j=0;j<value.length;j++){
		cell = document.createElement('td');
		cell.innerHTML=value[j];
		row.appendChild(cell);
	}
	var button=document.createElement('button');
	button.setAttribute('class','cancel');
	button.setAttribute('id',index);
	button.innerHTML="cancel";
	button.onclick=function()
	{
		var cliked = new XMLHttpRequest();
		cliked.onreadystatechange = function()
		{ 
			if (cliked.readyState == 4 && cliked.status == 200)
			{
				console.log(cliked.responseText);
				document.getElementsByClassName("status")[index].innerHTML="cancel";
			}
		}
		cliked.open("GET","backend.php?value=deletebooking&ticketno="+data[this.id][2],true);
		cliked.send();
	}
	num=value[7];
	if(year<parseInt(num.slice(0,4)))
	{
		row.appendChild(button);
	}
	else if(year==parseInt(num.slice(0,4)))
	{
		if(month<parseInt(num.slice(5,7)))
		{
			row.appendChild(button);
		}
		else if(month==parseInt(num.slice(5,7)))
		{
			if(date<parseInt(num.slice(8,num.length)))
			{
				row.appendChild(button);				
			}
		}
	}
	table.appendChild(row);
}
			function view(value,index,array)
		{
			var element=document.createElement('div');
			element.setAttribute('class','cards');
			var arr=['username','email','address','phoneno'];
            for(var i=1;i<5;i++){
			var ele1=document.createElement('div');
			ele1.setAttribute('id',arr[i-1]);
			ele1.innerHTML=value[i];
			ele1.onclick=function()
						{
							if(flag==0)
							{
								var inp=document.createElement("input");
								inp.setAttribute("type","text");
								inp.setAttribute("value",this.innerHTML);
								inp.onmouseout=function()
								{
									var id = value[0];
									var coloumn=this.parentNode.id;
									flag=0;
									var xhttp3 = new XMLHttpRequest();
									xhttp3.onreadystatechange = function()
									{
										if (xhttp3.readyState == 4 && xhttp3.status == 200)
										{
											console.log(xhttp3.responseText);
										}
									}
									xhttp3.open("GET","backend.php?value=updateuser&Uid="+id+"&coloumn="+coloumn+"&input="+this.value,true);
  									xhttp3.send();					
									
									this.parentNode.innerHTML=this.value;
								}

								this.innerHTML="";
								this.appendChild(inp);
					
								flag=1;
							}
						}
						var flag=0;

			slot = document.createElement('div');
			slot.innerHTML=arr[i-1];
			slot.setAttribute('class','title');
			element.appendChild(slot);
			element.appendChild(ele1);
		}
		document.getElementById('content').appendChild(element);
		}
	
		var Uid=localStorage.getItem('blogin');
		var d = new Date();
		var year=d.getFullYear();
		var month=d.getMonth();
		var date=d.getDate();
		console.log(year,month,date);
		function history(){
			document.getElementById("content").innerHTML="";
			
			var hsty = new XMLHttpRequest();
			hsty.onreadystatechange = function()
		{ 
			if (hsty.readyState == 4 && hsty.status == 200)
			{
				console.log(hsty.responseText);
				data=JSON.parse(hsty.responseText);
				table=document.createElement("table");
				heads=[`busid`, `seatno`, `ticketno`,`ticketprice`, `status`, `bookingdate`, `canceldate`, `journeydate`];
				row = document.createElement("tr");
				for(var i=0;i<heads.length;i++)
				{
					cell = document.createElement("th");
					cell.innerHTML=heads[i];
					row.appendChild(cell);	
				}
			table.appendChild(row);
			data.forEach(display);
			document.getElementById('content').appendChild(table);
	
			}
		}
		hsty.open("GET","backend.php?value=uh&userid="+Uid,true);
		hsty.send();


		}
		function info(){
			var inf = new XMLHttpRequest();
			inf.onreadystatechange = function()
		{ 
			if (inf.readyState == 4 && inf.status == 200)
			{
				console.log(inf.responseText);
				data=JSON.parse(inf.responseText);
				data.forEach(view);

			}
		}
		inf.open("GET","backend.php?value=ui&userid="+Uid,true);
		inf.send();
		}
	</script>
</body>
</html>