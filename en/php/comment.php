<?php
include'./connect.php';
include'./functions.php';
include'./displayBook.php';

// Check if the form is submitted
if (isset($_GET['idBook'])) {
  // Retrieve the comment and idbook values from the form
  $comment = $_GET['comment'];
  $idBook = $_GET['idBook'];

  // Perform any necessary validation on the comment and idbook values

  // Insert the comment into the database
  $insertQuery = "INSERT INTO comments (comment, idbook) VALUES ('$comment', '$idbook')";

  // Execute the query
  $result = mysqli_query($connect, $insertQuery);

  // Check if the insertion was successful
  if ($result) {
    echo "Comment added successfully.";
  } else {
    echo "Error: " . mysqli_error($connection);
  }
}



?>