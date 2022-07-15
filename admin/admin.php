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
    <?php include('../header.php'); ?>
    <h1>Darshboard
    </h1>
    <div class="wrapper">

        <div class="post">
            <img src="../assets/docs.png" width="50" height="50">
            <h4>15</h4><br>
            <button><a href="allPosts.php">view all posts</a></button>
        </div>
        <div class="course">
            <img src="../assets/learning (1).png" width="50" height="50">
            <h4>15</h4><br>
            <button><a href="allCourses.php">view all courses</a></button>
        </div>
        <div class="users">
            <img src="../assets/user (1).png" width="50" height="50">
            <h4>15</h4><br>
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
            <tr>
                <td>123</td>
                <td>Intro to html</td>
                <td>Html</td>
                <td><img src="../assets/user (1).png" width="50" height="50"></td>
                <td>Mun</td>
                <td><a href="./alluser.php">view post</a><br>
                <a href="./alluser.php">delete</a><br>
                <a href="./alluser.php">edit</a></td>
            </tr>
        </table>
    </div>
</body>

</html>