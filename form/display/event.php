<?php
session_start();

include("conn.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate the input data
    // Use filter_input() instead of $_POST to avoid XSS attacks [^1^][1]
    $title = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $head = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'head', FILTER_SANITIZE_STRING));
    $content = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING));
    $description = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
    $orderly = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'orderly', FILTER_SANITIZE_NUMBER_INT));
       $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING); // No need to escape date

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	$main_img_name = $_FILES['mainimage']['name'];
	$main_img_size = $_FILES['mainimage']['size'];
	$main_tmp_name = $_FILES['mainimage']['tmp_name'];
	$error1 = $_FILES['mainimage']['error'];











// check if the form was submitted
if (isset ($_POST ['Submit'])) {
  // loop over the $_POST array and assign the values to the $_SESSION array
  foreach ($_POST as $key => $value) {
    $_SESSION [$key] = $value;
  }
}

// display the data stored in the session
echo "<strong>Test Form</strong>";
echo "<p>Title: " . $_SESSION ['title'] . "</p>";
echo "<p>Head: " . $_SESSION ['head'] . "</p>";
echo "<p>Description: " . $_SESSION ['description'] . "</p>";
echo "<p>Content: " . $_SESSION ['content'] . "</p>";
echo "<p>Content2: " . $_SESSION ['content2'] . "</p>";
echo "<p>Date: " . $_SESSION ['date'] . "</p>";
echo "<p>Orderly: " . $_SESSION ['orderly'] . "</p>";

// display the image stored in the session if it exists
if (isset ($_SESSION ['image'])) {
  echo "<img src=\"" . $_SESSION ['image'] . "\" alt=\"Image\">";
}











   // Prepare the SELECT query to check if the username or email already exists
   $select_query = "SELECT * FROM event WHERE head = ? OR orderly = ?";
   $stmt = mysqli_prepare($conn, $select_query);
   mysqli_stmt_bind_param($stmt, 'si', $name, $email);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);

       // Check if the username or email already exists
       // Check if the username or email already exists
if (mysqli_num_rows($result) > 0) {
    // Use urlencode() to encode the query string [2]
    $em = 'order or header exist';
    header("Location: ../index.php?Vsportlight_insertdat&eerror=" . urlencode($em));
    exit(); // Terminate the script execution
}

    
    
    

    if ($error === 0) {
      if ($img_size > 2000000 ) {
        $em = "Sorry,  the image for it the blog must be  less than 2mb.";
          header("Location: ../index.php?Vsportlight_insertdat&eerror=" . urlencode($em)); // Use urlencode() here too
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
        $allowed_exs = array("jpg", "jpeg", "png"); 
  
        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'uploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);


    if ($error1 === 0) {
      if ($main_img_size > 4148576) {
        $em = "Sorry,  the image for it the main must be  less than 4mb.";
          header("Location: ../index.php?Vsportlight_insertdat&eerror=" . urlencode($em)); // Use urlencode() here too
          exit();
      }else {
        $img_ex = pathinfo($main_img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
        $allowed_exs = array("jpg", "jpeg", "png"); 
  
        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_main_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'headimg/'.$new_main_img_name;
          move_uploaded_file($main_tmp_name, $img_upload_path);
  




    // Prepare the INSERT query to insert the data into the database
    $insert_query = "INSERT INTO event (title, description ,head, content, orderly, date, image, mainimage ) VALUES (?,?, ?, ?, ? ,?, ? ,?)";
    $stmt = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($stmt, 'ssssisss', $title,$description , $head, $content, $orderly, $date, $new_img_name ,$new_main_img_name );

    // Insert the data into the database


    if (mysqli_stmt_execute($stmt)) {
        echo 'Data inserted successfully.';
    } else {
        echo 'Data insertion failed: ' . mysqli_stmt_error($stmt);
    }

}else {
				$em = "You can't upload files of this type";
		        header("Location: ../index.php?Vsportlight_insertdat&eerror=" . urlencode($em)); // Use urlencode() here too
			}
		}
	
    
    }
    
}else {
				$em = "You can't upload files of this type";
		        header("Location: ../index.php?Vsportlight_insertdat&eerror=" . urlencode($em)); // Use urlencode() here too
			}
		}
	
    
    }
    
    else {
		$em = "unknown error occurred!";
		header("Location: ../index.php?Vsportlight_insertdat&eerror=" . urlencode($em)); // Use urlencode() here too
	}

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>
