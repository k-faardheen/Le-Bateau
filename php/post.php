<?php
session_start();
if(!isset($_SESSION['role'])){
    header('location:../login-form.php');
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/post.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Reading Post</title>
</head>
<body> 
    <?php include('./view/header.php'); 
    include('./connection.php');

    if (isset($_GET['pid'])){
        $postId = $_GET['pid'];
        $sql= "select * from postContent where postId = '$postId'";
        $rs = mysqli_query($conn, $sql);
        $imgPath = "";
        $title = "";
        $content = "";
        $author = "";

    if (mysqli_num_rows($rs) < 1) {?>

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
                <h1><?php echo $title?></h1>
            </div>
            <div class="grab-image">
                <img src="../admin/contentImg/<?php echo $imgPath?>" alt="image">
                
            </div>
            <div class="post-description">
            <span><?php echo $content?></span>
            <span>Author: <?php echo $author;?></span>
        </div>

        </div>
        
        <div class="right-section">
            <div class="search-container">
                <form action="" class="search">
                    <input type="text" name="search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div></div>
        </div>
    </div>
    <?php }else{?>
         <h1>404 not found</h1>
  <?php  }include('./view/footer.php'); ?> 

</body>
</html>

<?php 
}
?>