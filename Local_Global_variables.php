<?php 
//     $name="anas";
// function GetName(){
//     echo "<br>";
//     // $name="ram";
//     global $name;
//     $name="parker";
//     echo "local var: $name";

// }
   
// GetName();
// echo "<br>";

// echo $name;


$name ="anas";

function test(){
    $name="ram";
    echo $name;

    function innterTest(){
        $name = "sham";
        echo $name;
    }
}

test();
echo "<br>";
innterTest();
echo "<br>";
echo $name;
?>