<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>

	#tpart
	{
		z-index: 2;
		width: 784px;
height: 478px;
position: fixed;
background-color: white;
top: 86px;
left: 310px;
	}
	#tmain
	{
		display: none;
		z-index: 2;
		width: 100%;
height: 100%;
background-color: gray;
position: fixed;
top: 0px;
left: 0px;
}
#tpart label
{
	font-family: sans-serif;
position: absolute;
top: 53px;
color: #f91010;
left: 60px;
font-size: 31px;
	}
	#tpart hr
	{
		position: relative;
top: 123px;
}
#tpart input
{
	position: relative;
top: 189px;
left: 115px;
width: 179px;
height: 28px;
}
#tpart button
{
	background-color: #f91010;
border: none;
position: absolute;
width: 93px;
height: 41px;
top: 357px;
left: 554px;
font-size: 19px;
color: white;
}
.busname{
	position: absolute;
    top: 19px;
    font-family: serif;

}
.dtime{
	left: 217px;
    position: absolute;
    top: 19px;
    font-weight: bold;
}
.atime{
	    position: absolute;
    top: 19px;
    font-weight: bold;
    left: 341px;
}
.price{
	    position: absolute;
    top: 27px;
    font-weight: bold;
    font-size: 20px;
    left: 623px;
}
.routeid{
	position: absolute;
    top: 27px;
    /* font-weight: bold; */
    font-size: 20px;
    left: 729px;
}

.available{
	    position: absolute;
    top: 27px;
    /* font-weight: bold; */
    font-size: 20px;
    left: 848px;
}
.wifi{
	color: black;
    z-index: 10;
    position: relative;
    background-color:#9ffbeab5;
    border: none;
    width: 18px;
    left: 15px;
    top: 10px;
    color: #4089d4f2;
    margin-bottom: 5px;
}
.bottile,.fan{
	    color: black;
    z-index: 10;
    position: relative;
    background-color: #9ffbeab5;
    border: none;
    width: 18px;
    left: 15px;
    top: 60px;
    color: #4089d4f2;
    margin-bottom: 5px;
}
#max,#min
{
position: relative;
left: 0px;
width: 78px;
top: -1px;
height: 24px;
border-radius: 6%;
border: 1px solid #808080d1;
}
#max
{
left: 24px;
}
#top #butty
{
position: absolute;
left: 883px;
}
#loginpopup
	{
		display: none;
		position: fixed;
		width: 100%;
		height: 100vh;
		z-index: 2;
		background-color: #3c22228a;
		top: 0px;
		left: 0px;
	}

	.container
{
	 width:50%;
    height: 400px;
    background: #fff;
    margin: 0 auto;
    border: 2px solid #fff;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 5);
    position: relative;
    top: 110px;
}
.container .left
{   
 float: left;
    width:50%;
    height: 400px;
    background: url(2.jpg);
    background-size:cover;
    background-position:right;
    box-sizing: border-box;
    position: relative;
}
.container .right
{   
 float:right;
 position: relative;
    width:50%;
    height: 400px;
    background-color: white;
    background-size:
    box-sizing: border-box;
}
	.formbox
	{
		width: 100%;
		padding: 80px 40px;
		box-sizing: border-box;
		height: 400px;
		background: #fff;

	}
	.formbox p
	{
		margin: 0;
		padding: 0;
		font-weight: bold;
		color: #a6af13;
	}
	.formbox input
	{
		width: 100%;
		margin-bottom: 20px;
	}
	.formbox input[type="text"],.formbox input[type="password"]
	{
		border: none;
		border-bottom: 2px solid#a6af13
		outline:none;
		height: 40px;
	}
	.formbox input[type="text"]:focus,.formbox input[type="password"]:focus
	{
		border-bottom: 2px solid #262626;

	}
	.formbox .login
	{
		border: none;
		outline: none;
		height: 40px;
		color: #fff;
		background: #262626;
		cursor: pointer;
		border-radius: 25px;
	}
	.formbox .login:hover
	{
		background: #a6af13;

	}
	.formbox a
	{
		color: #2626226;
		font-size: 12px;
		font-weight: bold;
	}
#popupcontent h3{
font-family: sans-serif;
font-weight: 500;
font-size: 25px;
}
#driver,.aseat,.selected,.nseat
{
	width: 30px;
	height: 30px;
	text-align: center;	
}
.selected{
	background-color: #42bb42;
	color: white;
}
#driver{
border: 1px solid red;
color: red;
left: 899px;
top: 240px;
	}
	.nseat{
		border:4px solid red;
		background-color: red;
		color: white;
	}
	.aseat,.selected{
		border:4px;
	}
	.aseat:hover{
		border:2px solid #15ee15;
		color: #42bb42;
	}
	#driver label,.nseat label,.aseat label,.selected label{
		font-family: sans-serif;
		font-size: 18px;
		position: relative;
		top: 5px;
	}
	#driver label,.nseat label{
		top: 1px;;
		font-size: 25px;
	}
	#close
	{
position: relative;
top: -81px;
left: 796px;
font-size: x-large;
	}
	#popupcontent .pophead{
		font-family: Sans-serif;
