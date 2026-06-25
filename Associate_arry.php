<?php 

$UserDetailes=[
    "name"=>"anas",
    "age"=>17,
    "city"=>"hydrabad",
    "email"=>"anasbhai",
    "s;tate"=>"telangana",
    ];

    // foreach($UserDetailes as $key=>$data){
    //     echo "$key => $data <br>";
    // }
    foreach($UserDetailes as $key=>$data):
        echo "$key => $data <br>";
    endforeach

?>