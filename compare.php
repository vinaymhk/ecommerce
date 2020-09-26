<html>
<head>

<link rel="stylesheet" href="compare.css"/>

<link rel="stylesheet" href="styles.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
<script src="js/jquery.js"></script>

<script src="js/script.js"></script>

        <style> 
           input[type=text] {
           width: 250px;
           box-sizing: border-box;
           border: 2px solid #ccc;
           border-radius: 4px;
           font-size: 16px;
           background-color: white;
           background-position: 10px 10px; 
           background-repeat: no-repeat;
           padding: 12px 20px 12px 40px;
           -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
           }
             input[type=submit] {
             width: 130px;
             box-sizing: border-box;
             border: 2px solid #ccc;
             border-radius: 4px;
             font-size: 16px;
             background-color: white;
             background-position: 10px 10px; 
             background-repeat: no-repeat;
             padding: 12px 20px 12px 40px;
  
           } 


            input[type=text]:focus {
              width: 85%;
            }
        </style>
		
		   
		    
	   
</head>
            

    <body>

		
		
		
		
            </div>
        <div class="header">
		           
				   
				  
				   
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
  <li><a href="aboutus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="feedback.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="contactus">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>

</div>
	          <div class="s">
        
            <div class="search">
                
			     <form action="compare.php">
		          <input type="text" id="search" name="search" placeholder="search..">
				 <div class="sb"> <button><img src="images/search.png" style="max-width:5px max-height:3px;"></button></div>
      	
		          </form>
		   </div>
		   </div>
        

   <div class="wrap">
<?php
		include 'wrap1.php';
		include 'wrap2.php';
?>

 <div class="compare">
    <form action="res.php">
	
	<input type="hidden" name="cat" id="db_name" value="<?php  echo $cat; ?>" />
<input type="hidden" name="flipkart" id="fp" value="" />


<input type="hidden" name="snapdeal" id="sd" value="" />
 <input class="sub" type="submit" value="Compare">
</form>
 </div>
 </div>



    <div class="foot">
    footer
    </div>







</body>

</html>