<?php
$course_name = $_POST['coursename'];
$price =$_POST['price'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];



include 'instamojo\Instamojo.php';

$api = new Instamojo\Instamojo('test_f7be9258ea1c379a8aa42a8bf34', 'test_693239be3a7a18196743d1abef4', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $course_name,
        "amount" => $price,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_sms" => false,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://localhost/01-buffc/gateway/confirm.php"
        //"webhook" =>
        ));
    //print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>