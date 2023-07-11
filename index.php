<?php

include('config.php');

//get events :

$stmt1 = $conn->prepare("SELECT * FROM events");

$stmt1->execute();

$get_events = $stmt1->get_result();

//get articles :

$stmt2 = $conn->prepare("SELECT * FROM article");

$stmt2->execute();

$get_articles = $stmt2->get_result();

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
	<title>Institut Supérieur d'Informatique du Kef </title>

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
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h1 class="text-uppercase">
						Institut Supérieur d’Informatique du Kef
					</h1>
					<p class="pt-10 pb-10">
						République Tunisienne
						Ministère de l'Enseignement Supérieur et de Recherche Scientifique
						Université de Jendouba </p>
					<a href="login.php" class="primary-btn text-uppercase">Login</a>
					<a href="registration.php" class="primary-btn text-uppercase">Register</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="single-feature">
						<div class="title">
							<h4>LCS</h4>
						</div>

					</div>
				</div>
				<div class="col-lg-2">
					<div class="single-feature">
						<div class="title">
							<h4>LCE</h4>
						</div>

					</div>
				</div>
				<div class="col-lg-2">
					<div class="single-feature">
						<div class="title">
							<h4>SIW</h4>
						</div>

					</div>
				</div>
				<div class="col-lg-2">
					<div class="single-feature">
						<div class="title">
							<h4>ASRI</h4>
						</div>

					</div>
				</div>
				<div class="col-lg-2">
					<div class="single-feature">
						<div class="title">
							<h4>AWI</h4>
						</div>

					</div>
				</div>
				<div class="col-lg-2">
					<div class="single-feature">
						<div class="title">
							<h4>NTICDIA</h4>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End feature Area -->



	<!-- Start upcoming-event Area -->
	<section class="upcoming-event-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Upcoming Events of our Institute</h1>
						<p>If you're a serious computer engineering enthusiast like many of us
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="active-upcoming-event-carusel">


					<?php while($row = $get_events->fetch_assoc()){ ?>

					<div class="single-carusel row align-items-center">
						<div style="height: 160px;" class="col-12 col-md-6 thumb">
							<img style=" width: 100%; height: 100%; object-fit: cover; " class="img-fluid" src="img/<?php echo $row['event_image']; ?>" alt="">
						</div>
						<div style="height: 160px;" class="detials col-12 col-md-6">
							
							<a href="event-details.php?event_id=<?php echo $row['event_id']; ?>">
								<h4>
									<?php echo $row['event_name']; ?>
								</h4>
							</a>
							<p>
								<?php echo $row['event_description']; ?>
							</p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</section>
	<!-- End upcoming-event Area -->



	<!-- Start blog Area -->
	<section class="blog-area pb-100" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Latest posts from our Blog</h1>
						<p>In the history of modern computer engineering, there is</p>
					</div>
				</div>
			</div>
			<div class="row">

				<?php while($row = $get_articles->fetch_assoc()){ ?>

				<div class="col-lg-3 col-md-6 single-blog">
					<div style="height: 160px;" class="thumb">
						<img style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid" src="img/<?php echo $row['article_image']; ?>" alt="">
					</div>
					<p class="meta"><?php echo $row['created_at']; ?> | By <a href="#"><?php echo $row['article_auther']; ?></a></p>
					<a href="blog-single.php?article_id=<?php echo $row['article_id']; ?>">
						<h5><?php echo $row['article_name']; ?></h5>
					</a>
					<p><?php echo $row['article_description']; ?></p>
					<a href="blog-single.php?article_id=<?php echo $row['article_id']; ?>" class="details-btn d-flex justify-content-center align-items-center">
						<span class="details">Details</span><span class="lnr lnr-arrow-right"></span>
					</a>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- End blog Area -->


	<!-- Start cta-two Area -->
	<section class="cta-two-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 cta-left">
					<h1>Not Yet Satisfied with our Trend?</h1>
				</div>
				<div class="col-lg-4 cta-right">
					<a class="primary-btn wh" href="blog-home.html">view our blog</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End cta-two Area -->

	<?php include 'includes/footer.php'; ?>

