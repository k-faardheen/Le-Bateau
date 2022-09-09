<?php
session_start();
include('../php/connection.php');
if(isset($_GET['pid'])){
$pid = $_GET['pid'];
$sql = "select * from postContent where postId = '$pid'";
$rs = mysqli_query($conn, $sql);
if(mysqli_num_rows($rs)<1){
    exit("");

}else{
    while($row= mysqli_fetch_assoc($rs)){
        //exit($row['title']);
        echo $row['content']."!@#".$row['title'];
    }
}
}
?>