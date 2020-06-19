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

		<script src="../../../Users/Harshal/Downloads/dashSidebarMenuJs.js"> </script>
		<script src="../../../Users/Harshal/Downloads/dashPowerConsumptionGraphJs.js"> </script>

		<!--Exteral CSS-->
		<link rel="stylesheet" href="../../../Users/Harshal/Downloads/dashSidebar.css"/>
		<link rel="stylesheet" href="../../../Users/Harshal/Downloads/streetLightDetailsShowCardCss.css"/>
		<link rel="stylesheet" href="../../../Users/Harshal/Downloads/streetLightDetailsShowCss.css"/>
		
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
		margin-left:0px;
	}
	
	//css style to fetch streetlight horizontally
	.demo div {
    float: left;
    clear: none;
	}
	
	/* hover code for particular streetlight*/
	
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
							<a href="../../../Users/Harshal/Downloads/dashboard.php">Dashboard</a>
						</div>
					</div>
					<li style="background-color:#36C" >
						<a href="../../../Users/Harshal/Downloads/street_module.php">Street</a></li>
					<li>
						<a href="../../../Users/Harshal/Downloads/fault_module.php">Fault</a></li>
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
								<a href="../../../Users/Harshal/Downloads/addStreet.php">Add Streetlight</a></li>
							<li>
								<a href="../../../Users/Harshal/Downloads/viewStreet.php">View Streetlight</a></li>
                            <li>
								<a href="../../../Users/Harshal/Downloads/addTech.php">Add Technician</a></li>
							<li>
								<a href="../../../Users/Harshal/Downloads/viewTech.php">View Technician</a></li>
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
                    <div class="row card-center"  data-aos="zoom-out">
						<div class="col-lg-12 col-md-12 col-sm-12 card  center-block text-center" data-aos="zoom-in" style="margin-top:-30px; background:#EDE7BC;">
								<div class="dropdown" style="margin-top:-30px; height:90px;" data-aos="zoom-out">
                        	<form  method="post">
                                <select id="selected_city" onChange="changeCity()" style="padding:7px;margin-left:-830px;margin-top:40px;background:#212531;color:white;" required>
                                    <option value="">Select City</option>
                                    <?php
                                        include("../../../Users/Harshal/Downloads/connect.php");
                                        
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
                                <div></div>
                            </form>
                        </div>
					</div>
						<div class="row" style="margin-top:20px;" data-aos="zoom-out">
							<ul id="list" class="list-group list-group-horizontal list-group-flush">
								<div id = "demo"></div>
							</ul>
                            
						</div>
					</div>
					<br>`
                    
			<!----Street light on and off modal
            <!-- Modal content -->
              <div id="myModal" class="modal">
                <div class="modal-header">
                    <h2>Select Action</h2>
                    <span class="close">&times;</span>
                </div>
                
                <form method = "post" style = "margin: 30px; 120px;">
                	
                    <input id = "ON" type = "radio" name = "on" value = "On"/>Turn On<br /><br />
                    <input id = "OFF" type = "radio" name = "on" value = "Off" />Turn Off
                    <br /><br />
                    <input type = "button" value = "Take Action" onClick="takeAction()" style="margin-top:-10px; padding:8px; margin-left:70px; font-size:15px; background-color: #212531; color:white;" /> 
                </form> 
             
              </div>
              	</div>
				</div>
			</div> <!--End Of Page COntent-->
            
           
		<!-- AOS Animation-->
		<script>
			AOS.init();
			
			//script for ajax to get data from dependent select tag
			function changeCity(){
				if(document.getElementById("selected_city").value != prev_selected_city){
					
					document.getElementById("sensor").innerHTML = "<select style='padding:7px;margin-left:70px;margin-top:-38px;background:#212531;color:white;'><option>Select Sensor</option></select>";
					document.getElementById("camera").innerHTML = "<select style='padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;'><option>Select Camera</option></select>";
					
				}
				
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewStreet.php?city="+document.getElementById("selected_city").value,false);
				xmlhttp.send(null);
				//alert(xmlhttp.responseText);
				//alert(document.getElementById("selected_city").innerHTML);
				document.getElementById("area").innerHTML = xmlhttp.responseText;
				
				var prev_selected_city = document.getElementById("selected_city").value;
				
				
				if(document.getElementById("selected_city").value == ""){
					document.getElementById("sensor").innerHTML = "<select style='padding:7px;margin-left:70px;margin-top:-38px;background:#212531;color:white;'><option>Select Sensor</option></select>";
					document.getElementById("camera").innerHTML = "<select style='padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;'><option>Select Camera</option></select>";
					
				}
			}
			
			function changeArea(){
				if(document.getElementById("selected_area").value != prev_selected_area){
					document.getElementById("camera").innerHTML = "<select style='padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;'><option>Select Camera</option></select>"
				}
				
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewStreet.php?area="+document.getElementById("selected_area").value,false);
				xmlhttp.send(null);
				//alert(document.getElementById("selected_area").value);
				document.getElementById("sensor").innerHTML = xmlhttp.responseText;
				
				var prev_selected_area = document.getElementById("selected_area").value;
				
				if(document.getElementById("selected_area").value == ""){
					document.getElementById("camera").innerHTML = "<select style='padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;'><option>Select Camera</option></select>"
				}
			}
			
			function changeSensor(){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewStreet.php?sensor="+document.getElementById("selected_sensor").value,false);
				xmlhttp.send(null);
				//alert(document.getElementById("selected_sensor").value);
				document.getElementById("camera").innerHTML = xmlhttp.responseText;
				
			}

			//script for ajax to fetch streetlight from DB
			
			setInterval(function fetchStreet(){
				if(document.getElementById("selected_city").value != ""){
				//fetch streetlight from city only
					if(document.getElementById("selected_area").value == ""){
						
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","ajax_viewStreet.php?selected_city_id="+document.getElementById("selected_city").value,false);
						xmlhttp.send(null);
						
					}
					//fetch streetlight from camera only
					else if(document.getElementById("selected_sensor").value == ""){
						
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","ajax_viewStreet.php?selected_city_id="+document.getElementById("selected_city").value+"&selected_area_id="+document.getElementById("selected_area").value,false);
						xmlhttp.send(null);
						
					}
					//fetch streetlight from sensor only
					else if(document.getElementById("selected_camera").value == ""){
						
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","ajax_viewStreet.php?selected_city_id="+document.getElementById("selected_city").value+"&selected_area_id="+document.getElementById("selected_area").value+"&selected_sensor_id="+document.getElementById("selected_sensor").value,false);
						xmlhttp.send(null);
						
					}
					//fetch streetlight from camera only
					else{
						
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","ajax_viewStreet.php?selected_city_id="+document.getElementById("selected_city").value+"&selected_area_id="+document.getElementById("selected_area").value+"&selected_sensor_id="+document.getElementById("selected_sensor").value+"&selected_camera_id="+document.getElementById("selected_camera").value,false);
						xmlhttp.send(null);
						
					}
					
					document.getElementById("demo").innerHTML = xmlhttp.responseText;
				}else
					document.getElementById("demo").innerHTML = onclose;
			},5000);
			
			 
			// Get the modal
			var modal = document.getElementById("myModal");
			
			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");
			
			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];
			
			// When the user clicks on the button, open the modal
			
			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}
			
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
				modal.style.display = "none";
			  }
			}
			
			// javascript for selecting streetlight_id
			var st_id;
			function myfun(id){
			    //alert(st_id);
				st_id = id;
				
				modal.style.display = "block";
			}
			
			// javascript for selecting streetlight_status
			var st_status,st_state;
			function myfun1(status){
				if(status == 0){
				    st_state = status;
					st_status = "Off";
				}
				else{
				    st_state = status;
					st_status = "On";
				}
					
				var status = document.getElementById("ON").value;
				if(st_status == "On")
					document.getElementById("ON").checked = true;
			    else if(st_status == "Off")
					document.getElementById("OFF").checked = true;
			}
			
  			var status;
			
  			function takeAction(){
  			    //alert(st_id);
				//alert(st_state);
				if(document.getElementById("ON").checked == true){
					if(document.getElementById("ON").value == st_status)
						alert("Already LED is on");
					else{
						
					    st_state = 1;
					    var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","ajax_manualONOFF.php?st_id="+st_id+"&st_status="+st_state,false);
						xmlhttp.send(null);
						//document.getElementById("demo").innerHTML = xmlhttp.responseText;
					}
						
				}
				else{
					if(document.getElementById("OFF").value == st_status)
						alert("Already LED is off");
					else{
					    st_state = 0;
					    var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","ajax_manualONOFF.php?st_id="+st_id+"&st_status="+st_state,false);
						xmlhttp.send(null);
						//document.getElementById("demo").innerHTML = xmlhttp.responseText;
					}
				}
				modal.style.display = "none";
			}

		</script>
	</body>	
</html>