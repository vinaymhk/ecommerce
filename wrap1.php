  <div class="wrapone">
          
		   <div class="imgflip"><img src="images/flip1.png" style="width:300px; height:70px;"></div>
                <script src="compare.js"></script>
    <div class="wraponeone">
          <div id="">
		<img id="flip_img" style="max-height:300px;max-width:600px;" src=""></img>
		</div>
           
	</div>
	   <div class="wraponetwo" >
        
     <script src="comwraponescroll.js"></script>
     <div class="scroll">
       <ul style="list-style-type:none">
<?php
session_start();
$r=mysqli_connect("localhost","root","","projectec");
if(isset($_GET['cat'])){
	$cat=$_GET['cat'];
	$_SESSION['cat']=$cat;
}
else{
	$cat=$_SESSION['cat'];
}
if(isset($_GET['search'])){
	$s=mysqli_query($r,"select * from f".$cat." where title like '%".$_GET['search']."%'");
	$i=0;
	while($e=mysqli_fetch_array($s)){
		extract($e);
		echo '<li id="f'.$i.'" value="'.$productid.'" onclick="selecteditemf(this.id);" > '.$title.'</li>';
		
		$i++;
	}
}
else{
	echo 'please type a query to get results';
}
?>  
        </ul> 

       </div><br>
		
	   </div>
	 </div>