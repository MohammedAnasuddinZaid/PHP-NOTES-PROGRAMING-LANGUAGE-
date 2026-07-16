<?php 

$path="files_We_can_take_data_like_this";
$items=scandir($path);

$items= array_diff($items,array(".",".."));
// print_r($items);
foreach($items as $iteam){
    echo "<a href=./files_We_can_take_data_like_this/$iteam>$iteam </a>";
    echo "</br>";
}

?>