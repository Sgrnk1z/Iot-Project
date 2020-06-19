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
	/* css for modal  */
	.t{	
  	  padding:20px;
 	  font-size:18px;
	}
	
	.modal-header {
	  padding: 1px 16px;
	  background-color: #212531;
	  color: white;
	}
	
	/* Modal Content/Box */
	.modal {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  left: 0;
	  top: 0;
	  background-color: #fefefe;
	  margin: 150px 650px; /* 15% from the top and centered */
	  border: 3px solid #888;
	  width: 300px; /* Could be more or less, depending on screen size */
	  height: 250px; 
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	  -webkit-animation-name: animatetop;
	  -webkit-animation-duration: 0.4s;
	  animation-name: animatetop;
	  animation-duration: 0.4s
	}
	
	/* Add Animation */
	@-webkit-keyframes animatetop {
	  from {top:-300px; opacity:0} 
	  to {top:0; opacity:1}
	}
	
	@keyframes animatetop {
	  from {top:-300px; opacity:0}
	  to {top:0; opacity:1}
	}
	
	/* The Close Button */
	.close {
	  color: #aaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}
	
	.close:hover,
	.close:focus {
	  color: black;
	  text-decoration: none;
	  cursor: pointer;
	}
	/* End css for modal  */
	
	/* css for selecting streetlight */
	li:focus {
  		background:#666;
	}
	.selected{
		background:#666;
	}
	/* End css for selecting streetlight */
	
	li{
		margin-left:30px;
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
					<div class="sidebar-header">
						<div class="sidebar-brand">
							<a href="#">Dashboard</a>
						</div>
					</div>
					<li style="background-color:#36C">
						<a href="street_module.php">Street</a></li>
					<li>
						<a href="#fault">Fault</a></li>
					<li>
						<a href="#map">Map</a></li>
					<li>
						<a href="#powerConsumption">Power Consumption</a></li>
					<li>
						<a href="#history">History</a></li>
					<li class="dropdown">
						<a href="#more" class="dropdown-toggle"  data-toggle="dropdown">More
							<span class="caret"></span></a>
						<ul class="dropdown-menu animated fadeInLeft" role="menu">
							<div class="dropdown-header"></div>
                            
							<li>
								<a href="#add">Add Streetlight</a></li>
							<li>
								<a href="#update">Update Streetlight</a></li>
							<li>
								<a href="#remove">Remove Streetlight</a></li>
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
			<!--Sidebar Wrapper-->

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
						<h2 class="heading" style="padding:3px 20px;">Street</h2>
                    </header>
				</div>
				<br><br>
				
				
				<!--Status Info-->
				<div class="container-fluid">
					<div class="container">
                    <div class="row card-center" >
						<div class="col-lg-12 col-md-12 col-sm-12 card  center-block text-center" data-aos="zoom-in" style="margin-top:-30px; background:#EDE7BC;">
							<div class="dropdown" style="margin-top:-30px; height:90px;">
                        	<form action="street_module - Copy.php" method="post">
                                <select id="selected_city" onChange="changeCity()" style="padding:7px;margin-left:-830px;margin-top:40px;background:#212531;color:white;" required>
                                    <option value="">Select City</option>
                                    <?php
                                        include("connect.php");
                                        
                                        //fetch city from city table
                                        $fetch_city_q = "select * from city";
                                        $execute_q = mysqli_query($con,$fetch_city_q);
                                        
                                        while($res = mysqli_fetch_assoc($execute_q)){
                                            echo "<option value=$res[city_id]> $res[city_name] </option>";
                                        }
                                    ?>
                                </select>
                                
                                <div id = "area" >
                                    <select style="padding:7px;margin-left:-380px;margin-top:-38px;background:#212531;color:white;">
                                        <option>Select Area</option>
                                    </select>
                                </div>
                                
                                <div id = "sensor" >
                                    <select style="padding:7px;margin-left:70px;margin-top:-38px;background:#212531;color:white;">
                                        <option>Select Sensor</option>
                                    </select>
                                </div>
                                
                                <div id = "camera" >
                                    <select style="padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;">
                                        <option>Select Camera</option>
                                    </select>
                                </div>
    
                                <button  name="submit" style="padding:6px;margin:-40px 1000px;background:#212531;color:white;">Submit</button>
                                <div></div>
                            </form>
                        </div>
					</div>
				
						<div class="row">
							<ul id = "list" class="list-group list-group-horizontal list-group-flush">
                            <?php
									//fetch streetlights detail accoriding to seleceted address
								if(isset($_POST['submit'])){
										
										$camera_id = $_POST['camera_id'];
										
										if($camera_id == ""){
											
											//fetch streetlight detail according to sensor
											$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id = '".$_POST[                                                                  'sensor_id']."')";
											//echo $fetch_steetlight_q; 		
											$execute_q = mysqli_query($con,$fetch_steetlight_q);
											
										}else{
						
											//fetch streetlight detail according to camera
											$fetch_steetlight_q = "select * from streetlight where camera_id = '".$_POST['camera_id']."'";
											//echo $fetch_steetlight_q; 		
											$execute_q = mysqli_query($con,$fetch_steetlight_q);
										
										}
										
										if(mysqli_num_rows($execute_q) > 0 ){
											
											while($res_streetlight = mysqli_fetch_assoc($execute_q)){
											
											
											}
										}
										?><li tabindex="1" class="list-group-item">
                                                    <i class="fas fa-lightbulb fa-4x" style="color:#00ff00;"></i>
                                                    <h4 style="margin:5px -5px; font-size:15px;">1223</h4>
                                              </li>
											  <li tabindex="1" class="list-group-item">
                                                    <i class="fas fa-lightbulb fa-4x" style="color:#00ff00;"></i>
                                                    <h4 class="mt-2" align="center">2</h4>
                                              </li><?php
								}?>
								
						
							</ul>
						</div>
					</div>
				</div>
			</div> <!--End Of Page COntent-->
		<!-- AOS Animation-->
		<script>
			AOS.init();
			
				//script for ajax to get data from dependent select tag
			function changeCity(){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewStreet.php?city="+document.getElementById("selected_city").value,false);
				xmlhttp.send(null);
				//alert(xmlhttp.responseText);
				document.getElementById("area").innerHTML = xmlhttp.responseText;
				
				if(document.getElementById("selected_city").value == ""){
					document.getElementById("sensor").innerHTML = "<label>Select Sensor </label><select><option>select</option></select>"
					document.getElementById("camera").innerHTML = "<label>Select Camera </label><select><option>select</option></select>"
					document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
				}
			}
			
			function changeArea(){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewStreet.php?area="+document.getElementById("selected_area").value,false);
				xmlhttp.send(null);
				//alert(document.getElementById("selected_area").value);
				document.getElementById("sensor").innerHTML = xmlhttp.responseText;
				
				if(document.getElementById("selected_area").value == ""){
					document.getElementById("camera").innerHTML = "<label>Select Camera </label><select><option>select</option></select>"
					document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
				}
			}
			
			function changeSensor(){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewStreet.php?sensor="+document.getElementById("selected_sensor").value,false);
				xmlhttp.send(null);
				//alert(document.getElementById("selected_sensor").value);
				document.getElementById("camera").innerHTML = xmlhttp.responseText;
				
			}
			
			// javascript for selecting streetlight_id
			var items = document.querySelectorAll("#list li");
            var street_id;
            for(var i = 0; i < items.length; i++)
            {
                items[i].onclick = function(){
					//modal.style.display = "block";
					//get Selected Strretlight_id 
					var detail = this.innerHTML;
					street_id = detail.split("15px;'>");
					alert(street_id[0]);
                };
            }
		</script>
	</body>
</html>