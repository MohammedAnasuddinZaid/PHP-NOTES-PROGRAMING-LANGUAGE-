<?php  

$aor=["anas","patmere","sri","ram"];

foreach($aor as $i){
    if($i=="anas"){
        continue;
    }
    echo $i;
    echo "<br>";
    if($i=="sri"){
        break;
    }
}





?>