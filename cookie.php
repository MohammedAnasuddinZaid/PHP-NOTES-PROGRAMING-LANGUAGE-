<?php 

setcookie("namee" ,"anas bhai",time()+(86400));
setcookie("age","17",time()+(86400));
if(isset($_COOKIE["namee"])){
    print_r($_COOKIE["age"]);
    echo "</br>";
    echo "this is a cookie man";
}


?>