<?php





if($_GET['store']==1){
	$db=$_POST['db'];
	$id=$_POST['id'];
	$r=mysqli_connect("localhost","root","","projectec");
$s1=mysqli_query($r,"select * from ".$db." where productid='$id'");
$e1=mysqli_fetch_array($s1);
extract($e1);


$imgarr=explode(";",$imageurl);
echo $imgarr[0];
	
}
else if($_GET['store']==2){
	//echo "hey hey";
	$db=$_POST['db'];
	$id=$_POST['id'];
	$r=mysqli_connect("localhost","root","","projectec");
$s2=mysqli_query($r,"select * from ".$db." where id='$id'");
$e2=mysqli_fetch_array($s2);
extract($e2);


$imgarr=explode(";",$image_link);
echo $imgarr[0];
	
}


?>