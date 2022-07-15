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
    <title>New Post</title>
</head>

<body>
    <?php include('../header.php'); ?>
    <h1>New Post</h1>
    <div class="wrapper-newPost">
        <form name="newPost" action="newPost.php" method="POST">
            <!--encoding the uploaded image as we used formData-->
            <label>Post Title: </label><input type="text" name="title" id="title"><br>
            <label for="Course">Course: </label><select name="course" id="course">
                <option value="html">html</option>
            </select><br>
            <label for="image">Upload An Image: </label><input type="file" name="image" id="image"><br>
            <label for="content">Post Contents: </label><br><textarea name="" id="default-editor"></textarea><br>
            <button id="publish">Publish</button>
        </form>
    </div>
    <script>
        // using jQuery to listen event of the button
        $("#publish").click(function(e) {
            e.preventDefault();
            let fd = new FormData(); //construct a set of key/value pairs representing form fields and their values, which can then be easily sent using XMLHttpRequest.send() method. 
            //It uses the same format a form would use if the encoding type were set to "multipart/form-data".
            //let image = $('#image')[0].files;//storing the image in the variable
            let blob = $('#image').imageBlob().blob();
            console.log('size=' + blob.size);
            console.log('type=' + blob.type);


        })
    </script>
</body>

</html>