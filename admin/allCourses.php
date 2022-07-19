<?php
session_start();
if(!isset($_SESSION['role'])){
    header('location:../login-form.php');
}else{
    if($_SESSION['role']!="contributor"){
        header('location:../login-form.php');
    }else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/admin.css">

    <title>All courses</title>
</head>

<body>
    <?php include('../header.php');
    include('../php/connection.php');
    ?>
    <h1>All Courses
    </h1>
    <button style="margin-left: 5%;"><a href="newCourse.php">Add New</a></button>
    <div class="table-wrapper" style="margin-top:0%;">
        <table style="width:80%;">
            <tr>
                <th>courseId</th>
                <th>Name</th>
                <th>Image</th>
            </tr>
            </tr>
            <?php
            $sql = "select * from course ORDER BY courseId DESC";
            $rs = mysqli_query($conn, $sql);
            if (mysqli_num_rows($rs) < 1) {
                echo 'none';
            } else {
                while ($row = $rs->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['courseId'] ?></td>
                        <td><?php echo $row['courseName'] ?></td>
                        <td><img src="./contentImg/<?php echo $row['image'] ?>" width="50" height="50"></td>
                        <td><a href="../landing-course.php?cid=<?php echo $row['courseId'] ?>">view course</a><br>
                            <a href="./delete.php?cid=<?php echo $row['courseId'] ?>">delete</a><br>
                    </tr>
            <?php
                }
            }
            ?>

        </table>
    </div>
</body>

</html>

<?php 
}}
?>