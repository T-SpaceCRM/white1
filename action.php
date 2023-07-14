<?php

$url = "https://adv-user2-app-eiccr.ondigitalocean.app/api/v1/lead";
$post = $_POST; // получение всех данных из POST

$date = date("d-m-Y", time());

$post_data = array(
    'firstName' => $post['firstName'],
    'lastName' => $post['lastName'],
    'phone' => $post['phoneNumber'],
    'offer' => 'Alfa Invest (white)',
    'buyer' => $post['utm_medium'],
    'status' => 'New Lead',
    'campaing_id' => '1485'
);

$json_data = json_encode($post_data);

$headers = array(
    "Content-Type: application/json"
);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$rawResult = curl_exec($curl);

curl_close($curl);
?>