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
                    <div class="card-header bg-warning"><h3 class="text-white">Pending Journeys</h3></div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th scope='col'>book#: </th>
                                <th scope='col'>Phone Number: </th>
                                <th scope='col'>From Destination: </th>
                                <th scope='col'>To Destination: </th>
                                <th scope='col'>Pic Time: </th>
                                <th scope='col'>Amount: </th>
                                <th scope='col'>Date: </th>
                                <th scope='col'>Status: </th>
                                <th scope='col'></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $sql = "SELECT * FROM books WHERE user_id = '{$_SESSION['user_id']}' AND status = 'pending'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $book_id = $row["book_id"];
                                    $user_id = $row["phone_number"];
                                    $full_names = $row["full_names"];
                                    $phone_number = $row["phone_number"];
                                    $from_des = $row["from_des"];
                                    $to_des = $row["to_des"];
                                    $date = $row["date"];
                                    $pic_time = $row["pic_time"];
                                    $amount = $row['amount'];
                                    $status = $row['status'];
                                    $feedback = $row["date"];
                                    ?>
                                    <tr>
                                        <td>BK00<?php echo $book_id ?></td>
                                        <td><?php echo $phone_number ?></td>
                                        <td><?php echo $from_des ?></td>
                                        <td><?php echo $to_des ?></td>
                                        <td><?php echo $pic_time ?></td>
                                        <td class="font-weight-bold text-success">$<?php echo $amount ?></td>
                                        <td><?php echo $date ?></td>
                                        <td><?php
                                            if($status === "pending"){
                                                echo "<p class='text-warning font-weight-bolder'>$status</p>";
                                            }elseif($status === "done"){
                                                echo "<p class='text-success font-weight-bolder'>$status</p>";
                                            }else{
                                                echo "<p class='text-info font-weight-bolder'>$status</p>";
                                            }
                                            ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-danger alert alert-danger'>Not pending yet</p>";
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
<?php include("../includes/footer.php"); ?>

