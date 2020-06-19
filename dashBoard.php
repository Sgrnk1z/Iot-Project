<html>
<head>
	<title>SMART STREETLIGHT MANAGEMENT SYSTEM (SSMS)</title>

	<!-- Bootstrap and Other Links-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"> </script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>
	<script type="text/javascript"> </script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<script src="dashSidebarMenuJs.js"></script>
	<script src="dashPowerConsumptionGraphJs.js"></script>

	<!--Exteral CSS-->
	<link rel="stylesheet" href="dashSidebar.css"/>
	<link rel="stylesheet" href="dashCard.css"/>
	<link rel="stylesheet" href="dashGraphContent.css"/>

	<!--Extra CSS-->
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="timeline.css">
	<link rel="stylesheet" href="stylesheet.css">

	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="all.min.css">
	<link rel="stylesheet" href="slick.min.css">
	<link rel="stylesheet" href="owl.carousel.min.css">
	<link rel="stylesheet" href="animation.aos.min.css">
	<link rel="stylesheet" href="animate.min.css">

	<!--Data Aos Animation-->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> </script>
	

</head>

<body>
	<div id="wrapper">
		<div class="overlay">
		</div>
		<!--SideBar Nav-->
			<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
				<ul class="nav sidebar-nav">
					<div class="sidebar-header">
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
					<li class="dropdown">
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
			</nav>		<!--Sidebar Wrapper-->
		
		<!--Page Content-->
		<div id="page-content-wrapper">
		<!--Toggle Button-->
			<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
			</button>
			<!--cards-->
			<div class="container-fluid">
				<div class="row">
					<!--TOTAL STREETLIGTS CARD-->
						<div class="col-sm-12 col-md-6 col-lg-3 col-lg-offset-2 grid-margin stretch-card" data-aos="fade-up">
						<div class="card bg-gradient-primary text-white text-center card-shadow-primary">
							<div class="card-body">
								<h5 class="font-weight-normal">TOTAL STREETLIGHTS</h5>
								<h1 class="mb-0">2000</h1>
							</div>	
						</div>
					</div>
					<!--WORKING STREETLIGTS CARD-->
					<div class="col-sm-12 col-md-6 col-lg-3 col-lg-offset-2 grid-margin stretch-card">
						<div class="card bg-gradient-danger text-white text-center card-shadow-danger" data-aos="fade-up">
							<div class="card-body">
								<h5 class="font-weight-normal">WORKING STREETLIGHTS</h5>
								<h1 class="mb-0">1200</h1>
							</div>
						</div>
					</div>
					<!--FAULTY STREETLIGTS CARD-->
					<div class="col-sm-12 col-md-6 col-lg-3 col-lg-offset-2 grid-margin stretch-card" data-aos="fade-up">
						<div class="card bg-gradient-warning text-white text-center card-shadow-warning">
							<div class="card-body">
								<h5 class="font-weight-normal">FAULTY STREETLIGHTS</h5>
								<h1 class="mb-0">600</h1>
							</div>	
						</div>
					</div>
					<!--UNDER MAINTANAACE CARD-->
					<div class="col-sm-12 col-md-6 col-lg-3 grid-margin stretch-card" data-aos="fade-up">
						<div class="card bg-gradient-info text-white text-center card-shadow-info">
							<div class="card-body">
								<h5 class="font-weight-normal">UNDER MAINTANANCE</h5>
								<h1 class="mb-0">400</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End of Cards row-->
			
			<!-- DROPDOWN LIST-->
			
			<div class="container-fluid">
					<div class="row card-center">
						<div class="col-lg-12 col-md-12 col-sm-12 card  center-block text-center" data-aos="zoom-in">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle mr-5 mb-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									SELECT CITY
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>								</div>
						</div>
						
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle mb-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									SELECT AREA
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
						
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle side-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								SELECT CAMERA
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a> 
							</div>
						</div>
						
						<div class="">
							<button type="button" class="btn-dark btn ml-4">
								SUBMIT
							</button>
						</div>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
	</div>
	<!-- AOS Animation-->
		<script>
		AOS.init();
		</script>
</body>
</html>