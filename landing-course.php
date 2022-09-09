
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/learn-html.css">
    <title>course landing page</title>
</head>

<body>
    <?php
    include('header.php');
    if(!isset($_SESSION['role'])){
        header('location:../login-form.php');
        
    }else{
    include('./php/connection.php');
    if (!isset($_GET['cid'])) {
        echo '404 not found';
    } else {
        $courseName = "";
        $desc = "";
        $courseId = $_GET['cid'];
        $sql = "select * from course where courseId = '$courseId'";
        $rs = mysqli_query($conn, $sql);
        if (mysqli_num_rows($rs) < 1) { ?>

            <h1>404 not found</h1>
        <?php
        } else {
            while ($row = $rs->fetch_assoc()) {
                $courseName = $row['courseName'];
                $desc = $row['description'];
            }
        }



        ?>


        <section>
            <div class="banner-html">
                <div class="banner-html-title">
                    <span>Learn <?php echo $courseName ?></span>
                </div>

                <div class="banner-html-start">
                    <a href="../html-modules/elements and structures.html">Start</a>
                </div>

            </div>
        </section>

        <section class="overview-wrapper">

            <div class="overview-title">
                <span style="border-bottom: #1F7A8C solid 3.5px;">Overview</span>
            </div>

            <article class="overview-html">
                <?php echo $desc ?>
            </article>

            <article class="html-syllabus">

                <ol class="syllabus-list">

                    <?php

                    $i = 0;
                    $postTitle = "";
                    $pid = 0;
                    $retSql = "select * from postContent where course = '$courseName'";
                    $retRs = mysqli_query($conn, $retSql);
                    if (mysqli_num_rows($retRs) < 1) { ?>

                        <h1>404 not found</h1>
                        <?php
                    } else {
                        while ($rowC = $retRs->fetch_assoc()) {
                            $postTitle = $rowC['title'];
                            $pid = $rowC['postId']; ?>
                            <li>
                                <div class="list-container">
                                    <div class="list-order">
                                        <span><?php echo $i ?></span>
                                    </div>
                                    <div class="list-description">
                                        <a href="./php/post.php?pid=<?php echo $pid ?>"><?php echo $postTitle ?></a>
                                    </div>
                                </div>
                            </li>

                <?php
                            $i++;
                        }
                    }
                }
                ?>

                </ol>
            </article>
        </section>

        <article class="build">
            <div class="build-wrapper">

                <div class="heading">
                    <h1>WHAT YOU'LL BE BUILDING.</h1>
                </div>

                <div class="code-challenge">

                    <div class="rainbow">
                        <div class="rainbow-img">
                            <img src="./assets/rainbow.png" width="100" height="100">
                        </div>
                        <div class="rainbow-description">
                            <a href="./rainbow.html">The colours of the rainbow (HTML Task)</a>
                        </div>
                        <div class="lets-try">
                            <a href="./code-challenge/rainbow.html"> Let's try -></a>
                        </div>
                    </div>

                    <div class="lemon">
                        <div class="lemon-img">
                            <img src="./assets/lemon.png" width="100" height="100">
                        </div>
                        <div class="lemon-description">
                            <a href="./lemon-cake.html">Lemon Drizzle Cake Recipe (HTML Task)</a>
                        </div>
                        <div class="lets-try">
                            <a href="./code-challenge/lemon-cake.html"> Let's try -></a>
                        </div>
                    </div>

                    <div class="road-sign">
                        <div class="road-signs-img">
                            <img src="./assets/highway-sign.png" width="100" height="100">
                        </div>
                        <div class="road-signs-description">
                            <a href="./road-sign.html">Road Signs (HTML / CSS)</a>
                        </div>
                        <div class="lets-try">
                            <a href="./code-challenge/road-sign.html"> Let's try -></a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <footer>
            <div class="footer-container">

                <div class="footer-nav">
                    <ul>
                        <li><a href="./tutorial.html">Tutorials</a></li>
                        <li><a href="./code-challenge.html">Code Challenges</a></li>
                        <li><a href="../about-us.html">About Us</a></li>
                        <li><a href="../privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="../terms-and-conditions.html">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <span>© 2022 Copyright • Le Bateau</span>
                </div>
            </div>
        </footer>
</body>

</html>

<?php 
}
?>