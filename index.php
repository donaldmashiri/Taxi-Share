<?php include("header.php"); ?>

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
<!--							<h1 class="text-white">-->
<!--								Welcome to Taxi Ride Share-->
<!--							</h1>-->
<!--							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.html"> Services</a></p>-->
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start services Area -->
			<section class="services-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Welcome to Taxi Ride Share</h1>
                        <p>A platform where you can book a Taxi and Split your Cost with another to reach your destination.</p>
					</div>
					<div class="row single-service">
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<a href="#"><h4>Taxi Service</h4></a>
							<p>
                                Taxi refers to for-hire automobile travel supplied by private companies. Taxi service is an important Transportation Option that meets a variety of needs, including Basic Mobility in emergencies, general transportation for non-drivers, and mobility for Tourists and visitors.
							</p>
						</div>
						<div class="col-lg-8">
                            <div class="card">
                                <div class="card-header font-weight-bold">Log In As User</div>
                                <div class="card-body">
                                    <?php
                                    if(isset($_POST['login'])){
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];

                                        $query = "select * from users where email = '$email' and password = '$password'";
                                        $result = mysqli_query($conn, $query);
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                        $count = mysqli_num_rows($result);

                                        if ($count == 1) {
                                            $_SESSION['user_id'] = $row['user_id'];
//                                    echo $_SESSION['user_id'];
                                            header('location: users/index.php');

                                        } else {
                                            echo "<p style='background-color: red' class='alert text-white alert-danger'>Incorrect Password</p>";
                                        }
                                    }

                                    ?>
                                    <form class="form-area contact-form text-right" action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-10 form-group">
                                                <input name="email" placeholder="Enter email address" minlength="3"  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                                                <input name="password" placeholder="Enter Password" minlength="3"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="password">
                                                <div class="alert-msg" style="text-align: left;"></div>
                                                <button  type="submit" name="login" class="genric-btn primary" style="float: right;">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>										
					</div>	
				</div>	
				
			</section>
			<!-- End services Area -->
			<?php include("footer.php"); ?>
			
			