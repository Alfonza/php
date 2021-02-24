<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
#heading{
	top: 72px;
position: absolute;
font-size: 57px;
color: #6736bd;
left: 25px;
}
#tablecontent{
    width: 100%;
    height: auto;
    position: relative;
    top: 172px;
    border-top: 1px solid #cacaca;

}
	#sidebar{
		height: 100%;
		width: 307px;
		top: 0px;
		left: 0px;
		position: absolute;
		background-color: white;
	}
table,td,th{
	border:none; 
	overflow: auto;
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

	#tabbuttons{
	    width: 20%;
    height: 60%;
    bottom: 0px;
    position: absolute;
    top: 275px;
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
th{
	background-color: #6736bd;
color: white;
font-weight: 500;
}
	#tabbuttons button{
    position: relative;
    width: 279px;
    height: 52px;
    left: 17px;
    top: 35px;
    margin-bottom: 2px;
    border: none;
	font-size: 18px;
	}
	#tabbuttons button:hover{
		background-color: #6736bd;
		color: white;
		    position: relative;
    }
	#content{
width: 963px;
right: 0px;
position: absolute;
height: 100%;
background-color: white;
top: 0px;
border-left: 1px solid #31313142;
left: 307px;
	}
#logout,#home{    
	top: 16px;
    left: 1220px;
    width: 78px;
    height: 33px;
    font-size: 15px;
    font-weight: 600;
    padding-bottom: 2px;
    color: white;
    background-color: #6736bd;
    position: absolute;
    border: none;
    font-weight: 500;
}
#addbutton{
z-index: 3;    
	top: 600px;
    left: 1220px;
    width: 78px;
    height: 33px;
    font-size: 15px;
    font-weight: 600;
    padding-bottom: 2px;
    color: white;
    background-color: #6736bd;
    position: absolute;
    border: none;
    font-weight: 500;
}
body {
    font-family: sans-serif;
}

	#home{
		left: 1120px;
	}

.delete{
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
	#texta
	{
    position: relative;
    left: 110px;
    top: -133px;
    font-weight: bold;
    font-size: 126px;
    color: white;	
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
	#container {
position: absolute;
top: 67px;
left: 43px;
width: 1150px;
height: 90%;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.25);
}
#hello{
	    color: #6736bd;
    font-weight: 700;
    font-size: 74px;
    top: 110px;
    left: 168px;
    position: absolute;
    font-family: monospace;
}
#generatepage{
	element {
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: gray;
    z-index: 2;
    top: 0px;
    left: 0px;
}
#page{
	position: fixed;
top: 45px;
width: 800px;
height: 100vh;
overflow-y: auto;
background-color: white;
left: 276px;
}
</style>
<body style="background-color: #ececec;font-family: sans-serif;">
	<div style="display: none" id="generatepage">
		<div id = "page">
			<label id="ghead"></label>
			<div><label>Total Revenue :</label><label></label></div>
			<div><label>Monthly Revenue :</label><label></label></div>
			<div><label>Total Revenue By Bus:</label><label></label></div>
			<div><label>Total Revenue on Route: </label></div>
		</div>
	</div>
	<button id="logout" onclick="localStorage.setItem('blogin',-1);window.location.href='http://localhost/busreservation/home.php">logout</button>
	<button id="home" onclick="window.location.href='http://localhost/busreservation/home.php'">home</button>
	<div id="container">
	<div id="sidebar">
		<div id="icon"></div>
		<div id="line"></div>
		<div id="texta">A</div>	
		<div id="tabbuttons">
		<button onclick="btn=this;createtable([`busid`, `seatno`, `ticketno`, `userid`, `ticketprice`, `status`, `bookingdate`, `canceldate`, `journeydate`, `foodid`, `seatposition`],'bookingtable','booking');">Booking table</button>
		<button onclick="btn=this;createtable([`userid`, `username`, `email`,'atype', `address`, `phoneno`, `password`],'usertable','user');">User table</button>
		<button onclick="btn=this;createtable([`busid`, `busname`, `seat no`, `available service`, `dtime`, `atime`, `price`, `routeid`],'bustable','bus');">Bus table</button>		
		<button onclick="btn=this;createtable([`routeid`, `depature`, `arival`, `details`],'routetable','busroute')">Route table</button>
		<button onclick="btn=this;createtable([`foodid`, `fname`, `fprice`],'foodtable','food')">Food table</button>	
		</div>
	</div>
	<div id="content">
		<div id="tablecontent"></div>
	</div>

</div>
<button id="addbutton" style="display: none;" onclick="insert();">Insert</button>
	<script type="text/javascript">


