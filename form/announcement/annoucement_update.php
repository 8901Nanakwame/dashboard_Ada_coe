<?php
session_start();
include "../display/conn.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = intval($_POST['id']); 

    $title = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $head = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'head', FILTER_SANITIZE_STRING));
    $content = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING));
    $content2 = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'content2', FILTER_SANITIZE_STRING));
    $description = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
    $orderly = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'orderly', FILTER_SANITIZE_NUMBER_INT));
       $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING); // No need to escape date

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

   
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['head'] = $_POST['head'];
  $_SESSION['description'] = $_POST['description'];
  $_SESSION['content'] = $_POST['content'];
  $_SESSION['content2'] = $_POST['content2'];
  $_SESSION['date'] = $_POST['date'];
  $_SESSION['orderly'] = $_POST['orderly'];
  // For file inputs, you need to handle file uploads. This is just an example.
  $_SESSION['image'] = $_FILES['image']['name'];


    if ($error === 0) {
        if ($img_size > 4148576) {
          $em = "Sorry, your file is too large  it must be less than 4mb.";
            header("Location: announcement_upd_form.php?error=" . urlencode($em)); // Use urlencode() here too
        }else {
          $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);
    
          $allowed_exs = array("jpg", "jpeg", "png"); 
    
          if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);



    // Prepare and execute the UPDATE query
    $update_query = "UPDATE announcement SET title = ?, head = ?,description=?, content = ?,content2 = ?, orderly = ?, date = ?, image = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, 'sssssissi', $title, $head,$description, $content,$content2, $orderly, $date, $new_img_name, $id);
     
    
    
    
    if (mysqli_stmt_execute($stmt)) {

        $em = "You have successfully updated your data";
header('location:../../admin/content?success= '.urldecode($em));       

exit();
    } else {
        echo 'Data insertion failed: ' . mysqli_stmt_error($stmt);
    }
}else {
				$em = "You can't upload files of this type";
		        header("Location: announcement_upd_form.php?error=" . urlencode($em)); // Use urlencode() here too
                exit();
			}
		}
	}
    
    else {
		$em = "unknown error occurred!";
		header("Location: announcement_upd_form.php?error=" . urlencode($em)); // Use urlencode() here too
        exit();
	}
    
    
    
    
    
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
