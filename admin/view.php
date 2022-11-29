<?php include("../includes/header.php");
include ("admin_nav.php");

$view = $_GET['view'];



if (isset($_GET['done'])) {
    $done = $_GET['done'];

    $query = "UPDATE books SET ";
    $query .= "driver_status  = 'completed' ";
    $query .= "WHERE book_id = $done";

    $update_query = mysqli_query($conn, $query);
    if (!$update_query) {
        die("Query failed" . mysqli_error($conn));
    }

}


?>



<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row single-service">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header bg-dark"><h2 class="text-white">Driver pick-up and drop off points for Bookings</h2></div>
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
                                <th scope='col'>Driver Status: </th>
                                <th scope='col'>Date: </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $sql = "SELECT * FROM books 
                                JOIN users ON books.user_id = users.user_id JOIN drivers ON books.driver_id = drivers.driver_id WHERE books.driver_id = $view AND books.driver_status != 'completed' ORDER BY book_id DESC ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $book_id = $row["book_id"];
                                    $user_id = $row["phone_number"];
                                    $email = $row["email"];
                                    $full_names = $row["full_names"];
                                    $phone_number = $row["phone_number"];
                                    $from_des = $row["from_des"];
                                    $to_des = $row["to_des"];
                                    $date = $row["date"];
                                    $pic_time = $row["pic_time"];
                                    $amount = $row['amount'];
                                    $status = $row['status'];
                                    $driver_status = $row['driver_status'];
                                    $feedback = $row["date"];
                                    ?>

                                    <tr>
                                        <td>BK00<?php echo $book_id ?></td>
                                        <td><?php echo $phone_number ?></td>
                                        <td><?php echo $from_des ?></td>
                                        <td><?php echo $to_des ?></td>
                                        <td><?php echo $pic_time ?></td>
                                        <td>$<?php echo $amount ?></td>
                                        <td class="text-info font-weight-bold"><?php echo $driver_status ?></td>
                                        <td><?php echo $date ?></td>
                                        <td>
                                            <a href="view.php?view=<?php echo $view ?>&&done=<?php echo $book_id ?>" class="btn btn-success">Job Done</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-danger'>No Notifications</p>";
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

