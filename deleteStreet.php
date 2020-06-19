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
	include("connect.php");
	
	if(isset($_REQUEST['st_id'])){
		
		//delete streetlight detail
		$delete_streetlight_q = "delete from streetlight where st_id ='".$_REQUEST['st_id']."'";
		$execute_q = mysqli_query($con,$delete_streetlight_q);
		?><h5 style='color:#F00;margin:40px;'>Streetlight Removed Successfully</h5><?php
		//header("location:viewStreet.php");
		$city = $_REQUEST['city'];
		$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id in (select sensor_id from sensor where area_id in (select area_id from area where city_id = '".$city."')))";
		//echo $fetch_steetlight_q;
												//echo $fetch_steetlight_q; 		
		$execute_q = mysqli_query($con,$fetch_steetlight_q);
				
		if(mysqli_num_rows($execute_q) > 0)
				{
		
					while($res_streetlight = mysqli_fetch_assoc($execute_q)){
													
													//View DATA IN TaBLE FORMAT
													
					echo "<tr><td>".$res_streetlight['st_id']."</td><td>".$res_streetlight['st_status']."</td><td>".$res_streetlight['power_consume']."</td><td>".$res_streetlight['camera_id']."</td><td><button type='button' name='delete' id = $res_streetlight[st_id] onclick = 'deleteStreet(this.id)' style='font-size:16px; margin-top:10px'>Delete</button></td></tr>";
			}
		
		}
	else
	{
				?><h6 style='color:#F00;margin-left:50px'>No Streetlight Found</h5><?php
	}

}
?>
