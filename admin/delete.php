<?php
include('../php/connection.php');

if (isset($_GET['pid'])){//look if the pid is set in the url
$postId = $_GET['pid'];//grab the postid from the url
$sql = "DELETE FROM postContent WHERE postId = '$postId'; ";//delete the postcontent that match the postid
$rs = mysqli_query($conn, $sql);
if($rs){
    header('location:admin.php');

}else{
    echo mysqli_error($conn);
}
}

if (isset($_GET['cid'])){//look if the cid is set in the url
    $courseId = $_GET['cid'];//grab the courseid from the url
    $sql = "DELETE FROM course WHERE courseId = '$courseId'; ";//delete the course that match the courseid
    $rs = mysqli_query($conn, $sql);
    if($rs){
        header('location:admin.php');
    
    }else{
        echo mysqli_error($conn);
    }
    }

mysqli_close($conn);
?>