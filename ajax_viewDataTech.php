<?php
	include("connect.php");
	//changeCity() function of javascript is invoked from addStreet.php
	if(isset($_GET['city'])){
		$city = $_GET['city'];

		$fetch_tech_q = "select * from technician where area_id in (select area_id from area where city_id = '".$city."')";
	$execute_q = mysqli_query($con,$fetch_tech_q);
	}	

elseif (isset($_GET['area'])){
		$area = $_GET['area'];
	$fetch_tech_q = "select * from technician where area_id = '".$area."'";
	$execute_q = mysqli_query($con,$fetch_tech_q);
		
		}

if(mysqli_num_rows($execute_q) > 0)
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

		while($res = mysqli_fetch_assoc($execute_q)){
                                            
											//View DATA IN TaBLE FORMAT
			echo "<tr><td>".$res['tech_name']."</td><td>".$res['tech_email']."</td><td>".$res['tech_contact']."</td><td><button type='button' name='delete' id = $res[tech_id] onclick = 'deleteTech(this.id)' style='font-size:16px; margin-top:10px'>Delete</button></td>";?><td><button name='update' id = $res[tech_id]  onclick="window.location.href = 'updateTech.php?tech_id=<?php echo $res['tech_id'];?>';" style='font-size:16px; margin-top:10px'>Update</button></td></tr><?php 
			}

		}else{
			?><h6 style='color:#F00;margin-left:50px'>No Technician Found</h5><?php
			}

?>
