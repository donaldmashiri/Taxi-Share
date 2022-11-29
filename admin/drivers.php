<?php include("../includes/header.php");

?>


<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <!-- <h4>Taxi Ride-share</h4> -->
            <a href="users.php" class="text-warning display-2">Taxi Ride-share</a>
            <br>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.php">Admin</a></li>
                    <li><a href="drivers.php">Drivers</a></li>
                    <li><a href="notifications.php">Notifications</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
        <h1 class="text-warning text-center m-2">Drivers</h1>
    </div>
</header><!-- #header -->


<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row single-service">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark"><h3 class="text-white">All Drivers</h3></div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th scope='col'>Driver#: </th>
                                <th scope='col'>Driver Name: </th>
                                <th scope='col'>Driver Email: </th>
                                <th scope='col'> </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $sql = "SELECT * FROM drivers";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $driver_id = $row["driver_id"];
                                    $driver_name = $row["driver_name"];
                                    $driver_email = $row["driver_email"];
                                    ?>

                                    <tr>
                                        <td>DV00<?php echo $driver_id ?></td>
                                        <td><?php echo $driver_name ?></td>
                                        <td><?php echo $driver_email ?></td>
<!--                                        <td><a href="view.php?view=--><?php //echo $driver_id ?><!--" class="btn btn-warning btn-sm">view</a></td>-->
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-info'>No Drivers</p>";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End services Area -->
<?php include("footer.php"); ?>

