<?php 

if($_FILES['fileupload']){
$upload =  $_FILES['fileupload']['name'];
$upload_to = "./uploads/".$upload;
move_uploaded_file($_FILES['fileupload']['tmp_name'],$upload_to) || die("failed to upload");

echo "THANKS THE DATA IS  STORED";
}else{
    die("no file founds");
}



?>