left: 91px;
position: relative;
top: 131px;
margin-bottom: 82px;

	}
	#popupcontent button
	{
		position: relative;
	top: 153px;
	left: 104px;
	background-color: blue;
	color: white;
	border: none;
	height: 45px;
	width: 105px;
	font-size: 18px;
	font-weight: 600;
	}
	#top button
	{
position: relative;
color: white;
background-color: #d84f57;
margin-left: 8px;
height: 26px;
width: 104px;
top: 14px;
left: 888px;
border: none;
font-size: 13px;
font-weight: 500;
padding-top: 5px;
padding-bottom: 5px;
	}
#notifycontent button
{
left: 93px;
position: relative;
margin-left: 91px;
top: 181px;
background-color: #d84f57;
border: none;
height: 26px;
width: 43px;
color: white;
}
#notifycontent label
{
position: absolute;
top: 104px;
left: 177px;
}
	#notifycontent
	{
		display: none;
		border: 2px solid black;
height: 271px;
width: 560px;
font-size: 17px;
top: 91px;
position: absolute;
left: 373px;
	}

	#buspopup
	{
		width: 100%;
		height: 100%;
		background-color: green;
		display: none;
		position: fixed;
		left: 0px;
		top: 0px;
		overflow: auto;
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.4);
		z-index: 1;
	}


#filter h3{
font-family: sans-serif;
font-weight: 500;
font-size: 15px;
position: relative;
left: 4px;
}
#filter label{
	font-size: 13px;
}
#top{
		width: 100%;
    height: 56px;
    position: relative;
    background-color: #e1222d;
    display: flex;
    top: -9px;
    left: -10px;
	}
	#search{
		background-color: #ffffff;
		width: 100%;
		height: 85%;
		display: block;
		text-align: center;
 
	}
	ul
	{
		list-style-type: none;
margin: 0;
padding: 0;
    padding-top: 0px;
    padding-bottom: 0px;
overflow: hidden;
background-color: #d84f57;
	}
	li
	{
		float: left;
	}
	li a, .dropbtn
	{
display: inline-block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
position: relative;
	}
li a:hover,.dropdown:hover .dropbtn{
	background-color: red;

}
li.dropdown
{
	display: inline-block;
}
#dropdown-content
{
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,.2);
	z-index: 1;
}
#dropdown-content a
{  
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}
#dropdown-content a:hover{
	background-color:#f1f1f1;
}
.dropdown:hover #dropdown-content
{
	display: block;
}
#ticmang
	{
		position: relative;
	}
	form{
		top: 100px;
		position: absolute;
		left: 100px
	}
	#foot{
		background-color: #1b2330;
    position: absolute;
    width: 100%;
    height: 180px;
    top: 650px;
	}
	#sresults{
		background-color: #fbfbfb;
		position: absolute;
		width: 99%;
		height: 561px;
		top: 95px;
		display: none;
		overflow: auto;
	}
	#filter{
		overflow: auto;
		height: 561px;
		background-color: #fbfbfb;
		width: 228px;
		float: left;
		display: inherit;
	}
	#results{
		height: 625px;
		background-color: #fbfbfb;
		position: absolute;
		top: 0px;
		left: 247px;
		width: 81.5%;
		float: right;
		display: inherit;
	}
	.cards{
		width: 1100px;
		height: 178px;
		background-color: #ffffff;
		position: relative;
		top: 59px;
		margin-bottom: 20px;
		border: 1px solid #80808030;
	}
	.cards .busid{
		display: none;	
	}
	.cards .busname{
	    position: relative;
    font-size: 21px;
    font-weight: normal;
    top: 27px;
    left: 30px;
}
.cards .seatno{
    position: relative;
    font-size: 21px;
    font-weight: bold;
    top: 3px;
    left: 196px;
}
.cards .dtime{
    position: absolute;
    font-size: 21px;
    font-weight: lighter;
    top: 27px;
    left: 337px;
}
.cards .atime{
     position: absolute;
    font-size: 21px;
    font-weight: bolder;
    left: 495px;
    top: 27px;
}
.cards .routeid{
    position: absolute;
    font-size: 21px;
    font-weight: normal;
    left: 656px;
    top: 27px;
}

	#buspopup
	{
		width: 100%;
		height: 100%;
		background-color: green;
		display: none;
		position: fixed;
		left: 0px;
		top: 0px;
		overflow: auto;
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.4);
		z-index: 1;
	}
	

	#popupcontent
	{
		background-color: white;
		margin: 7% auto;
		padding: 20px;
		border: 1px solid green;
		width: 807px;

	}

