<?php include("../includes/header.php");
include("user_sidebar.php");

?>


<!-- End banner Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row single-service">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark"><h3 class="text-white">Your Profile</h3></div>
                    <div class="card-body">

                        <table class="table table-sm">
                            <thead>
                            <?php
                            echo "<tr><th scope='col'>User#:</th> <td>CVRVO$user_id</td></tr>";
                            echo "<tr><th scope='col'>Full Names: </th> <td>$full_names</td></tr>";
                            echo "<tr><th scope='col'>Email: </th> <td>$email</td></tr>";
                            echo "<tr><th scope='col'>Address: </th> <td>$address</td></tr></tr>";
                            ?>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End services Area -->
<?php include("../includes/footer.php"); ?>

