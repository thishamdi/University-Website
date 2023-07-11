<?php

include('config.php');

$stmt = $conn->prepare("SELECT * FROM events");

$stmt->execute();

$get_events = $stmt->get_result();



?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Institut Supérieur d'Informatique du Kef
	</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">							
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">			
		<link rel="stylesheet" href="css/jquery-ui.css">			
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>	

	<?php include 'includes/header-top.php'; ?>
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Events				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="events.html"> Events</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">


						<?php while($row = $get_events->fetch_assoc()){ ?>


						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div style="height: 160px;" class="col-12 col-md-6 thumb">
									<img style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid" src="img/<?php echo $row['event_image']; ?>" alt="">
								</div>
								<div style="height: 160px;" class="detials col-12 col-md-6">
									<a href="event-details.php?event_id=<?php echo $row['event_id']; ?>"><h4> <?php echo $row['event_name']; ?></h4></a>
									<p>
										<?php echo $row['event_description']; ?>
									</p>
								</div>
							</div>
						</div>	
						
						<?php } ?>		
												
					</div>
					<div class="row d-flex justify-content-center">
					<a href="#" class="text-uppercase primary-btn mx-auto mt-40">Load more events</a>	
					</div>	

				</div>	
			</section>
			<!-- End events-list Area -->
				

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-8 cta-left">
							<h1>Our Events Calendar </h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="calendar.php">view Calendar</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    			

			<?php include 'includes/footer.php'; ?>