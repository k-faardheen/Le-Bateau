<?php

function total($x){
    include('../php/connection.php');
if($x==1){
    //sekecting count of post
    $result=mysqli_query($conn, "SELECT count(postId) as total from postContent");
$data=mysqli_fetch_assoc($result);
return $data['total'];
}
else if($x==2){
    //sekecting count of post
    $result=mysqli_query($conn, "SELECT count(courseId) as total from course");
$data=mysqli_fetch_assoc($result);
return $data['total'];
}
else{
    //sekecting count of post
    $result=mysqli_query($conn, "SELECT count(contributorId) as total from contributor");
$data=mysqli_fetch_assoc($result);
return $data['total'];
}
}

