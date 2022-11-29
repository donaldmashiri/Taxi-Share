<?php include("../includes/header.php");
include ("admin_nav.php");
$to_destination = $_GET['to_destination'];
$btwn1 = $_GET['btwn1'];
$btwn2 = $_GET['btwn2'];

$query = "select * FROM books JOIN users ON books.user_id = users.user_id WHERE to_des = '$to_destination' AND pic_time BETWEEN '$btwn1' AND '$btwn2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 0) {
    $countass = 1;
}else{
    $countass = $count;
}

$amnttosplit = 100/$countass;
$amnttosplit = round($amnttosplit, 2);


//if(!empty($to_destination)){
//$query = "SELECT count(*) As CountAss FROM books WHERE status = 'pending' AND to_des = '$to_destination' AND pic_time BETWEEN '$btwn1' AND '$btwn2'";
//$select_driver = mysqli_query($conn, $query);
//
//while ($row = mysqli_fetch_assoc($select_driver)){;
//    $countass = $row['CountAss'];
//    if($countass === 0){
//        $countass = 1;
//    }else{
//        $countass = $row['CountAss'];
//    }
//    $amnttosplit = 100/$countass;
////    $amnttosplit = round($amnttosplit, 2);
//}
//}else{
//    echo "hie";
//}


//Drivers
$query = "SELECT count(driver_id) As DriverAss FROM drivers";
$select_driver = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($select_driver)) {
    $count = $row['DriverAss'];
    $driver_ass = rand(1,$count);
}


if (isset($_POST['split'])) {
    $query = "UPDATE books SET ";
    $query .= "amount  = $amnttosplit,";
    $query .= "driver_id  = $driver_ass, ";
    $query .= "status  = 'splited' ";
    $query .= "WHERE status = 'pending' AND to_des = '$to_destination' AND pic_time BETWEEN '$btwn1' AND '$btwn2' ";

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
                    <div class="header bg-dark"><h2 class="text-white">Same Bookings
<!--                        --><?php //echo $amnttosplit ?>
                        </h2></div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header bg-secondary text-white font-weight-bold">Filter Destinations</div>
                            <div class="card-body">
                                <form action="" method="get">
                                <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <select name="to_destination" class="form-control" id="">
                                                    <option value="cbd">CBD</option>
                                                    <option value="senga">Senga</option>
                                                    <option value="mkoba">Mkoba</option>
                                                    <option value="main campus">main campus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <select class="form-control" name="btwn1" id="">
                                                    <option value=""> Select Between </option>
                                                    <option value="00:00:00">00:00</option>
                                                    <option value="01:00:00">01:00</option>
                                                    <option value="02:00:00">02:00</option>
                                                    <option value="03:00:00">03:00</option>
                                                    <option value="04:00:00">04:00</option>
                                                    <option value="05:00:00">05:00</option>
                                                    <option value="06:00:00">06:00</option>
                                                    <option value="07:00:00">07:00</option>
                                                    <option value="08:00:00">08:00</option>
                                                    <option value="09:00:00">09:00</option>
                                                    <option value="10:00:00">10:00</option>
                                                    <option value="11:00:00">11:00</option>
                                                    <option value="12:00:00">12:00</option>
                                                    <option value="13:00:00">13:00</option>
                                                    <option value="14:00:00">14:00</option>
                                                    <option value="15:00:00">15:00</option>
                                                    <option value="16:00:00">16:00</option>
                                                    <option value="17:00:00">17:00</option>
                                                    <option value="18:00:00">18:00</option>
                                                    <option value="19:00:00">19:00</option>
                                                    <option value="20:00:00">20:00</option>
                                                    <option value="21:00:00">21:00</option>
                                                    <option value="22:00:00">22:00</option>
                                                    <option value="23:00:00">23:00</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="btwn2" id="">
                                                <option value=""> Select Between </option>
                                                <option value="00:00:00">00:00</option>
                                                <option value="01:00:00">01:00</option>
                                                <option value="02:00:00">02:00</option>
                                                <option value="03:00:00">03:00</option>
                                                <option value="04:00:00">04:00</option>
                                                <option value="05:00:00">05:00</option>
                                                <option value="06:00:00">06:00</option>
                                                <option value="07:00:00">07:00</option>
                                                <option value="08:00:00">08:00</option>
                                                <option value="09:00:00">09:00</option>
                                                <option value="10:00:00">10:00</option>
                                                <option value="11:00:00">11:00</option>
                                                <option value="12:00:00">12:00</option>
                                                <option value="13:00:00">13:00</option>
                                                <option value="14:00:00">14:00</option>
                                                <option value="15:00:00">15:00</option>
                                                <option value="16:00:00">16:00</option>
                                                <option value="17:00:00">17:00</option>
                                                <option value="18:00:00">18:00</option>
                                                <option value="19:00:00">19:00</option>
                                                <option value="20:00:00">20:00</option>
                                                <option value="21:00:00">21:00</option>
                                                <option value="22:00:00">22:00</option>
                                                <option value="23:00:00">23:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                       <button name="filter" type="submit" class="btn btn-primary">Filter</button>
                                    </div>

                                </div>
                                </form>
                                <?php
                                if(isset($_GET['filter'])) {

                                $to_destination = $_GET['to_destination'];
                                $btwn1 = $_GET['btwn1'];
                                $btwn2 = $_GET['btwn2'];

                                $query = "select * FROM books JOIN users ON books.user_id = users.user_id WHERE to_des = '$to_destination' AND pic_time BETWEEN '$btwn1' AND '$btwn2'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $count = mysqli_num_rows($result);

                                if ($count == 0) {
echo "hie";
                                }


                                $sql = "SELECT * FROM books JOIN users ON books.user_id = users.user_id WHERE to_des = '$to_destination' AND pic_time BETWEEN '$btwn1' AND '$btwn2' ";
                                $result = $conn->query($sql);

 ?>
                                <div class="card-header">Filtered For
                                <?php
                                $aa = $_GET['to_destination'];
                                $bb1 = $_GET['btwn1'];
                                $bb2 = $_GET['btwn2'];
                                echo " $aa Between $bb1 And $bb2";
                                ?>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                        <tr>
                                            <th scope='col'>book#: </th>
                                            <th scope='col'>Full Names: </th>
                                            <th scope='col'>From Destination: </th>
                                            <th scope='col'>To Destination: </th>
                                            <th scope='col'>Pic Time: </th>
                                            <th scope='col'>Amount: </th>
                                            <th scope='col'>Date: </th>
                                            <th scope='col'>Status: </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

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
                                                $feedback = $row["date"];
                                                ?>

                                                <tr>
                                                    <td>BK00<?php echo $book_id ?></td>
                                                    <td><?php echo $full_names ?></td>
                                                    <td><?php echo $from_des ?></td>
                                                    <td><?php echo $to_des ?></td>
                                                    <td><?php echo $pic_time ?></td>
                                                    <td>$<?php echo $amount ?></td>
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
                                        } } else {
                                            echo "<p class='text-danger'>No Bookings with that range Filtered</p>";
                                        }
                                        ?>

                                        </tbody>
                                    </table>

                                    <div >
                                        <p class="alert alert-info text-center font-weight-bold"> $
                                            <?php
                                            if($countass == 1){
                                                echo "0.00 No Split";
                                            }else{
                                            echo $amnttosplit .' each';
                                            } ?>
                                        </p>
                                    </div>
                                    <form action="" method="post">
                                        <button name="split" class="btn btn-success">Split Amounts</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End services Area -->
<?php include("footer.php"); ?>

