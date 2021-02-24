<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#tpart
	{
		width: 784px;
height: 478px;
position: fixed;
background-color: white;
top: 86px;
left: 310px;
	}
	#tmain
	{
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
</style>
<body>
	<div id='tmain'>
	<div id='tpart'>
		<hr>
		<label>Bus Missed!</label>
	<input id="ticketno" type="text" name="">
	<input id="password" type="password" name="">
	<button onclick="check()">GO</button>
</div>
</div>
</body>
<script type="text/javascript">
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
</script>
</html>