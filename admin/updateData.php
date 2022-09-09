<?php
session_start();

include('../php/connection.php');
$message = "";
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $title = $_POST['title'];//getting the title of the post
    $course = $_POST['course'];//getting the name of the course
    $filename = $_FILES['image']['name']; //retrieving the image
    $content = $_POST['content'];//getting the content of the post
    $location = "contentImg/" . $filename;//location to be saved
    $imageFileType = pathinfo($location, PATHINFO_EXTENSION);//Get information about the file path //know where to save the image
    $imageFileType = strtolower($imageFileType);//Convert all characters to lowercase

    $valid_extensions = array("jpg", "jpeg", "png");// Valid extensions for the image 


    if (in_array(strtolower($imageFileType), $valid_extensions)) {// Check file extension 
       // $sql = "insert into postContent(author,title, image, course, content) values('" . $author . "', '" . $title . "', '" . $filename . "', '" . $course . "', '". $content."')"; //insert into table
        $sql = "update postContent set image = '" . $filename . "', content = '" . $content . "', title = '" . $title . "' where postId = '$id'";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            move_uploaded_file($_FILES['image']['tmp_name'], $location); //upload the image in the folder
            $message = "ok";
        } else {
            $message =  mysqli_error($conn);
        }
    } else {
        $message = "enter the correct format of image";//message if the image is not in the correct format
    }
}



echo json_encode($message);//return message
mysqli_close($conn);
