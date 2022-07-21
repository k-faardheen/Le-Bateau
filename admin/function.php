<?php

function total($x){//function that count total number of records
    include('../php/connection.php');
if($x==1){
    //counting the total number posts 
    $result=mysqli_query($conn, "SELECT count(postId) as total from postContent");
$data=mysqli_fetch_assoc($result);
return $data['total'];
}
else if($x==2){
    //counting the total number of courses
    $result=mysqli_query($conn, "SELECT count(courseId) as total from course");
$data=mysqli_fetch_assoc($result);
return $data['total'];
}
else{
    //counting the total number of contributors
    $result=mysqli_query($conn, "SELECT count(contributorId) as total from contributor");
$data=mysqli_fetch_assoc($result);
return $data['total'];
}
}

