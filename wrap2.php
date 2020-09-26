     <div class="wraptwo">
      
	  		 <div class="imgflip"><img src="images/snap1.jpg" style="width:300px; height:70px;"></div>
             <script src="comparetwo.js"></script>
	  <div class="wraptwoone">
         <div id="">
		<img id="snap_img" class="snapdeal_image" style="max-height:300px;max-width:800px;" src=""></img>
		</div>

			</div>
	  <div class="wraptwotwo">
        
   <script src="comwraptwoscroll.js"></script>  
      <div class="scroll">
      <ul style="list-style-type:none">
<?php
$r=mysqli_connect("localhost","root","","projectec");
if(isset($_GET['search'])){
	$s=mysqli_query($r,"select * from s".$cat." where title like '%".$_GET['search']."%'");
	$i=0;
	while($e=mysqli_fetch_array($s)){
		extract($e);
		echo '<li id="s'.$i.'" value="'.$id.'" onclick="selecteditems(this.id);" > '.$title.'</li>';
		$i++;
	}
}
else{
	echo 'please type a query to get results';
}

?>  
     </ul> 
      </div>
	  
	     </div>
 </div>