.inputsold{
    position: relative;
    top: 270px;
    height: 26px;
    margin-right: 20px;
    width: 229px;
}
	.inputsnew{
		position: relative;
	top: 0px;
height: 19px;
margin-right: 5px;
width: 153px;
left: -320px;
}
#search .buttonnew{
	top: 3px;
position: relative;
height: 24px;
background-color: #de5159;
color: #ffffff;
border: 0;
width: 70px;
font-weight: 700;
left: -318px;
}
#search .buttonold{
	    top: 270px;
    position: relative;
    height: 31px;
    background-color: #de5159;
    color: #ffffff;
    border: 0;
    width: 70px;
    font-weight: 700;
}
.left .acc
{
position: relative;

left: 49px;

top: -2px;

width: 200px;

height: 25px;

margin-top: 13px;
}
.left .bcc
{
	position: relative;

left: 50px;

font-size: 19px;

color: #5d40cf;

top: 4px;
}
#loginpopup
	{
		display: none;
		position: fixed;
		width: 100%;
		height: 100vh;
		z-index: 2;
		background-color: #3c22228a;
		top: 0px;
		left: 0px;
	}

	.container
{
width: 70%;
height: 440px;
background: #fff;
margin: 0 auto;
border: 2px solid #fff;
box-shadow: 0 10px 20px rgba(0, 0, 0, 5);
position: relative;
top: 110px;
border: none;
}
.container .left
{   
float: left;
width: 50%;
height: 441px;
background-size: cover;
background-position: right;
box-sizing: border-box;
position: relative;
background-color: white;
left: 0px;
}
.left #bu{
    position: relative;
    width: 101px;
    height: 39px;
    left: 154px;
    border: none;
    background-color: #5d40cf;
    font-size: 16px;
    top: 3px;
    color: white;
}
#for .ee
{
top: 22px;

left: 60px;

color: #f9f8f8;

font-size: 19px;

position: inherit;
}
#for #zz
{
	position: relative;

left: 15px;

top: 11px;

color: white;

font-size: 22px;
}
.dd
{
position: relative;
top: 14px;
width: 200px;
height: 19px;
margin-top: 10px;
left: 61px;
}
.container .right
{   
 float:right;
 position: relative;
    width:50%;
    height: 400px;
    background-color: white;
    background-size:
    box-sizing: border-box;
}
for button
{
	background-color: white;

position: relative;

width: 101px;

top: 56px;

left: 166px;

height: 39px;

border: none;

color: #5d40cf;

font-size: 16px;

font-weight: 500;
}
.formbox #sign
{
background-color: white;
border: none;
width: 71px;
height: 39px;
color: #5d40cf;
font-size: 16px;
font-weight: 500;
}
.rformbox
{
	position: relative;
top: 25px;
}
#for .butt
{
background-color: white;

position: relative;

width: 101px;

top: 36px;

left: 166px;

height: 39px;

border: none;

color: #5d40cf;

font-size: 16px;

font-weight: 500;
}
.formbox label
{
	position: relative;
top: -74px;
left: 409px;
color: white;
}
#for
{
    width: 525px;
    height: 442px;
    background-color: #5d40cf;
    position: relative;
    bottom: 2px;
    display: none;
}
.formbox #forget
{
	width: 142px;
height: 39px;
position: relative;
left: 32px;
background-color: white;
border: none;
color: #5d40cf;
font-size: 16px;
font-weight: 500;
}
	.formbox
	{
width: 100%;
padding: 80px 40px;
box-sizing: border-box;
height: 442px;
background: #5d40cf;

	}
	.formbox p
	{
margin: 0;
padding: 0;
font-weight: 500;
color: white;
font-size: 20px;	}
	.formbox input
	{
		width: 100%;
		margin-bottom: 20px;
	}
	.formbox input[type="text"],.formbox input[type="password"]
	{
		border: none;
		border-bottom: 2px solid#a6af13
		outline:none;
		height: 40px;
	}
	.formbox input[type="text"]:focus,.formbox input[type="password"]:focus
	{
		border-bottom: 2px solid #262626;

	}
	.formbox .login
	{
		border: none;
		outline: none;
		height: 40px;
		color: #fff;
		background: #262626;
		cursor: pointer;
		border-radius: 25px;
	}
	.formbox .login:hover
	{
		background: #a6af13;

	}
	.formbox a
	{
		color: #2626226;
		font-size: 12px;
		font-weight: bold;
	}
