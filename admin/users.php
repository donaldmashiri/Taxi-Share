<?php include("../includes/header.php");
    include ("admin_nav.php");
?>

<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row single-service">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark"><h3 class="text-white">Users</h3></div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th scope='col'>User#: </th>
                                <th scope='col'>Full Names: </th>
                                <th scope='col'>Email: </th>
                                <th scope='col'>Address: </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $sql = "SELECT * FROM users  ORDER BY user_id DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $user_id = $row["user_id"];
                                    $full_names = $row["full_names"];
                                    $email = $row["email"];
                                    $address = $row["address"];
                                    ?>

                                    <tr>
                                        <td>USC00<?php echo $user_id ?></td>
                                        <td><?php echo $full_names ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $address ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-danger'>No Stolen Vehicles</p>";
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

