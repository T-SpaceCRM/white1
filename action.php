<?php

$url = "https://adv-user2-app-eiccr.ondigitalocean.app/api/v1/lead";
$post = $_POST; // Получение всех данных из POST

$post_data = array(
    'firstName' => $post['firstName'],
    'lastName' => $post['lastName'],
    'phone' => $post['phoneNumber'],
    'email' => $post['email'],
    'offer' => $post['landing'],
    'buyer' => $post['utm_medium'],
    'status' => 'New Lead',
    'campaing_id' => $post['campaing_id'],
    'slug' => $post['slug'],
    'subid' => $_COOKIE['subid'],
    'source' => $post['source']
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
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Получение статуса HTTP-ответа от удаленного сервера

curl_close($curl);

// Проверка статуса HTTP-ответа и его обработка
if ($httpCode === 401) {
    http_response_code(401); // Установка кода статуса ответа для клиента
    echo json_encode(array('error' => 'Unauthorized')); // Отправка сообщения об ошибке в формате JSON
} elseif ($httpCode === 400) {
    http_response_code(400); // Установка кода статуса ответа для клиента
    echo json_encode(array('error' => 'Bad Request')); // Отправка сообщения об ошибке в формате JSON
} else {
    // Отправка данных в формате JSON клиенту
    echo $rawResult;
}
?>
