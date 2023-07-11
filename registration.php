<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: dashboard.php");
}
if(isset($_POST["submit"]) && $_POST['name']!="" && $_POST['username']!="" && $_POST['email']!="" && $_POST['password']!="" && $_POST['confirmpassword']!=""){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
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
		 if( document.myForm.username.value == "" ) {
            alert( "Please provide your Username!" );
            document.myForm.username.focus() ;
            return false;
         }
		 if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
		 if( document.myForm.password.value == "" ) {
            alert( "Please provide your Password!" );
            document.myForm.password.focus() ;
            return false;
         }
		 if( document.myForm.confirmpassword.value == "" ) {
            alert( "Please provide your Password Confirmation!" );
            document.myForm.confirmpassword.focus() ;
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
								Register				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="registration.php"> Register</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

    <div class="col-lg-6 col-md-6 pt-120 pb-120 mx-auto">
      <h3 class="mb-30">Register Form</h3>
    
    <form class="" action="" method="post" autocomplete="off" name = "myForm" onsubmit = "return(validate());">
      <div class="mt-10">
        <input type="text" name="name" id = "name"  value="" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" class="single-input">
      </div>
      <div class="mt-10">      
        <input type="text" name="username" id = "username"  value="" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"  class="single-input">
      </div>
      <div class="mt-10">
        <input type="email" name="email" id = "email"  value="" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  class="single-input"> 
      </div>
      <div class="mt-10">
        <input type="password" name="password" id = "password"  value="" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="single-input"> 
      </div>
      <div class="mt-10">
        <input type="password" name="confirmpassword" id = "confirmpassword"  value="" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'"  class="single-input"> 
      </div>

      <div class="button-group-area mt-40">
      <button type="submit" name="submit" class="genric-btn primary radius">Register</button>
      <span><a href="login.php">Login!</a></span>
      </div>
    </form>

    </div>
  
	<?php include 'includes/footer.php'; ?>