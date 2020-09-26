<html>


  <head>
  <link rel="stylesheet" href="res.css"/>
  

  </head>


  <body>
  <div class="header">
   header
   </div>
   <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #3f88c5;
}

li {
    float: left;
}


li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #234b6c;
}

.active {
    background-color: #44bba4;
}
</style>


<div class="navi">
<ul>
  <li><a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="category.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="aboutus.php" class="dropbtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="feedback.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="contactus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><div class=print><button onclick="myFunction()"><img src="images/p.png" style="width:5px height:3px;"><br>Print</button></div></li>
    <script>
	function myFunction()
	{
		 window.print();
	}
	</script>
  </ul>

</div>

 
   <div class="wrapper">
	<div class="row1" >
	<div class="compare">COMPARE</div>
	<div class="title">TITLE</div>
	<div class="image">IMAGE</div>
	<div class="descriptionone">DESCRIPTION</div>
	<div class="mrp">MRP</div>
	<div class="price">PRICE</div>
	<div class="category">CATEGORY</div>
	<div class="brand">BRAND</div>
	<div class="instock">InSTOCK</div>
	<div class="link">CLICK HERE TO BUY</div>
	
	
	</div>
	<?php
$fp=$_GET['flipkart'];
$sd=$_GET['snapdeal'];
$cat=$_GET['cat'];
$r=mysqli_connect("localhost","root","","projectec");
$s1=mysqli_query($r,"select * from f".$cat." where productid='$fp'");
$e1=mysqli_fetch_array($s1);
extract($e1);


$imgarr=explode(";",$imageurl);
$lim=count($imgarr);
echo '
<div class="flipkart">
<div class="imgflip"><img src="images/flip1.png" style="width:300px; height:70px;"></div>
<div class="titleone">'.$title.'</div>
<div class="image"><img style="max-width:100%; max-height:100%" src="'.$imgarr[0].'"></img></div>
<div class="description">'.$description.'</div> 
<div class="mrp">'.$mrp.'</div>
<div class="price">'.$price.'</div>
<div class="categoryone">'.$categories.'</div>
<div class="brand">'.$productbrand.'</div>
<div class="instock">'.$instock.'</div>
<div class="link"><a style="text-decoration:none;color:black;" href="'.$producturl.'" target="_blank">BUY NOW </a></div>
</div>

';


$s2=mysqli_query($r,"select * from s".$cat." where id='$sd'");
$e2=mysqli_fetch_array($s2);
extract($e2);


$imgarr=explode(";",$image_link);
$lim=count($imgarr);
echo '
<div class="snapdeal">
<div class="imgflip"><img src="images/snap1.jpg" style="width:300px; height:70px;"></div>
<div class="titleone">'.$title.'</div>
<div class="image"><img style="max-width:100%; max-height:100%" src="'.$imgarr[0].'"></img></div>
<div class="description">'.$description.'</div>
<div class="mrp">'.$mrp.'</div>
<div class="price">'.$effective_price.'</div>
<div class="category">'.$category_name.'</div>
<div class="brand">'.$brand.'</div>
<div class="instock">'.$availability.'</div>
<div class="link"><a style="text-decoration:none;color:black;" href="'.$link.'" target="_blank">BUY NOW </a></div>
</div>

';
	
	

	
?>
	  </div>
    <div class="footer">

    Footer
    
	</div> 





   </body>

   
   </html>