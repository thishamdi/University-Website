<?php
include('config.php');


if (isset($_GET['event_id'])) {

	$event_id = $_GET['event_id'];

	$stmt = $conn->prepare("SELECT * FROM events WHERE event_id = ?");

	$stmt->bind_param("i",$event_id);

	$stmt->execute();

	$event = $stmt->get_result();


}else {
	header('location: index.php');
}

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
								Event Details			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event-details.html"> Event Details</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">

					<?php while($row = $event->fetch_assoc()){ ?>

					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="img/<?php echo $row['event_image']; ?>" alt="">
							</div>
							<div class="details-content">
								
								<h4><?php echo $row['event_name']; ?></h4>
								
								<p>
								<?php echo $row['event_text']; ?>
								</p>
							</div>
							<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
									<a href="#" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Prev Event</a>
									<a href="#" class="nav-next">Next Event<span class="lnr lnr-arrow-right"></span></a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span><?php echo $row['start_date']; ?></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>End date</span>
										<span><?php echo $row['end_date']; ?></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Ticket Price</span>
										<span><?php echo $row['ticket_price']; ?></span>
									</li>														
								</ul>
							</div>

							
						<!--	<div class="single-event-details">
								<h4>Venue</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Place</span>
										<span>Main Hallroom</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Street</span>
										<span>Bullevard Street</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Santa Monica</span>
									</li>														
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Organiser</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Company</span>
										<span>Colorlib</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Street</span>
										<span>Bullevard Street</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Santa Monica</span>
									</li>														
								</ul>
							</div>														
						</div>
					</div>   -->

					<?php } ?>

				</div>	
			</section>
			<!-- End event-details Area -->
					
				
								    			

			<?php include 'includes/footer.php'; ?>