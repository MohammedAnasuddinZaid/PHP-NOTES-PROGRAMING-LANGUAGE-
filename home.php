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
    This is the HOME PAGE 
    <a href="session.php">THIS GOES TO LOGIN PAGE</a>;
    <br>;
    
</body>
</html>
<?php 
    echo $_SESSION["username"].  "</br>";
?>