<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/admin.css">

    <title>Admin Dashboard</title>
</head>

<body>
    <?php include('../header.php');
    include('function.php');
    include('../php/connection.php')
    ?>
    <h1>Darshboard
    </h1>
    <div class="wrapper">

        <div class="post">
            <img src="../assets/docs.png" width="50" height="50">
            <h4><?php echo total(1); ?></h4><br>
            <button><a href="allPosts.php">view all posts</a></button>
        </div>
        <div class="course">
            <img src="../assets/learning (1).png" width="50" height="50">
            <h4><?php echo total(2); ?></h4><br>
            <button><a href="allCourses.php">view all courses</a></button>
        </div>
        <div class="users">
            <img src="../assets/user (1).png" width="50" height="50">
            <h4><?php echo total(3); ?></h4><br>
            <button><a href="allUsers.php">view all users</a></button>
        </div>
    </div>
    <div class="btn-wrapper">
        <button><a href="newPost.php">Create new post</a></button>
        <button><a href="newCourse.php">Create new course</a></button>
    </div>

    <div class="table-wrapper">
        <h2>
            Latest Posts
        </h2>
        <table>
            <tr>
                <th>postId</th>
                <th>Title</th>
                <th>Course</th>
                <th>Image</th>
                <th>Author</th>
            </tr>
            <?php
            $sql = "select * from postcontent ORDER BY postId DESC limit 5";
            $rs = mysqli_query($conn, $sql);
            if (mysqli_num_rows($rs) < 1) {
                echo 'none';
            } else {
                while ($row = $rs->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['postId'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['course'] ?></td>
                        <td><img src="./contentImg/<?php echo $row['image'] ?>" width="50" height="50"></td>
                        <td><?php echo $row['author'] ?></td>
                        <td><a href="../php/post.php?pid=<?php echo $row['postId'] ?>">view post</a><br>
                            <a href="./delete.php?pid=<?php echo $row['postId'] ?>">delete</a><br>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>

        </table>
    </div>
</body>

</html>