<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">

    <button name="btn" value="btn1" >call output </button>

    </form>
    
</body>
</html>

<?php 

if(isset($_GET['btn'])){

    btn_click_test();
    
    
}
function btn_click_test(){
    echo "function called on btn click";
}


?>