<?php

require_once '../paynow-sdk-2/autoloader.php';
include_once('../includes/db.php');

$phone_number = $conn -> real_escape_string($_POST['phone_number']);
$from_des = $conn -> real_escape_string($_POST['from_des']);
$to_des = $conn -> real_escape_string($_POST['to_des']);
$date = $conn -> real_escape_string($_POST['date']);
$pic_time = $conn -> real_escape_string($_POST['pic_time']);

$sql = "INSERT INTO books (user_id, phone_number, from_des, to_des, pic_time, date)
                            VALUES ({$_SESSION['user_id']}, '{$phone_number}','{$from_des}', '{$to_des}','{$pic_time}', now())";

if ($conn->query($sql) === TRUE) {

$paynow = new Paynow\Payments\Paynow(
    '10490',
    'd9dedf29-8e42-4de0-ac3c-73248f8c24ad',
     'http://localhost/tendai/users/your_journeys.php',
//     'http://localhost/msu/prince/success.php?app_id='.$app_id,

    // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
    'http://example.com/return?gateway=paynow'
);

$payment = $paynow->createPayment('Taxi Ride Share Payment', 'donaldtondemashiri@gmail.com');

$payment->add('Taxi amount', 100);
//$payment->add('Water', 1.00);

$response = $paynow->send($payment);
// var_dump($response);
if ($response->success()) {
    // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
    $link = $response->redirectUrl();
    // save link
    $pollUrl = $response->pollUrl();
    // checking payment
//    echo 'Success';
//    echo '<br>';
    // redirect to link
    // echo $pollUrl;
//    echo '<br>';
    // echo $link;
    // Check the status of the transaction
//    $status = $paynow->pollTransaction($pollUrl);
    header("Location: ".$link);
}

}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}










?>