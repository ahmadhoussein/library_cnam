<?php
include './../connect.php';
if(isset($_POST['AddBook'])&&!empty($_POST['AddBook']))
{
$idbook=$_POST['idbook'];
$filename=$_FILES['myfile']['name'];
$destination='./../../../media/books/'.$idbook.'.webp';  // PATHH TO FOLDER!!!
$extention= pathinfo($filename,PATHINFO_EXTENSION);
$file=$_FILES['myfile']['tmp_name'];
$size=$_FILES['myfile']['size'];
if(!in_array($extention,['webp']))
{
    echo"your file extention must be:['webp']";
}
 elseif($_FILES['myfile']['size']>20000000) 
 {
 echo"file is too large";   
 }
 else
 {
     if(move_uploaded_file($file,$destination))
     {
             echo"file uploaded successfully";
     }
     else "error moving file to the server";
 }
}

?>

