var flipid=0;
var snapid=0;
var db;
function selecteditemf(id){
	document.getElementById("fp").value=document.getElementById(id).getAttribute("value");
	if(flipid!=0)
		flipid.style.background="none";
	document.getElementById(id).style.background="white";
	flipid=document.getElementById(id);
	
	flip_get_img(document.getElementById(id).getAttribute("value"));
}

function selecteditems(id){
	document.getElementById("sd").value=document.getElementById(id).getAttribute("value");
	if(snapid!=0)
		snapid.style.background="none";
	document.getElementById(id).style.background="white";
	snapid=document.getElementById(id);
	
	snap_get_img(document.getElementById(id).getAttribute("value"));
	
	
}

function flip_get_img(id){
db='f'+document.getElementById("db_name").value;

$.post("ajax.php?store=1",{db:db,id:id},
			function(data, status){
				
				document.getElementById("flip_img").src=data;
				
				
			}
		);
		
}

function snap_get_img(id){



	
db='s'+document.getElementById("db_name").value;
	//document.getElementById("snap_img").innerHTML="hello world";

$.post("ajax.php?store=2",{db:db,id:id},
			function(data, status){
				
				document.getElementById("snap_img").src=data;
				
				
			}
		);
		
}