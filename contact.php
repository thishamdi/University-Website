<?php
require 'config.php';

if(isset($_POST["submit"]) && $_POST['name']!="" && $_POST['email']!="" && $_POST['subject']!="" && $_POST['message']!=""){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
      $query = "INSERT INTO tb_comment VALUES('','$name','$email','$subject','$message')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Comment Received, Thank you!'); </script>";
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

		<script type = "text/javascript">
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
		 if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
		 if( document.myForm.subject.value == "" ) {
            alert( "Please provide your Subject!" );
            document.myForm.subject.focus() ;
            return false;
         }
		 if( document.myForm.message.value == "" ) {
            alert( "Please provide your Message!" );
            document.myForm.message.focus() ;
            return false;
         }
         
         return( true );
      }
		</script>

	</head>

	<body style="background: #f9f9ff">	

	<?php include 'includes/header-top.php'; ?>

      <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="chat.php"> Contact</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

    <div class="col-lg-6 col-md-6 pt-30 pb-120 mx-auto">    
	  	<div class="comment-form">
	  		<h3 class="mb-30">Leave a Comment</h3>
	  		<form class="" action="" method="post" autocomplete="off" name = "myForm" onsubmit = "return(validate());">
									<div class="form-group form-inline">
									  <div class="form-group col-lg-6 col-md-12 name">
									    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
									  </div>
									  <div class="form-group col-lg-6 col-md-12 email">
									    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
									  </div>										
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" ></textarea>
									</div>
									<button type="submit" name="submit" class="primary-btn text-uppercase">Post Comment</button>
			</form>
		</div>

    </div>
  
	<?php include 'includes/footer.php'; ?>