<?php

if(isset($_POST['AddBook'])&&!empty($_POST['AddBook']))
{
$idbook=$_POST['idbook'];
$filename_b=$_FILES['myfile2']['name'];
$destination_b='./../../../media/uploaded/books/'.$idbook.'.pdf';
$extention_b= pathinfo($filename_b,PATHINFO_EXTENSION);
$file_b=$_FILES['myfile2']['tmp_name'];
$size_b=$_FILES['myfile2']['size'];
if(!in_array($extention_b,['pdf']))
{
    echo"your file extention must be:['pdf']";
}
 elseif($_FILES['myfile2']['size']>200000000) 
 {
 echo"file is too large";   
 }
 else
 {
     if(move_uploaded_file($file_b,$destination_b))
     {
            
        $query_b = "UPDATE book SET Downloadable = 'TRUE', Size = '$size_b' WHERE IdBook = '$idbook'";
         if(mysqli_query($connection,$query_b))
         {
             echo"file uploaded successfully";
        
         }
         else
         {
             echo"failed to upload file ";
         }
     }
     else echo"error moving file to the server";
 }
}

?>
