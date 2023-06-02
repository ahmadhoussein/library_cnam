<?php
    if(isset($_POST['AddBook'])&&!empty($_POST['AddBook']))
{
require'./../connect.php';
            $book_searched=$_POST['book_searched'];
            $idbook=$_POST['idbook'];
            $title=$_POST['title'];
            $genre=$_POST['genre'];
            $author=$_POST['author'];
            $summary=$_POST['summary'];
            $phouse=$_POST['phouse'];
            $pbought=$_POST['pbought'];
            $psold=$_POST['psold'];
            $quantity=$_POST['quantity'];
   
   $query="update book set Title='$title',Genre='$genre',Author='$author',Summary='$summary'"
           . ",PriceBought='$pbought',PriceSold='$psold',Quantity='$quantity',PublishingHouse='$phouse' where IdBook='$idbook'";
   $result=mysqli_query($connection,$query);
   
   
   if($result){
       header("location:Management.php?book=$book_searched");
   }
}

?>