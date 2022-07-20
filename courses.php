<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/courses.css">
    <title>All Courses</title>
</head>

<body>
    <?php
        include('header.php');
        include('./php/connection.php');
    ?>
<div class="wrapper">
    <?php

    $sql = "select * from course";
    $rs = mysqli_query($conn, $sql);
    if(mysqli_num_rows($rs)<1){
        echo 'none';

    }else{
        while($row = $rs->fetch_assoc()){ ?>
  
        <div class="card">
            <img src="./admin/contentImg/<?php echo $row['image']?>" width="100" height="100">
            <h3><?php echo $row['courseName']?></h3>
            <button><a href="./php/enrollment.php?cid=<?php echo $row['courseId']?>">enroll</a></button>
        </div>
        <?php
        }}
        ?>
    </div>

    <?php
        include('footer.php');
    ?> 

</body>

</html>