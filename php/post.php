<?php
session_start();
if (!isset($_SESSION['role'])) {
    header('location:../login-form.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/post.css">
        <link rel="stylesheet" href="../style/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Reading Post</title>
    </head>


    <body>
        <?php include('./header.php');
        include('./connection.php');

        if (isset($_GET['pid'])) {
            $postId = $_GET['pid'];
            $sql = "select * from postContent where postId = '$postId'";
            $rs = mysqli_query($conn, $sql);
            $imgPath = "";
            $title = "";
            $content = "";
            $author = "";

            if (mysqli_num_rows($rs) < 1) { ?>

                <h1>404 not found</h1>
            <?php
            } else {
                while ($row = $rs->fetch_assoc()) {
                    $imgPath = $row['image'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $author = $row['author'];
                }
            }
            ?>
            <div class="wrapper">
                <div class="post-content">
                    <div class="title">
                        <h1><?php echo $title ?></h1>
                    </div>
                    <div class="grab-image">
                        <img src="../admin/contentImg/<?php echo $imgPath ?>" alt="image">

                    </div>
                    <div class="post-description">
                        <span><?php echo $content ?></span>
                        <span>Author: <?php echo $author; ?></span>
                    </div>

                </div>

                <div class="right-section">
                    <div class="search">
                        <button class="btnsearch">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" id="search" class="input-search" placeholder="Enter a keyword">
                    </div>
                    <div class="result"></div>
                </div>
            </div>
        <?php } else { ?>
            <h1>404 not found</h1>
        <?php  }
        include('./footer.php'); ?>

    </body>
    <script>
        $(document).ready(function(event) {
            const search = document.querySelector(".search");
            const btn = document.querySelector(".btnsearch");

            btn.addEventListener('click', function() {
                search.classList.toggle('active')
            })


            let inputSearch = document.getElementById("search")
            let output = document.querySelector('.result')
            inputSearch.addEventListener('change', function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: inputSearch.value
                    },
                    dataType: 'json',
                    success: function(response) {
                        let string = ""
                        if (response == "Not Found") {
                            output.innerHTML = "Not Found, You can try another keyword"
                        } else {
                            for (let i = 0; i < response.length; i++) {
                                string += "<a href = 'post.php?pid=" + response[i].postId + "'>" + response[i].title + "</a><br>"
                            }
                            output.innerHTML = string;
                        }


                    }

                })
            })
        });
    </script>

    </html>

<?php
}
?>