<?php
include('../php/connection.php');

if (isset($_GET['pid'])){
$postId = $_GET['pid'];
$sql = "DELETE FROM postContent WHERE postId = '$postId'; ";
$rs = mysqli_query($conn, $sql);
if($rs){
    header('location:admin.php');

}else{
    echo mysqli_error($conn);
}
}

if (isset($_GET['cid'])){
    $courseId = $_GET['cid'];
    $sql = "DELETE FROM course WHERE courseId = '$courseId'; ";
    $rs = mysqli_query($conn, $sql);
    if($rs){
        header('location:admin.php');
    
    }else{
        echo mysqli_error($conn);
    }
    }

mysqli_close($conn);
?>