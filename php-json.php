<?php 

// $user=["name"=>"anas","age"=>"17","email"=>"anas@gmail.com"];
// $UserJson=json_encode($user);

// echo $UserJson;

$data='{"name":"anas","age":"17","email":"anas@gmail.com"}';

$dataArray=json_decode($data,true);
print_r($dataArray);
?>