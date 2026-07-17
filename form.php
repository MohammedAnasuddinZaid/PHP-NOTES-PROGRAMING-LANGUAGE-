<?php 



// print_r($_POST);
if(isset($_POST['name'])){
    echo "user name is ".$_POST['name'];
    echo "</br>";
    echo "user gender is ".$_POST['gender'];
    echo "</br>";
    echo "user bio is ".$_POST['bio'];
    echo "</br>";
    echo "user skkills is ".implode(", ",$_POST['skills']);
    echo "</br>";
}



?>