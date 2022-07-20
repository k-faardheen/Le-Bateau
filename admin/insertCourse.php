<?php
session_start();
include('../php/connection.php');
$message = "";
if (isset($_POST['name'])) {
    $name = $_POST['name'];//getting the name of the course
    $filename = $_FILES['image']['name']; //retrieving the image
    $decs = $_POST['description'];//getting the description 
    $location = "contentImg/" . $filename;//location to be saved
    $imageFileType = pathinfo($location, PATHINFO_EXTENSION);//Get information about the file path //know where to save the image
    $imageFileType = strtolower($imageFileType);//Convert all characters to lowercase


    $valid_extensions = array("jpg", "jpeg", "png");// Valid extensions for the image 


    if (in_array(strtolower($imageFileType), $valid_extensions)) {// Check file extension 
        $sql = "insert into course(courseName, description, image) values('" . $name . "', '" . $decs . "', '" . $filename . "')";//insert into table
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            move_uploaded_file($_FILES['image']['tmp_name'], $location);//ipload the image in the folder
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
