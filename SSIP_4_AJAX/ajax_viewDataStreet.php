<?php
	include("connect.php");
	//changeCity() function of javascript is invoked from addStreet.php
	if(isset($_GET['city'])){
		$city = $_GET['city'];
		
		$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id in (select sensor_id from sensor where area_id in (select area_id from area where city_id = '".$city."')))";
	$execute_q = mysqli_query($con,$fetch_steetlight_q);
	}	

elseif (isset($_GET['area'])){
		$area = $_GET['area'];
		
	
		$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id in (select sensor_id from sensor where area_id = '".$area."'))";
		//echo $fetch_steetlight_q;
												//echo $fetch_steetlight_q; 		
		$execute_q = mysqli_query($con,$fetch_steetlight_q);
																					
	
	}	
	
	
elseif (isset($_GET['sensor'])){
		$sensor = $_GET['sensor'];
	
		$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id = '".$sensor."')";
	}	
	
elseif (isset($_GET['camera'])){
		$camera = $_GET['camera'];
	
		$fetch_steetlight_q = "select * from streetlight where camera_id = '".$camera."'";
	}	


if(mysqli_num_rows($execute_q) > 0)
		{
		?>	
<div style="margin:30px 50px;">
<table border="5px" align="center" style="margin-left:150px; font-size:18px" width="750px">
											<tr>
												<th><label>Street Light ID</label></th>
												<th><label>Street Light Status</label></th>
												<th><label>Power Consumeption</label></th>
												<th><label>Camera</label></th>
												<th><label>Action</label></th>									
											</tr>
	<?php

		while($res_streetlight = mysqli_fetch_assoc($execute_q)){
                                            
											//View DATA IN TaBLE FORMAT
			echo "<tr><td>".$res_streetlight['st_id']."</td><td>".$res_streetlight['st_status']."</td><td>".$res_streetlight['power_consume']."</td><td>".$res_streetlight['camera_id']."</td><td><button type='button' name='delete' id = $res_streetlight[st_id] onclick = 'deleteStreet(this.id)' style='font-size:16px; margin-top:10px'>Delete</button></td></tr>";
			}

		}else{
			?><h6 style='color:#F00;margin-left:50px'>No Streetlight Found</h5><?php
			}

?>

</table>
</div>
