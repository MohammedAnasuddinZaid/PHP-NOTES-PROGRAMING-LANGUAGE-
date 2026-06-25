<?php

$user=[
    [1,"anas","hydrabad","anas@gail.com"],
    [2,"ram","hydrabad","ram@gail.com"],
    [3,"sri","hydrabad","sri@gail.com"],
];

for($i=0;$i<count($user);$i++){
        
    for($j=0;$j<count($user[$i]);$j++){
        echo $user[$i][$j];
        echo "<br>";
    }
}


?>