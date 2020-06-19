<?php
	include("connect.php");
	
	if(isset($_REQUEST['tech_id'])){
		
		//delete technician detail
		$delete_tech_q = "delete from technician where tech_id = ".$_REQUEST['tech_id'];
		$execute_q = mysqli_query($con,$delete_tech_q);
		?><h5 style='color:#F00;margin:40px;'>Technician Removed Successfully</h5><?php
		$city = $_REQUEST['city'];
		$fetch_tech_q = "select * from technician where area_id in (select area_id from area where city_id = '".$city."')";
	$execute_tech_q = mysqli_query($con,$fetch_tech_q);
		}
	
if(mysqli_num_rows($execute_tech_q) > 0)
		{
		?>	
<div style="margin:30px 50px;">
<table border="5px" align="center" style="margin-left:110px; font-size:18px" width="850px">
                                    <tr>
                                        <th><label>Technician Name</label></th>
                                        <th><label>Technician Email</label></th>
                                        <th><label>Technician Contact</label></th>
                                        <th colspan="2"><label>Action</label></th>
                                    </tr>
	<?php

		while($res = mysqli_fetch_assoc($execute_tech_q)){
                                            
											//View DATA IN TaBLE FORMAT
			echo "<tr><td>".$res['tech_name']."</td><td>".$res['tech_email']."</td><td>".$res['tech_contact']."</td><td><button type='button' name='delete' id = $res[tech_id] onclick = 'deleteTech(this.id)' style='font-size:16px;padding:5px;'>Delete</button></td><td><button type='button' name='update' id = $res[tech_id] onclick = 'updateTech(this.id)' style='font-size:16px;padding:5px;'>Update</button></td></tr>";
			}

		}else{
			?><h6 style='color:#F00;margin-left:50px'>No Technician Found</h5><?php
			}

?>

