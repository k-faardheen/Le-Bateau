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
    <h1>All Posts
    </h1>
    <button style="margin-left: 5%;">Add New</button>
    <div class="table-wrapper" style="margin-top:0%;">
        
        <table style="width:80%">
            <tr>
                <th>postId</th>
                <th>Title</th>
                <th>Course</th>
                <th>Image</th>
                <th>Author</th>
                <th>rating</th>
            </tr>
            <tr>
                <td>123</td>
                <td>Intro to html</td>
                <td>Html</td>
                <td><img src="../assets/user (1).png" width="50" height="50"></td>
                <td>Mun</td>
                <td>5</td>
                <td><a href="./alluser.php">view post</a><br>
                <a href="./alluser.php">delete</a><br>
                <a href="./alluser.php">edit</a></td>
            </tr>
        </table>
    </div>
</body>

</html>