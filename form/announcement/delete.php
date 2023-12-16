<?php
// connect to the database


// check connection
include "../display/conn.php";

// get the id parameter from the URL
$id = $_GET['id'];

// sanitize the id parameter
$id = mysqli_real_escape_string($conn, $id);

// delete the row from the database
$sql = "DELETE FROM announcement WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

// check for errors
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {
  // redirect back to the index page
    $em = 'delete successful';
  header("Location:../../admin/content/index.php?success=".urldecode($em));
};

// close connectionte
mysqli_close($conn);
?>
