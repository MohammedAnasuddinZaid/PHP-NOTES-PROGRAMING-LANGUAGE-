<?php

$users=["anas","pratham","faaz","fahad","ram","kaushik","anas"];
// $users="abc";
$user=["name"=>"anas","age"=>"17","email"=>"mohdanasuddin1920@gmaill.com"];

// echo is_array($users);

// echo count($users);

// unset($users[3]);
// print_r($users);

// array_push($users,"murtuza");
// print_r($users);


// array_pop($users);
// print_r($users);

// print_r(array_keys($user));

// echo implode($users) //TO CONVER ARRY IN STRING\\

// $str="HELLO HOW ARE YOU ANAS";
// print_r(explode("O",$str));

// print_r(array_merge($user,$users));

$data= array_unique($users); //removes multiple names like duplcate remover\\
print_r($data);

?>