<?php 

// $x=10;
// if($x==10){
//     echo "before goto <br>";
// }

// if($x==10){
//     goto jump;
// }

// $nam="anas";
// echo "$nam <br>";

// jump:
// echo "statment is jumped on line no 15";


$i=0;
while($i<10){
    $i++;
    echo "$i <br>";

    if($i==5){
        goto outside;
    }
};

outside:
echo "it came ourside";

?>