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
    <title>New Course</title>
</head>

<body>
    <?php include('../header.php'); ?>
    <h1>New Course</h1>
    <div class="wrapper-newPost">
        <form name="newCourse" action="newCourse.php" method="POST">
            <label>Course Name: </label><input type="text" name="name" id="name"><br>
            <label>Upload an image: </label><br>
            <label for="description">Course description: </label><br><textarea name="" id="default-editor"></textarea><br>
            <button>Add New</button>
        </form>
    </div>
</body>

</html>