#popupcontent h3{
font-family: sans-serif;
font-weight: 500;
font-size: 25px;
}
#nf
{
	position: relative;
top: 109px;
left: 120px;
font-size: 25px;
color: #000000c7;
width: min-content;
}

</style>
<script src="filter.js"></script>
<script>
var a=0;
	function display(value,index,array){
		//console.log(value);
		var time = value[4];
		var dh=Number(time.slice(0,2));
		var dm = Number(time.slice(3,5));
		var ch = Number(date.slice(11,13));
		var cm = Number(date.slice(14,16));
		
		var element=document.createElement("div");
		element.setAttribute("class","cards"); 
		element.setAttribute("id",index);
		document.getElementById("results").appendChild(element);
		//document.getElementById(index).innerHTML="101";
		//for(var i=0;i<array.length;i++){
			//console.log("s");
			var ele1=document.createElement("div");
			ele1.setAttribute("class","busid");
			ele1.innerHTML=value[0];
			document.getElementById(index).appendChild(ele1);
			//document.getElementById("busid").innerHTML=value[i][0];
			var ele2=document.createElement("div");
			ele2.setAttribute("class","busname");
			ele2.innerHTML=value[1];
			document.getElementById(index).appendChild(ele2);
			//document.getElementById("busname").innerHTML=value[i][1];
			/*var ele3=document.createElement("div");
			ele3.setAttribute("class","seatno");
			ele3.innerHTML=value[8];
			document.getElementById(index).appendChild(ele3);*/

			var ele3=document.createElement("div");
			ele3.setAttribute("class","available");
			ele3.innerHTML=value[8];
			document.getElementById(index).appendChild(ele3);
			//document.getElementById("seatno").innerHTML=value[i][2];
			//document.getElementById("avs").innerHTML=value[i][3];
			var ele4=document.createElement("div");
			ele4.setAttribute("class","avs");
			 document.getElementById(index).appendChild(ele4);
			 var val="";
			var str=value[3];
			var ele5=document.createElement("div");
			ele5.setAttribute("class","dtime");
			ele5.innerHTML=value[4];
		    document.getElementById(index).appendChild(ele5);
		    //document.getElementById("dtime").innerHTML=value[i][4];
			var ele6=document.createElement("div");
			ele6.setAttribute("class","atime");
			ele6.innerHTML=value[5];
			document.getElementById(index).appendChild(ele6);
			//document.getElementById("atime").innerHTML=value[i][5];
			var ele7=document.createElement("div");
			ele7.setAttribute("class","routeid");
			ele7.innerHTML=value[6];
			//document.getElementById(index).appendChild(ele7);

			var ele8=document.createElement("div");
			ele8.setAttribute("class","price");
			ele8.innerHTML=value[7];
			document.getElementById(index).appendChild(ele8);


		//}
		
		    
		element.onclick= function(){
			document.getElementById("buspopup").style.display="block";
			showpopup(data[this.id][0],data[this.id][7],data[this.id][2],this.id);
		}
		document.getElementById("results").appendChild(element);
	}
	//}
	function searchsql(from,to)
	{
		
		var sql = new XMLHttpRequest();
		sql.onreadystatechange = function()
		{
			if (sql.readyState == 4 && sql.status == 200)
			{
				console.log(sql.responseText);
				data=JSON.parse(sql.responseText);
				data.forEach(display);
			}
		}
		 var reqdate=document.getElementById("date").value;
		console.log(reqdate);
		sql.open("GET","backend.php?value=search&from="+from+"&to="+to+"&date="+reqdate,true);
		sql.send();
	}
