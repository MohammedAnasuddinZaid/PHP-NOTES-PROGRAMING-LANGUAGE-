<?php 

// $file="files_We_can_take_data_like_this/dummy.txt";
// $My_File= fopen($file,"r") or die("uanble to read the file");
// echo fread($My_File,filesize($file));
// fclose($My_File)

if(isset($_FILES['file'])){

    print_r($_FILES['file']);


}

?>

<form action=""method="post" enctype="multipart/form-data"> 

    <input type="file" name="file">

    </br>
    </br>

    <input type='submit'>  </input>

    

    </input>

</form>