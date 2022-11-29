<?php include("../includes/header.php"); ?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Taxi Ride Share Administration
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.html"> Services</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>Administration</h1>
        </div>
        <div class="row single-service">
            <div class="col-lg-8">
                <?php
                if(isset($_POST['admin_login'])){
                    $password = $_POST['password'];

                    if ($password === "12345") {
                        $_SESSION['admin'] = '12345';
                        header('location: users.php');
                    } else {
                        echo "<p class='alert alert-danger'>Incorrect credentials</p>";
                    }
                }
                ?>
                <form class="form-area contact-form text-right" action="" method="post">
                    <div class="row">
                        <div class="col-lg-10 form-group">
                            <input name="password" placeholder="Enter Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="password">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button  type="submit" name="admin_login" class="genric-btn primary" style="float: right;">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- End services Area -->
<?php include("../includes/footer.php"); ?>

