<?php 

    


    session_start() 






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <input type="text" name="username" placeholder="enter your username"></input> 
      
    <br>
    <br>

    <input type="password" name="password" placeholder="enter your password"></input>

    <br>
    <br>

    <input type="submit" name="login"></input>

    </form>
</body>
</html>

<?php 

    if(isset($_POST["login"])){
        $_SESSION["username"]= $_POST["username"];
        $_SESSION["password"]= $_POST["password"];
    
        echo $_SESSION["username"];
        echo "</br>";
        echo $_SESSION["password"];

        header("Location:home.php");
    }
    else{
        echo "missing username/password <br>";
    };

    
?>