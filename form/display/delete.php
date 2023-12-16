<?php
// connect to the database
include("conn.php");

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// get the id parameter from the URL
$id = $_GET['id'];

// sanitize the id parameter
$id = mysqli_real_escape_string($conn, $id);

// delete the row from the database
$sql = "DELETE FROM event WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

// check for errors
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {
  $em = 'delete successful';
  // redirect back to the index page
  header("Location:../../admin/index.php?success=".urldecode($em));
};

// close connection
mysqli_close($conn);
?>