function search()
{
	document.getElementById('results').innerHTML="";
	console.log("yes");
	if(document.getElementById("date").value=="")
	{
		alert("please enter the date ");
	}
	else
	{	

		document.getElementById('search').style.height="22px";
		document.getElementById('from').setAttribute('class','inputsnew');
		document.getElementById('to').setAttribute('class','inputsnew');
		document.getElementById('date').setAttribute('class','inputsnew');
		document.getElementById('go').setAttribute('class','buttonnew');
	/*top: 0px;
height: 19px;
margin-right: 5px;
width: 153px;
left: -223px;*/
		document.getElementById('sresults').style.display="block";
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				console.log(this.responseText);
				var obj=JSON.parse(this.responseText);
				if(obj[0].length==0 && obj[1].length==0)
				{
					var curdate = date.slice(0,10);
					var reqdate = document.getElementById('date').value;
					var curdatey=Number(curdate.slice(0,4));
					var curdatem=curdate.slice(5,7);
					var curdated=curdate.slice(8,10);
					var reqdatey=Number(reqdate.slice(0,4));
					var reqdatem=Number(reqdate.slice(5,7));
					var reqdated=Number(reqdate.slice(8,10));
					console.log(curdatey,curdatem,curdated);
					console.log(reqdatey,reqdatem,reqdated);
					if(curdatey<reqdatey)
						searchsql(from,to);
					else if(curdatey==reqdatey)
					{
						if(curdatem<reqdatem)
							searchsql(from,to);
						else if(curdatem==reqdatem)
						{
							if(curdated<=reqdated)
							{ 
								searchsql(from,to);
							}
							else
							{
								alert("Sorry, you cannot enter previous dates");
							}
						}
						else
						{
							alert("Sorry, you cannot enter previous dates");
						}
					}
					else
					{
						alert("Sorry, you cannot enter previous dates");
					}
				}
				else
				{
					if(obj[0].length!=0)
					{
						document.getElementById("results").innerHTML="From: not found\ndid u mean ";
						for(var k=0;k<obj[0].length;k++)
						{
							var ele1=document.createElement("label");
							ele1.innerHTML=obj[0][k];
							ele1.onclick=function()
							{
								document.getElementById('from').value=this.innerHTML;	
							}
							document.getElementById("results").appendChild(ele1);
						}
					}
					else
					{
						document.getElementById("results").innerHTML="To: not found\ndid u mean ";
						for(var k=0;k<obj[1].length;k++)
						{
							var ele1=document.createElement("div");
							ele1.innerHTML=obj[1][k];
							ele1.onclick=function()
							{
								document.getElementById('to').value=this.innerHTML;
							}
							document.getElementById("results").appendChild(ele1);
						}
					}
				}
			}
		}
		var from = document.getElementById("from").value;
		var to = document.getElementById("to").value;
  		xhttp.open("GET","backend.php?value=suggest&from="+from+"&to="+to,true);
  		xhttp.send();
  	}
}	
	var d = new Date();
	var date = d.toISOString();
	console.log(date);
	var uid=1;
	var busid=1000;

	function msg(){
		
		var mg = new XMLHttpRequest();
		mg.onreadystatechange = function()
		{
			if (mg.readyState == 4 && mg.status == 200)
			{
				console.log(mg.responseText);
				//message=JSON.parse(mg.responseText);
				
			}
		}
		mg.open("GET","backend.php?value=notify&Uid="+uid+"&busid="+busid+"&date="+date,true);
		mg.send();

	}
	function cancel(){
		document.getElementById("buspopup").style.display="none";
	}
	function maximum(){
		var val=document.getElementById("max").value;
		for(var i=0;i<data.length;i++){
			if(val>data[i][7]){
				document.getElementsByClassName("cards")[i].style.display="block";
			}
			else{
				document.getElementsByClassName("cards")[i].style.display="none";

			}
		}
	}
	function minimum(){
		var val=document.getElementById("min").value;
		//console.log(document.getElementById("min").value);
		for(var i=0;i<data.length;i++){

			if(val<data[i][7]){
				document.getElementsByClassName("cards")[i].style.display="block";
			}
			else{
				document.getElementsByClassName("cards")[i].style.display="none";

			}
		}

	}

	function signin()
	{
		var name=document.getElementById('sn').value;
		var pass=document.getElementById('sp').value;
		var sg = new XMLHttpRequest();
		sg.onreadystatechange = function()
		{
			if (sg.readyState == 4 && sg.status == 200)
			{
				if(sg.responseText!="-1"){
				localStorage.setItem('blogin',sg.responseText);
				sessioncheck();
				document.getElementById('loginpopup').style.display="block";
				}
				else{
					alert("not found");
				}
			}
		}
		sg.open("GET","backend.php?value=signin&name="+name+"&pass="+pass,true);
		sg.send();	
	}
	function select(check)
	{
		if(check==1)
		{
				document.getElementById('tmain').style.display='block';
		}
		else if (check==2)
		{
			if(flag1==0)
			{
					document.getElementById('bpop').style.display='block';
			}
}
	}
	function login()
	{
		var name=document.getElementById('sn').value;
		var pass=document.getElementById('sp').value;
		console.log(name,pass);
	var sg = new XMLHttpRequest();
		sg.onreadystatechange = function()
		{
			if (sg.readyState == 4 && sg.status == 200)
			{
				if(sg.responseText!=""){
					alert("login successfull");
				localStorage.setItem('blogin',sg.responseText);
				sessioncheck();
				document.getElementById('loginpopup').style.display="block";
				}
				else{
					alert("not found");
				}
			}
		}
		sg.open("GET","backend.php?value=login&name="+name+"&pass="+pass,true);
		sg.send();
		
	}
	function signin()
{
		var name=document.getElementById('n').value;
		var email=document.getElementById('e').value;
		var adress=document.getElementById('a').value;
		var phone=document.getElementById('ph').value;
		var pass=document.getElementById('pa').value;
		if(name==""||email==""||adress==""||phone==""||pass=="")
		{
			alert("all field reqiured");
		}
		else
		{
		var lg = new XMLHttpRequest();
		lg.onreadystatechange = function()
		{
			if (lg.readyState == 4 && lg.status == 200)
			{ 	
				localStorage.setItem('blogin',this.responseText);
				alert('successfull');
				document.getElementById('loginpopup').style.display="none";
				
			}
		}
		lg.open("GET","backend.php?value=signin&name="+name+"&email="+email+"&adress="+adress+"&phone="+phone+"&pass="+pass,true);
		lg.send();
	}

}
function forgot()
	{
		var userid=document.getElementById('useid').value;
		console.log(userid)
		var name=document.getElementById('name').value;
		//console.log(document.getElementById('name').value);
		var email=document.getElementById('email').value;
		var pass=document.getElementById('p').value;
		var repass=document.getElementById('rp').value;
		console.log(userid,name,email,pass,repass);
		if(userid==""||name==""||email==""||pass==""||repass=="")
		{
			alert("all field reqiured");
		}
		else
		{
		  var fg = new XMLHttpRequest();
		      fg.onreadystatechange = function()
		        {
			     if (fg.readyState == 4 && fg.status == 200)
			       {
			       	if(this.responseText=="no")
			       	{
			       		alert('incorrect values submit please try again');
			       	}
			       	else{
			       		alert('password update successfull');
			       	}
				   }
				   
	             }

		            fg.open("GET","backend.php?value=forget&name="+name+"&userid="+userid+"&email="+email+"&pass="+pass+"&repass="+repass,true);
		            fg.send();
        }
    }

