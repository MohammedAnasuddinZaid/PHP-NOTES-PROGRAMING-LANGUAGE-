<?php 

if(isset($_POST["filename"])){
$filename= "files_We_can_take_data_like_this/dummy.txt".$_POST["filename"];
$content=$_POST["content"];

$file= fopen($filename,"w") or die("unable to creat file");

fwrite($file,$content);

fclose($file);

echo "file created";

};



// $filename="files_We_can_take_data_like_this/dummy.txt";
// $content="this is a dummy file";

// $file= fopen($filename,"w") or die("unable to creat file");

// fwrite($file,$content);

// fclose($file);

// echo "file created";
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


        <input type="text" placholder="enter file name" name="filename"></input>;
        <br>
        <br>
        <textarea name="content" >


        </textarea>

        <br>
        <br>


        <input type="submit"> </input>


    </form>
</body>
</html>