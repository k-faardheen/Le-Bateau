<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/admin.css">
    <link rel="stylesheet" href="../style/newPost.css">
    <script src="./tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea#default-editor'
        });
    </script>
    <title>New Post</title>
</head>

<body>
    <?php include('../header.php'); ?>
    <h1>New Post</h1>
    <div class="wrapper-newPost">
        <form name="newPost" action="newPost.php" method="POST">
            <label>Post Title: </label><input type="text" name="title" id="title"><br>
            <label for="Course">Course: </label><select name="course" id="course">
                <option value="html">html</option>
            </select><br>
            <label for="image">Upload An Image: </label><br>
            <label for="content">Post Contents: </label><br><textarea name="" id="default-editor"></textarea><br>
            <button>Publish</button>
        </form>
    </div>
</body>

</html>