</script>
<body style="font-family:sans-serif;position: absolute; width: 100%; height: 100%; top: 0px;left: 0px;">

	<div id="top">
	
		<button id="butty" onclick="window.location.href='admin.php'" style="display: none;">Admin Panel</button>
		<div  id="ticmang">
		<ul>
			<li class="dropdown"><a href="javascript:void(0)" onclick="dropdisplay();"  class="dropbtn">Ticket Management</a>
				<div  id="dropdown-content">
					<a href="#"  onclick="select(1)">cancel ticket</a>
					<a href="#" onclick="window.location.href='busmissed.php'">bus missed</a>
			</li>
		</ul>
					
		
	</div>
	<div id='tmain'>
	<div id='tpart'>		
		<label>Cancel Tickets!</label>
	<input id="ticketno" type="text" name="">
	<input id="password" type="password" name="">
	<button id="gobutton" style="position: absolute;
	top: 360px;
	left: 600px;" onclick="check()">GO</button>
	<label style="position: absolute;left: 748px;top: 10px;"  onclick="document.getElementById('tmain').style.display='none';">&times</label>
		</div>
</div>
	<button onclick="document.getElementById('loginpopup').style.display='block';" id="login">Login/Signup</button>	
	<button style="display: none;" onclick="window.location.href='user.php'" id="user"></button>	
	<button style="display: none;" onclick="logout();" id="logout">Logout</button>
	</div>
	<div id="loginpopup" >
<div class="container">
	<div class="left">
				<div class="rformbox">
		
		<label class="bcc">name</label><br>
		<input class="acc"  id="n" type="text" name="name"  placeholder="enter the user name"><br>
		<label class="bcc">email</label><br>
		<input class="acc" id="e" type="email" name="email" placeholder="enter the email"><br>
		<label class="bcc">adress</label><br>
		<input class="acc" id="a"type="text" name="adr" placeholder="enter the adress"><br>
		<label class="bcc">phone</label><br>
		<input class="acc" id="ph" type="Number" name="num" placeholder="enter the phone number"><br>
		<label class="bcc">password</label><br>
		<input class="acc" id="pa" type="password" name="password" placeholder="enter the password"><br>
		<button class="acc" id="bu" onclick="signin()">signin</button>
	</div>
	</div>
	<div class="right">

		
		<div class="formbox" >
			<label onclick="document.getElementById('loginpopup').style.display='none';">&times</label>
				<p>user name</p>
				<input  id="sn" type="text" name="" placeholder="enter the user name">
				<p>password</p>
				<input id="sp" type="password" name="pwd" placeholder="enter password">
				<button id="sign" name="login" onclick="login()"> login</button>
				<button id="forget" onclick="document.getElementById('for').style.display='block',document.getElementsByClassName('formbox')[0].style.display='none'" >forgetpassword</button>	
		</div>
		<div id="for" >
			<label id="zz">Forget Password</label><br>
    <label class="ee">User ID</label><br>
    <input class="dd" id="useid" type="text" name=""><br>
    <label class="ee">User Name</label><br>
    <input class="dd" id="name" type="text" name=""><br>
    <label class="ee"> Email</label><br>
    <input class="dd" id="email" type="email" name=""><br>
    	<label class="ee">User Password</label><br>
    	<input class="dd" id="p" type="password" name=""><br>
    	<label class="ee">Re-enter User Password</label><br>
    	<input class="dd" id="rp" type="password" name=""><br>
    	<button class="butt"  onclick="document.getElementById('for').style.display='none',document.getElementsByClassName('formbox')[0].style.display='block'">login</button>
    	<button class="butt" onclick="forgot();">submit</button><br>
    </div>
	</div>
