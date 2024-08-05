<?php
	require_once('connect.php');
	$query = "SELECT response_id, citizen_name, citizen_response FROM response;";
	$result = mysqli_query($conn, $query);
	$query1 = "SELECT citizen_response FROM response ORDER BY RAND() LIMIT 1;";
	$result1 = mysqli_query($conn, $query1);
	$query2 = "SELECT citizen_response FROM response ORDER BY RAND() LIMIT 1;";
	$result2 = mysqli_query($conn, $query2);
	$query3 = "SELECT citizen_response FROM response ORDER BY response_id DESC LIMIT 3;";
	$result3 = mysqli_query($conn, $query3);
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>HSRM Zambia for covid-19</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/mini%20flagx10.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/mini++%20flag.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Public Actions</h2>
							
						</div>
					</div>
				</div>
	<!-- COPY INTO YOUR OWN TEMPLATE PAGE -->
				<div class="container-fluid">
					<div class="row">
					   <div class="col-md-12">
						  <div class="titlepage text_align_center ">
							 <h2>Take Action</h2>
							 <p>Get access to the information you entered and and update</p>
						  </div>
					   </div>
					</div>
					<div class="row d_flex">
					  <div class="col">
						  <div class="card">
							 <div class="card-header">
								<h1 class="display-6 text-center">Fetch data from Database</h1>
							 </div>
							 <div class="card-body table-responsive">
								<table class="table table-bordered">
								   <tr class="bg-dark text-white">
									  <td>Resonse ID</td>
									  <td>Full Names</td>
									  <td>Response</td>
								   </tr>
								   <tr>
									  <?php
										 while($row = mysqli_fetch_assoc($result)){
									  ?>
									   <td><?php echo $row['response_id']; ?></td> 
									   <td><?php echo $row['citizen_name']; ?></td> 
									   <td><?php echo $row['citizen_response']; ?></td>
								   </tr>   
									  <?php
										 }
		
									  ?>
								   
								</table>
							 </div>
						  </div>
					  </div>
					</div>
				</div>
			<!-- space -->
				<br><br>
				<div class="container-fluid">
					<div class="row">
					   <div class="col-md-12">
						  <div class="titlepage text_align_center ">
							 <h2>Response from Members</h2>
							 <p>Here from the people of zambia how they are handling and responding to the pandemic.</p>
						  </div>
					   </div>
					</div>
					<div class="row d_flex">
					   <div class=" col-md-4">
						  <div class="latest text_align_center">
							 <figure><img src="#" alt="#"/></figure>
							 <div class="nostrud">
								<h3>Response 01</h3>
								<p>
								   <?php
									  if($row = mysqli_fetch_assoc($result1)){
										 echo $row['citizen_response'];
									  }
									  else{
										 echo "No Result Found";
									  }
								   ?>
								</p>
							 </div>
						  </div>
					   </div>
					   <div class=" col-md-4">
						  <div class="latest text_align_center">
							 <figure><img src="images/jax_1.jpeg" alt="#"/></figure>
							 <div class="nostrud">
								<h3>Response 02</h3>
								<p>
								   <?php
									  if($row = mysqli_fetch_assoc($result2)){
										 echo $row['citizen_response'];
									  }
									  else{
										 echo "No Result Found";
									  }
								   ?>
								</p>
							 </div>
						  </div>
					   </div>
					   <div class=" col-md-4">
						  <div class="latest text_align_center">
							 <figure><img src="images/stock1.jpg" alt="#"/></figure>
							 <div class="nostrud">
								<h3>Response 03</h3>
								<p>
								   <?php
										 if($row = mysqli_fetch_assoc($result3)){
											echo $row['citizen_response'];
										 }
										 else{
											echo "No Result Found";
										 }
								   ?>
								</p>
							 </div>
						  </div>
					   </div>
					</div>
				</div>
	<!-- END COPY INTO YOUR OWN TEMPLATE PAGE FROM HERE-->
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>