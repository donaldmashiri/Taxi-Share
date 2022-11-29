<?php include("../includes/header.php");
include ("admin_nav.php");
?>

<section class="reviews-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>Reports</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Users</h4>
                    <p>
                        <?php
                        $query = "SELECT count(*) FROM users";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        echo $total_savings = $row[0];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Drivers</h4>
                    <p>
                        <?php
                        $query = "SELECT count(*) FROM drivers";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        echo $total_savings = $row[0];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Bookings</h4>
                    <p>
                        <?php
                        $query = "SELECT count(*) FROM books";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        echo $total_savings = $row[0];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Total Amount</h4>
                    <p>
                        <?php
                        $query = "SELECT sum(amount) FROM books";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        echo $total_savings = $row[0];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Pending Journeys</h4>
                    <p>
                        <?php
                        $query = "SELECT count(*) FROM books where status = 'pending'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        echo $total_savings = $row[0];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Completed Journeys</h4>
                    <p>
                        <?php
                        $query = "SELECT count(*) FROM books where driver_status = 'completed'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        echo $total_savings = $row[0];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End services Area -->
<?php include("footer.php"); ?>