</div>
</div>
	<div id="search" style="position: absolute; text-align: center;">
	<input id="from" class="inputsold" placeholder = "From" type="text" name="from" required>
	<input type="text" class="inputsold" placeholder="Destination" id="to" name="to" required>
	<input type="date" class="inputsold" id="date" placeholder = "none" name="">
	<button id="go" class="buttonold" onclick="search();">GO</button>
</div>
<div id="sresults">
	<div id="filter">
		<h3>PRICE</h3>
		<input placeholder="min" id="min"type="text" name=""onchange="minimum()"><input placeholder="max" id="max"type="text" name="" onchange="maximum()">
		<h3>DEPARTURE TIME</h3>
		<label>Before 6am</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(1)"><br>
		<label>6am to 12pm</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(2)"><br>
		<label>12pm to 6pm</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(3)"><br>
		<label>after 6pm</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(4)"><br>
		<h3>BUS TYPES</h3>
	    <label>seater</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(5)"><br>
		<label>sleeper</label> 
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(6)"><br>
		<label>ac</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(7)"><br>
		<label>nonac</label> 
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(8)"><br>
		<h3>ARRIVAL TIME</h3>
		<label>Before 6am</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(9)"><br>
		<label> 6am to 12pm</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(10)"><br>
		<label>12pm to6pm</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(11)"><br>
		<label>after 6pm</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(12)"><br>
		<h3>AMENITIES<h3>
		<label>wifi</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(13)"><br>
		<label>bottle</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(14)"><br>
		<label>fan</label>
		<input type="checkbox"  class="mycheck" name="" onclick="myFunction(15)"><br>
	</div>
	<div id="results">
	</div>
</div>
<div id="foot">
</div>
<div id="notification">
	<div id="notifycontent">
		<span id="close" onclick="document.getElementById('buspopup').style.display='none';">&times</span>
		<label>Do you want notificaton?</label> <button onclick="msg()">Yes</button><button onclick="cancel()">No</button>
	</div>
<div id="buspopup">
	<div id="popupcontent">
		<center><h3>Seating Layout</h3></center>
		<span id="close" onclick="document.getElementById('buspopup').style.display='none';">&times</span>
		<div class="pophead">Per Ticket Price: Rs <label id = perticketcost></label></div>
		<div class="pophead" >Seats Selected : <label id="selected"></label></div>

		<div class="pophead" >Total Cost : <label id="total"></label></div>

		<button onclick="window.location.href='checkout.php'">Buy Now</button>
		<div id="driver" style="position: absolute;"><div>D</div></div>
	</div>
</div>
<script type="text/javascript">
	b=0;
	function dropdisplay(){
		if(b==0){
			document.getElementById('dropdown-content').style.display='block';
			b=1;
		}
		else{
			document.getElementById('dropdown-content').style.display='none';
				b=0;
		}
	}
	function check(){
	var ticketno=document.getElementById('ticketno').value;
	var password=document.getElementById('password').value;
		var d = new Date();
		var date = d.toISOString();
		var curdate =date.slice(0,10);

	console.log(ticketno,password,curdate);
		/*var curday=curdate.slice(0,4);
		var curdatem=Number(curdate.slice(5,7));
		var curdated=Number(curdate.slice(8,10));*/
		var chk = new XMLHttpRequest();
		chk.onreadystatechange = function()
		{
			if (chk.readyState == 4 && chk.status == 200)
			{
				//console.log(chk.responseText);
				if(chk.responseText=="no"){
				alert("incorrect ticketnumber or password");   //addde
				}
				else{
				alert("Ticket cancel Successfull");	
				}
			}
		}
		chk.open("GET","backend.php?value=checking&ticketno="+ticketno+"&password="+password+"&curdate="+curdate,true);
		chk.send();
	}
	function logout(){
		localStorage.setItem('blogin',-1);
		sessioncheck();
	}