localStorage.setItem('blogin',4);
var session = localStorage.getItem('blogin');
if(session==-1 || session=="-1"){
	alert("Oops! Something went wrong... please login again");
	window.location.href="http://localhost/busreservation/home.php";
}
else
{
	var xhttp3 = new XMLHttpRequest();
	xhttp3.onreadystatechange = function()
	{
		if (xhttp3.readyState == 4 && xhttp3.status == 200)
		{
			console.log(xhttp3.responseText);
			if(xhttp3.responseText!="yes"){
				alert('Unauthorized access! Please login again');
				window.location.href="http://localhost/busreservation/home.php";
			}

		}
	}
	xhttp3.open("GET","backend.php?value=checkacctype&session="+session,true);
		xhttp3.send();
}


		a=document.createElement('div');
  			a.setAttribute('id','hello');
  			a.innerHTML="HELLO ADMIN..!";
  			document.getElementById('tablecontent').appendChild(a);
		var htable="";
		a=document.createElement('div');
  			a.setAttribute('id','heading');
  			document.getElementById('content').appendChild(a);
  		function createtable(heads,tablename,dbt) 
  		{
  			document.getElementById('addbutton').style.display="block";
  			htable=dbt;
  			document.getElementById('heading').innerHTML=btn.innerHTML;
  			dbtable=dbt;
			document.getElementById("tablecontent").innerHTML="";
			table=document.createElement("table");
			row = document.createElement("tr");
			rownums=heads.length;
			for(var i=0;i<heads.length;i++)
			{
			cell = document.createElement("th");
			cell.innerHTML=heads[i];
			row.appendChild(cell);	
			}

			table.appendChild(row);
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function()
			{
				if (xhttp.readyState == 4 && xhttp.status == 200)
				{
					console.log(xhttp.responseText);
					var obj=JSON.parse(xhttp.responseText);
					for(var i=0;i<obj.length;i++)
					{
						row=document.createElement("tr");
						for (var j = 0; j < obj[i].length; j++)
						{
							cell=document.createElement("td");
							cell.innerHTML=obj[i][j];
							row.appendChild(cell);
						}
						del = document.createElement('button');
						del.innerHTML="Delete";
						del.setAttribute('class','delete');
						del.setAttribute('value',obj[i][0]);
						del.onclick=function(){
							delb=this;
							var xhttp4 = new XMLHttpRequest();
							xhttp4.onreadystatechange = function()
									{
										if (xhttp4.readyState == 4 && xhttp4.status == 200)
										{
											console.log(xhttp4.responseText);
											row = delb.parentNode;
											//index=row.rowIndex;
											row.parentNode.removeChild(row);
										}
									}
									xhttp4.open("GET","backend.php?value=delete&table="+htable+"&coloumn="+heads[0]+"&val="+this.value,true);
  									xhttp4.send();
						}
						row.appendChild(del);
						table.appendChild(row);
					}

						table.setAttribute("id","data");
					document.getElementById("tablecontent").appendChild(table);
					x=document.getElementsByTagName("td");
					for(var i=0;i<x.length;i++)
					{
						if(i!=0)
						x[i].onclick=function()
						{
							if(flag==0)
							{
								var inp=document.createElement("input");
								inp.setAttribute("type","text");
								inp.setAttribute("value",this.innerHTML);
								inp.onmouseout=function()
								{
									var id = Number(this.parentNode.parentNode.childNodes[0].innerHTML);
									var colno=this.parentNode.cellIndex;
									var coloumn=document.getElementById("data").childNodes[0].childNodes[colno].innerHTML;
									var xhttp2 = new XMLHttpRequest();
									xhttp2.onreadystatechange = function()
									{
										if (xhttp2.readyState == 4 && xhttp2.status == 200)
										{
											console.log(xhttp2.responseText);
										}
									}
									console.log(dbtable);
									console.log(this.value);
									xhttp2.open("GET","backend.php?value=update&id="+id+"&idname="+heads[0]+"&coloumn="+coloumn+"&table="+dbtable+"&input="+this.value,true);
  									xhttp2.send();
  									this.parentNode.innerHTML=this.value;					
									flag=0;
								}
								this.innerHTML="";
								this.appendChild(inp);
								flag=1;
							}
						}
					}
				}
			}
			xhttp.open("GET","backend.php?value="+tablename,true);
  			xhttp.send();
  			var but = document.createElement('button');
  			but.innerHTML="Add";
  			var row=document.createElement('row');
  			//button.onclick=function()

  			//document.getElementById('tablecontent').appendchild(but);
  		}
  		var dbtable="";
  		var flag=0;
  		function insert(){

  			row = document.createElement('tr');
  			for(var i=0;i<rownums;i++){
  				var input = document.createElement('input');
  				input.setAttribute('id',i);
  				var cell = document.createElement('td');
  				cell.appendChild(input);
  				row.appendChild(cell);
  			}
  			var add =document.createElement('button');
  			add.innerHTML="ADD";
  			var addb=add;
  			console.log(addb);
  			add.setAttribute('class','delete');
  			add.onclick=function(){
  				var str="&value0="+document.getElementById(0).value;
  				for(var j=0;j<rownums;j++){
	      			       {
	      			       	if(document.getElementById(j).value==""){
	      			       		alert("all fields are required");
	      			       		return;
	      			       	}
	   	  				  	str=str+"&value"+j+"="+document.getElementById(j).value;
	        				}
	        				var xhttp4 = new XMLHttpRequest();
	xhttp4.onreadystatechange = function()
	{
		if (xhttp4.readyState == 4 && xhttp4.status == 200)
		{
			console.log(xhttp4.responseText);
			var tr = document.createElement('tr');
  			for(var j=0;j<rownums;j++)
  			{		      
	      		var cell = document.createElement("td");
	      		cell.innerHTML=document.getElementById(j).value;
	      		tr.appendChild(cell);
	      	}
	      	del = document.createElement('button');
						del.innerHTML="Delete";
						del.setAttribute('class','delete');

						del.onclick=function(){
							delb=this;
							var xhttp4 = new XMLHttpRequest();
							xhttp4.onreadystatechange = function()
									{
										if (xhttp4.readyState == 4 && xhttp4.status == 200)
										{
											console.log(xhttp4.responseText);
											row = delb.parentNode;
											//index=row.rowIndex;
											row.parentNode.removeChild(row);
										}
									}
									xhttp4.open("GET","backend.php?value=delete&table="+htable+"&coloumn="+heads[0]+"&val="+this.value,true);
  									xhttp4.send();
						}
						tr.appendChild(del);
						row=addb.parentNode;
						row.parentNode.removeChild(row);
	      	table.appendChild(tr);
		}
	}
	xhttp4.open("GET","backend.php?value=addval&database="+dbtable+"&values="+str,true);
		xhttp4.send();

	    				}
	  			}

  			row.appendChild(add);
  			table.appendChild(row);
  		}
	</script>

</body>
</html>