
	function myFunction(check)
{
	var checkbox=document.getElementsByClassName("mycheck")[check-1];
	if (check==1) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num<6))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num<6))
				{

				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}		
	}
	if (check==2) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num>=6 && num<=12))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num>6 && num <12))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}
if (check==3) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
		
	{
		var n=data[i][4];
		 var num=parseInt(n.slice(0,2));
		if(!(num>=12&&num<=18)){
		document.getElementsByClassName("cards")[i].style.display="none";
		}
		
	 //document.getElementsByClassName("mycheck").innerHTML=data[i][4];
	}
	}
	else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num>=12&&num<=18))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
	
}

if (check==4) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
		
	{
		var n=data[i][4];
		 var num=parseInt(n.slice(0,2));
		if(!(num>=18)){
		document.getElementsByClassName("cards")[i].style.display="none";
		}
		
	 //document.getElementsByClassName("mycheck").innerHTML=data[i][4];
	}
	}
	else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num>=18))
				{

				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
		if (check==5) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[3]=='S'))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[3]=='S'))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}if (check==6) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[3]=='L'))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[3]=='L'))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}
	if (check==7) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[3]=='A'))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[3]=='A'))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}
if (check==8) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[4]=='N'))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				if(!(n[4]=='N'))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}

	
}if (check==9) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][4];
				var num=parseInt(n.slice(0,2));
				if(!(num<6))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][5];
				var num=parseInt(n.slice(0,2));
				if(!(num<6))
				{

				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}		
	}
	if (check==10) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][5];
				var num=parseInt(n.slice(0,2));
				if(!(num>=6 && num<=12))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][5];
				var num=parseInt(n.slice(0,2));
				if(!(num>6 && num <12))
				{

				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}
if (check==11) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
		
	{
		var n=data[i][5];
		 var num=parseInt(n.slice(0,2));
		if(!(num>=12&&num<=18)){
		document.getElementsByClassName("cards")[i].style.display="none";
		}
		
	 //document.getElementsByClassName("mycheck").innerHTML=data[i][4];
	}
	}
	else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][5];
				var num=parseInt(n.slice(0,2));
				if(!(num>=12&&num<=18))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
	
}

if (check==12) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
		
	{
		var n=data[i][4];
		 var num=parseInt(n.slice(0,2));
		if(!(num>=18)){
		document.getElementsByClassName("cards")[i].style.display="none";
		}
		
	 //document.getElementsByClassName("mycheck").innerHTML=data[i][4];
	}
	}
	else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][5];
				var num=parseInt(n.slice(0,2));
				if(!(num>=18))
				{

				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
	
}
if (check==13) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][3];
				if(!(n[0]=='W'))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][3];
				if(!(n[0]=='W'))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}
if (check==14) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][3];
				if(!(n[1]=='B'))
				{
					console.log(i);
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][3];
				if(!(n[1]=='B'))
				{
				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}
		}
}
if (check==15) 
	{
		if(checkbox.checked==true){
			for(var i=0;i<data.length;i++)
			{
				var n=data[i][3];
				if(!(n[2]=='F'))
				{
				document.getElementsByClassName("cards")[i].style.display="none";
				}
			}
		}
		else{
		for(var i=0;i<data.length;i++)
			{
				var n=data[i][3];
				if(!(n[2]=='F'))
				{

				console.log(i);
				document.getElementsByClassName("cards")[i].style.display="block";
				}
			}	
		}
}


}