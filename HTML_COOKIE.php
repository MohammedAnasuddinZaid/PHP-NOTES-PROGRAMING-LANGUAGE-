<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML WITH COKKIE ie IN PHP</title>
</head>
<body>

    <form action="" method="post">

        <input type="text" name="user" placeholder="enter user name" />
        <br />
        <br />
        <button name="btn" value="set"> SET COKKIE </button>
        <br />
        <br />
        <button name="btn" value="display"> display COKKIE </button>
        <br />
        <br />
        <button name="btn" value="delete"> delete COKKIE </button>

    </form>
    
</body>
</html>

<?php

if(isset($_POST)){
    if($_POST['btn']=="set"){
        $val=$_POST['user'];
        setcookie("user",$val);
    }
};

if($_POST['btn']=="display"){
    echo $_COOKIE['user'];
};
if($_POST['btn']=="delete"){
    setcookie("user",null,-1);
}



?>