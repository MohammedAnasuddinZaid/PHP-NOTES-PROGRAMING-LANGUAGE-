<?php
$host="localhost";
$userName="root";
$password=null;
$dataBase="college";

$conn= new mysqli($host,$userName,$password,$dataBase);
if($conn->connect_error) {
    die("some error".$conn->$connect_error);
}

echo "connection sucess";

echo "</br>";

$result=$conn->query("Show Tables")->fetch_all();

print_r($result);




?>