sessioncheck();
function sessioncheck(){
session=localStorage.getItem('blogin');
	if(session !=null && session!="-1" && session!=-1)
	{
	var ses = new XMLHttpRequest();
		ses.onreadystatechange = function()
		{
			if (ses.readyState == 4 && ses.status == 200)
			{
				if(ses.responseText==""){
					alert("Opss.. Authentication failed, Please login again")
					localStorage.setItem('blogin',-1);
				}
				else{
					document.getElementById('login').style.display="none";
					document.getElementById('user').style.display="block";
					document.getElementById('user').innerHTML=ses.responseText;
					document.getElementById('logout').style.display="block";
					var xhttp3 = new XMLHttpRequest();
					xhttp3.onreadystatechange = function()
					{
						if (xhttp3.readyState == 4 && xhttp3.status == 200)
						{
								console.log(xhttp3.responseText);
								if(xhttp3.responseText!="yes")
								{
										document.getElementById('butty').style.display="none";
								}
								else
								{
										document.getElementById('butty').style.display="block";				
								}

						}
					}
	xhttp3.open("GET","backend.php?value=checkacctype&session="+session,true);
		xhttp3.send();

				}
				//data2=JSON.parse(ses.responseText);
				//data.forEach(display);
			}
		}
		ses.open("GET","backend.php?value=checksession&session="+session,true);
		ses.send();
}
else{
					document.getElementById('login').style.display="block";
					document.getElementById('user').style.display="none";
					document.getElementById('logout').style.display="none";

			document.getElementById('butty').style.display="none";
}

}
document.getElementById('close').style.display="none";
	function showpopup(id,ticketprice,totalseats,id)
	{
		localStorage.setItem('jdate',document.getElementById('date').value);
		localStorage.setItem('busid',data[id][0]);
	var seats=data[id][9];
	var m = 1;
	var n=1;
	seat=[];/*
	while(n<=seats.length){

	console.log('e');
	if(seats[n]==','){
					var seatnum=seats.slice(m,n);
					n=m;
					console.log(seatnum);
					seat.push(seatnum);
				}
			}
*/
	var bookedseats=[10,20,30];
	 selectedseats=[];
	 document.getElementById("selected").innerHTML=selectedseats;
	var totalseats=Number(totalseats);//Number(data[id][2]);
	console.log(data[id][8]);
	var ticketprice=Number(data[id][7]);//data[id][];
	document.getElementById('perticketcost').innerHTML=ticketprice;
	for(var i=1;i<=totalseats;i++){
		seat = document.createElement('div');
		seat.style.position="absolute";
			seat.style.marginLeft="20px";
			if((i-1)%4>1)
				inc=20;
			else
				inc=0;
		leftval=706+inc+50*((i-1)%4);
		topval=290+50*(Math.floor((i-1)/4));
		label = document.createElement('label');
		label.innerHTML=i;
		var flag1=0;
		for(var j=0;j<bookedseats.length;j++){
			if(bookedseats[j]==i){
				seat.setAttribute('class','nseat');
				seat.style.top=topval+"px";
				seat.style.left=leftval+"px";
				flag1=1;
			}
		}
		if(flag1==0)
		{
			seat.setAttribute('class','aseat');
			seat.style.top=topval+5+"px";
			seat.style.left=leftval+5+"px";
			seat.onclick=function()
			{
				for(var j =0;j<selectedseats.length;j++)
				{
					if(selectedseats[j]==this.childNodes[0].innerHTML)
					{
						selectedseats.splice(j,1);
						localStorage.setItem('selectedseats',this.childNodes[0].innerHTML);
						localStorage.setItem('selectedseatnumber',selectedseats.length);
						document.getElementById("selected").innerHTML=selectedseats;
						this.style.color="black";
							totalcost=selectedseats.length*ticketprice;

						localStorage.setItem('totalcost',totalcost);
				document.getElementById('total').innerHTML=totalcost;

						this.style.backgroundColor="white";
						this.setAttribute('class','aseat');
						return;
					}
				}
				selectedseats.push(this.childNodes[0].innerHTML);

						localStorage.setItem('selectedseats',JSON.stringify(selectedseats));
						localStorage.setItem('selectedseatnumber',selectedseats.length);
						console.log(selectedseats.length);
				this.setAttribute('class','selected');
				document.getElementById("selected").innerHTML=selectedseats;
				totalcost=selectedseats.length*ticketprice;
						localStorage.setItem('totalcost',totalcost);
				
				document.getElementById('total').innerHTML=totalcost;
			}
		}
		seat.appendChild(label);
		max=seat.style.top;	
		document.getElementById('popupcontent').appendChild(seat);
	}
	document.getElementById('popupcontent').style.height=max;
}
</script>

</body>
</html>