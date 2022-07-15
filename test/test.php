<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
 $db = 'test';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
 
 if(! $conn ) {
   die('Could not connect: ' . mysqli_connect_error());
}

    $filename = $_FILES['file']['name'];
    /* Location */   $location = "image/".$filename;
   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
   $imageFileType = strtolower($imageFileType);

   /* Valid extensions */   $valid_extensions = array("jpg","jpeg","png");

   /* Check file extension */   if(in_array(strtolower($imageFileType), $valid_extensions)) {
    $sql = "insert into image(img) values('".$filename."')";
    $rs = mysqli_query($conn, $sql);
    if($rs){
        /* Upload file */      move_uploaded_file($_FILES['file']['tmp_name'],$location);

    }
     else{
        echo mysqli_error($conn);
     }
      
   }
   mysqli_close($conn);
?>