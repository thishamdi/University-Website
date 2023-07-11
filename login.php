<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: dashboard.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: dashboard.php");

    }
  
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
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
      
         if( document.myForm.usernameemail.value == "" ) {
            alert( "Please provide your Username or Email!" );
            document.myForm.usernameemail.focus() ;
            return false;
         }
		 if( document.myForm.password.value == "" ) {
            alert( "Please provide your Password!" );
            document.myForm.password.focus() ;
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
								Login				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="login.php"> Login</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

    <div class="col-lg-6 col-md-6 pt-120 pb-120 mx-auto" >
    <h3 class="mb-30">Login Form</h3>
    <form class="" action="" method="post" autocomplete="off" name = "myForm" onsubmit = "return(validate());">
      <div class="mt-10">
        <input type="text" name="usernameemail" id = "usernameemail"  value="" placeholder="Email or Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email or Username'" class="single-input"> 
      </div>

      <div class="mt-10">      
        <input type="password" name="password" id = "password"  value="" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="single-input">
      </div> 

      <div class="button-group-area mt-40">
      <button type="submit" name="submit" class="genric-btn primary radius">Connexion</button> 
      <span><a href="registration.php">Register!</a></span>
      </div>
    </form>
    
    </div>
  

    <?php include 'includes/footer.php'; ?>