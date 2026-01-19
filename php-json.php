<?php
// $user = ["name" => "Md Raushan", "age" => 24, "email" => "mdraushanjigmail.com"];
// $jsonData = json_encode($user);
// echo "<br>";
// // print_r($user);
// echo $jsonData;

$userData = '{"name":"Md Raushan","age":24,"email":"mdraushanjigmail.com"}';
$dataArray = json_decode($userData, true);
print_r($dataArray);
