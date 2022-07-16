<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
        <form name="newCourse" id = "newCourse" action="newCourse.php" method="POST">
            <label>Course Name: </label><input type="text" name="name" id="name"><br>
            <label>Upload an image: </label><input type="file" name="image" id="image"><br><br>
            <label for="description">Course description: </label><br><textarea name="description" id="default-editor"></textarea><br>
            <button id="new" onclick="tinyMCE.triggerSave(true,true);">Add New</button><!--save and exit tinymce-->
        </form>
    </div>
    <script>
        //using jquery
        $(document).ready(function() {
            $("#new").on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'insertCourse.php',
                    data: new FormData(document.getElementById("newCourse")),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(message) {
                        if (message != "ok") {
                            alert(message)
                        } else {
                            window.location.replace("admin.php");
                        }
                    }

                })
            })
        })
    </script>
</body>

</html>