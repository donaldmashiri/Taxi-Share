<?php
if(empty($_SESSION['user_id'])){
    header("location: ../index.php");
}


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


<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <!-- <h4>Taxi Ride-share</h4> -->
            <a href="books.php" class="text-warning display-2">Taxi Ride-share</a>
            <br>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="book.php">Home</a></li>
                    <li><a href="../admin" target="_blank">Admin</a></li>
                    <li><a href="index.php">Profile</a></li>
                    <li><a href="books.php">Book Texi</a></li>
                    <li><a href="your_journeys.php">Pending Journeys</a></li>
                    <li><a href="journeys.php">Started Journeys</a></li>
                    <li><a href="completed_journeys.php">completed Journeys</a></li>
                    <li><a href="../index.php?logout">Logout</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<?php
if (isset($_GET['logout'])) {
    unset($_SESSION['user_id']);
    session_destroy();
    header("Refresh:1; ../index.php");
//    echo $_SESSION['user_id'];
}

?>

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