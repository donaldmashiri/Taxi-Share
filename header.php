<?php include ('includes/db.php');
$sql = "SELECT * FROM users WHERE user_id = '{$_SESSION['user_id']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row["user_id"];
    $full_names = $row["full_names"];
    $email = $row["email"];
    $address = $row["address"];
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
		<title>Taxi</title>

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
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
                        <!-- <h4>Taxi Ride-share</h4> -->
			    		<a href="book.php" class="text-warning display-2">Taxi Ride-share</a>
                        <br>		
                        <br>
                        <br>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="book.php">Home</a></li>
							  <li><a href="admin" target="_blank">Admin</a></li>
							  <li><a href="admin/drivers.php" target="_blank">Drivers</a></li>
							  <li><a href="users/books.php">Book Texi</a></li>
							  <li><a href="signup.php">Signup</a></li>
							  <li><a href="index.php">login</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

              <!-- start banner Area -->
              <section class="banner-area relative about-banner" id="home">
                  <div class="overlay overlay-bg"></div>
                  <div class="container">
                      <div class="row d-flex align-items-center justify-content-center">
                          <div class="about-content col-lg-12">

                          </div>
                      </div>
                  </div>
              </section>
