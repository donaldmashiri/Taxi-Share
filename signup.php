<?php include("header.php"); ?>


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

                <?php
                if(isset($_POST['signup'])){
                    $full_names = $conn -> real_escape_string($_POST['full_names']);
                    $email = $conn -> real_escape_string($_POST['email']);
                    $address = $conn -> real_escape_string($_POST['address']);
                    $password = $conn -> real_escape_string($_POST['password']);
                    $address = $conn -> real_escape_string($_POST['address']);

                    $sql = "INSERT INTO users (full_names, email, address, password)
                            VALUES ('{$full_names}','{$email}', '{$address}','{$password}')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p class='alert alert-success font-weight-bold'>Account Successfully Registered</p>";
                    }else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                ?>
                <form class="form-area contact-form text-right" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="full_names" placeholder="Enter your Full Names" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                            <input name="email" placeholder="Enter email address" minlength="3"  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="password" placeholder="Enter Password" minlength="3"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="password">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="address" minlength="3"  placeholder="Enter Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" required=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button type="submit" name="signup" class="genric-btn primary" style="float: right;">Signup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- End services Area -->
<?php include("footer.php"); ?>

