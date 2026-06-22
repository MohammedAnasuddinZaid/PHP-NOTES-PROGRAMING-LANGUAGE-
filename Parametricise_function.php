<?php 

function sum($a,$b){
    echo $a+$b;
    echo "<br>";
}

sum(1,2);
sum(4,9);
sum(3,7);

function UserData($NAME,$COLOR){
    echo "<h1 style='color:$COLOR'>$NAME</h1>";

}

UserData("anas","blue");



?>