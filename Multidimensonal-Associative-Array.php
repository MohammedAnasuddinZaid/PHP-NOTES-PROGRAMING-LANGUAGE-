<?php 

$users=[

    ["name"=>"anas","Age"=>"17","city"=>"hydrabad"],
    ["name"=>"ram","Age"=>"20","city"=>"delhi"],
    ["name"=>"sham","Age"=>"32","city"=>"mumbai"],
    ["name"=>"sri","Age"=>"19","city"=>"gurgao"],
    ["name"=>"petter","Age"=>"19","city"=>"bangloru"],
];

echo "<table border='2'>";
echo "<tr>";
foreach(array_keys($users[0]) as $heading ){
    echo "<th>".ucfirst($heading)."</th>";
}
echo "</tr>";

foreach($users as $user ){
    echo "<tr>";

    foreach($user as $key=>$data){
        echo "<td>";
        echo "$data";
        echo "</td>";
        
    }
    echo "</tr>";
}

echo "</table>";



?>