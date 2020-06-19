<html>
	<head>
		<title>SMART STREETLIGHT MANAGEMENT SYSTEM (SSMS)</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap and Other Links-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"> </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
		
		<script type="text/javascript"> </script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<script src="dashSidebarMenuJs.js"> </script>
		<script src="dashPowerConsumptionGraphJs.js"> </script>

		<!--Exteral CSS-->
		<link rel="stylesheet" href="dashSidebar.css"/>
		<link rel="stylesheet" href="streetLightDetailsShowCardCss.css"/>
		<link rel="stylesheet" href="streetLightDetailsShowCss.css"/>
		
		<!--Extra CSS-->
		

		<!--Data Aos Animation-->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> </script>

	<style>
	<!--- Css for add Tech Form -->
		body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box}
		
		select{
			padding: 5px;
		}
		input{
			background: #f1f1f1;
			padding: 7px 20px;
		}
		button {
			background-color: #212531;
			font-size:18px;
			color: white;
			padding: 10px;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}
		
		
		.container {
			padding: 16px;
		}
		
		

	</style>

	</head>

	<body style="background-color: #ffffff !important;">
		<div id="wrapper">
			<div class="overlay">
			</div>
			
			<!--SideBar Nav-->
			<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<div  class="sidebar-header">
						<div class="sidebar-brand">
							<a href="dashboard.php">Dashboard</a>
						</div>
					</div>
					<li >
						<a href="street_module.php">Street</a></li>
					<li>
						<a href="fault_module.php">Fault</a></li>
					<li>
						<a href="#powerConsumption">Power Consumption</a></li>
					<li>
						<a href="#history">History</a></li>
					<li style="background-color:#36C" class="dropdown">
						<a href="#more" class="dropdown-toggle"  data-toggle="dropdown">More
							<span class="caret"></span></a>
						<ul class="dropdown-menu animated fadeInLeft" role="menu">
							<div class="dropdown-header"></div>
                            
							<li>
								<a href="addStreet.php">Add Streetlight</a></li>
							<li>
								<a href="viewStreet.php">View Streetlight</a></li>
                            <li>
								<a href="addTech.php">Add Technician</a></li>
							<li>
								<a href="viewTech.php">View Technician</a></li>
						</ul>
					</li>
					<li>
						<a href="#logout">Log Out</a></li>
				</ul>
				</nav>
			
			<!--Page Content-->
			<div id="page-content-wrapper">
				<!--Toggle Button-->
				<div>
					<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
						<span class="hamb-top"></span>
						<span class="hamb-middle"></span>
						<span class="hamb-bottom"></span>
					</button>
					<!--Header-->
					<header style="border-bottom:groove; background-color:#F4F4F4; width:1500px; position:fixed;">
						<h2 class="heading" style="padding:10px 20px;">More</h2>
                    </header>
				</div>
				<br><br>
				
				
				<!--Status Info-->
				<div class="container-fluid">
					<div class="container">
        <?php 
            include('connect.php');
            if(isset($_REQUEST['tech_id'])){
                $techid = $_REQUEST['tech_id'];
                $fetch_tech_data_q = "select * from technician where tech_id = '".$techid."'"; 
                //echo $fetch_tech_data_q;
                $execute_q = mysqli_query($con,$fetch_tech_data_q);
                //echo $execute_q;
                $res = mysqli_fetch_assoc($execute_q);
            
        ?>
          <form method = "post" action = "updateTech.php?tech_update_id=<?php echo $techid;?>">
            <div class="container" style="height:auto;width:700px;margin-left:300px;border:groove;margin-top:-25px; position:inherit;">
              <div style = "height:50px; background-color:#212531; color:white;">
                   	<h3 style="padding-left:20px; padding-top:10px;">Update Technician</h3>
                   	<hr />
              </div><br>
              
              <label style="margin-right:50px;">Full Name</label>
              <input type = "text" name = "tech_contact" value= "<?php echo $res['tech_name'];?>" readonly/>
              <br/>      <br/>      <br/>
              
              
              <label style="margin-right:80px;">Email</label>
              <input type = "text" name = "tech_contact" value= "<?php echo $res['tech_email'];?>" style = "margin-left:3px;" readonly/>
              <br/>      <br/>      <br/>
        
                <?php 
                    //To get Area id,area name,city id
                    $fetch_area_name_q = "select area_id,area_name,city_id from area where area_id in (select area_id from technician where tech_id = '".$techid."')";
                    $execute_area_q = mysqli_query($con,$fetch_area_name_q);
                    $result = mysqli_fetch_assoc($execute_area_q);
                    $area_id = $result['area_id'];
                    $area_name = $result['area_name'];
                    $city_id = $result['city_id'];
                    
                    //to get city name
                    $fetch_city_name_q = "select city_id,city_name from city where city_id = '".$city_id."'";
                    $execute_city_q = mysqli_query($con,$fetch_city_name_q);
                    $result = mysqli_fetch_assoc($execute_city_q);
                    $city_name = $result['city_name'];
                
                ?>		
        
                <label>Selected City  </label>
                <input type = "text" name = "tech_city" value = "<?php echo $city_name;?>" style = "margin-left:30px;" readonly>
                <select style="margin-left:16px" id="selected_city" onChange="changeCity()" name="city_name" >
                    <option value = "">update</option>
                
                <?php
                    
                    //fetch city from city table
                    $fetch_city_q = "select * from city";
                    $execute_q = mysqli_query($con,$fetch_city_q);
                    
                    while($result = mysqli_fetch_assoc($execute_q)){
                        echo "<option value=$result[city_id]> $result[city_name] </option>";
                    }
                ?>
            </select>
        <br/>
        <br/>
        
                <label>Selected Area  </label>
                <input type = "text" name = "tech_area" value = "<?php echo $area_name;?>" style = "margin-left:23px;" readonly>
                <div id = "area" style="margin:-30px 370px; width:200px;">
                <select name = "area_name">
                    <option value = "">update</option>
                </select>
             </div>
                    <br/><br/><br/> 
              
              <label>Contact</b></label>
        
              <input type = "text" name = "tech_contact" value= "<?php echo $res['tech_contact'];?>" style = "margin-left:68px;" required/>
        
              <button type="submit" name="submit" class="signupbtn"  style="margin-top:35px"><b>Update</b></button>
              </div>
        
          </form>
        
        
        </body>
        
        <?php 
            }
            
            if(isset($_REQUEST['tech_update_id'])){
                
                
                if($_POST['city_name'] == ""){
                    
                    //fetch old detail of tech_area_id from area_name
                    $fetch_area_id = mysqli_query($con,"select area_id from area where area_name ='".$_POST['tech_area']."'"); 
                    $res = mysqli_fetch_assoc($fetch_area_id);
            
                    //update technician details by updating only contact	
                    $tech_update_q = "update technician set tech_contact =".$_POST['tech_contact'].",area_id=".$res['area_id']." where tech_id=".$_REQUEST['tech_update_id'];	
                }else{
                
                    //update technician details by updating only city and area	
                    $tech_update_q = "update technician set tech_contact =".$_POST['tech_contact'].",area_id=".$_POST['area_name']." where tech_id=".$_REQUEST['tech_update_id'];	
                }
                
				echo $tech_update_q;
                //query executed according to above three conditions
                $execute_q = mysqli_query($con,$tech_update_q);
                
                //echo $tech_update_q;
                
                // Redirect to the viewTech.php
                header("location:viewTech.php?msg=1");
                
            }
        ?>
        </div>
        </div>
        
        <!--java script for select tag -->
        <script type="text/javascript">
        function changeCity(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","ajax_addStreet.php?city="+document.getElementById("selected_city").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            document.getElementById("area").innerHTML = xmlhttp.responseText;
            
            if(document.getElementById("selected_city").value == ""){
                document.getElementById("sensor").innerHTML = "<label>Select Sensor </label><select><option>select</option></select>"
                document.getElementById("camera").innerHTML = "<label>Select Camera </label><select><option>select</option></select>"
                document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
            }
        }
        </script>

                    
	</body>
</html>

<!DOCTYPE html>
<html>
<style>

</style>
<body>




</html>
