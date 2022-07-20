<?php
session_start();
if(!isset($_SESSION['role'])){//looking if login
    header('location:../login-form.php'); // if not login then redirect
}else{
    if($_SESSION['role']!="contributor"){// look if it is a contributor
        header('location:../login-form.php');// if not login then redirect
    }else{
?>

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
    <script src="./tinymce/js/tinymce/tinymce.min.js"></script><!--This is a WYSIWYG editor, taken from https://www.tiny.cloud/ read more in documentation -->
    <script>
        tinymce.init({
            selector: '#default-editor'
        });
    </script>
    <title>New Post</title>
</head>

<body>
    <?php include('./header.php');
    include('../php/connection.php');
    ?>
    <h1>New Post</h1>
    <div class="wrapper-newPost">
        <form name="newPost" id="newPost" action="newPost.php" method="POST">
            <label>Post Title: </label><input type="text" name="title" id="title"><br>
            <label for="course">Course: </label><select name="course" id="course">
                <?php
                $sql = "select courseName from course";
                $rs = mysqli_query($conn, $sql);
                if (mysqli_num_rows($rs) < 1) {
                    echo 'none';
                } else {
                    while ($row = $rs->fetch_assoc()) { ?>
                        <option value="<?php echo $row['courseName'] ?>"><?php echo $row['courseName'] ?></option>
                <?php
                    }
                } ?>

            </select><br>
            <label for="image">Upload An Image: </label><input type="file" name="image" id="image"><br>
            <label for="content">Post Contents: </label><br><textarea name="content" id="default-editor"></textarea><br>
            <button id="publish" onclick="tinyMCE.triggerSave(true,true)//save and exit tinymce;">Publish</button>
        </form>
    </div>
    <script>
        //using jquery
        $(document).ready(function() {//wait for the whole document to load
            $("#publish").on('click', function(e) {//when the button add new is clicked the function is run
                e.preventDefault();// prevent the page to refresh
                let formData = new FormData(document.getElementById("newPost"));//get all the element in the form and encode the data
                console.log(formData)
                $.ajax({//using ajax to send the form
                    type: 'POST',//using method post
                    url: 'insertPost.php',//send data to insertPost.php
                    data: formData,//what data to send 
                    dataType: 'json',//specifies the type of response data  //what type of data to return
                    cache: false,// force requested pages not to be cached by the browser
                    contentType: false,//tell jQuery to not set any content type header. else it will urlencode the data
                    processData: false,//not to process and transform the data into a query string
                    success: function(message) {//call the function if the request suceeded
                        if (message != "ok") {
                            alert(message)//display error message 
                        } else {
                            window.location.replace("admin.php");//redirect the user if sucessfull
                        }
                    }

                })
            })
        })
    </script>
</body>

</html>
<?php 
}}
?>