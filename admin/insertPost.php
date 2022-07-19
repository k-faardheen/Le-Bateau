<?php
session_start();

include('../php/connection.php');
$message = "";
if (isset($_POST['title'])) {
    $author = $_SESSION['fName'];
    $title = $_POST['title'];
    $course = $_POST['course'];
    $filename = $_FILES['image']['name']; //retrivving the image
    $content = $_POST['content'];
    /* Location to be saved */
    $location = "contentImg/" . $filename;
    $imageFileType = pathinfo($location, PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    /* Valid extensions for the image */
    $valid_extensions = array("jpg", "jpeg", "png");


    if (in_array(strtolower($imageFileType), $valid_extensions)) {/* Check file extension */
        $sql = "insert into postContent(author,title, image, course, content) values('" . $author . "', '" . $title . "', '" . $filename . "', '" . $course . "', '". $content."')";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            move_uploaded_file($_FILES['image']['tmp_name'], $location);   /* Upload file */
            $message = "ok";
        } else {
            $message =  mysqli_error($conn);
        }
    } else {
        $message = "enter the correct format of image";
    }
}



echo json_encode($message);
mysqli_close($conn);
