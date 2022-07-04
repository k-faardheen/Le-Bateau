<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset password</title>
    <link rel="stylesheet" href="../style/forget-pwd.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./assets/rainbow.png">
</head>

<body>
    <header>
        <div class="nav-container">
            <div class="lebateau">
                <span>>_Le Bateau</span>
            </div>
            <nav>
                <div class="links">
                    <ul>
                        <li><a href="./tutorial.html">Tutorials</a></li>
                        <li><a href="./code-challenge.html">Code Challenges</a></li>
                        <li><a href="./about-us.html">About Us</a></li>
                        <li><a href="./login-form.php">Log in</a></li>
                        <li><a href="./sign-up.html">Sign up</a></li>
                    </ul>
                </div>
            </nav>

            <div class="bar-icon">
                <button><i class="fa-solid fa-bars"></i></button>
            </div>
            <div class="responsive-menu" style="display: none;">
                <nav>
                    <div class="responsive-links">
                        <ul>
                            <li><a href="./tutorial.html">Tutorials</a></li>
                            <li><a href="./code-challenge.html">Code Challenges</a></li>
                            <li><a href="./about-us.html">About Us</a></li>
                            <li><a href="./login-form.php">Log in</a></li>
                            <li><a href="./sign-up.html">Sign up</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div id="wrapper">
        <div id="container">
            <h1>Reset password </h2>
                <form name="forget-pwd" action="reset-pwd.php" method="POST">
                    <input type="password" id="password" name="pass" placeholder="Enter your password" /><br>
                    <input type="password" id="password" name="cpass" placeholder="Confirm your password" />
                    <button name="submit" id="btn">Reset password</button>
                </form>
                <?php
                session_start();
                include('connection.php');
                if (isset($_POST['submit'])) {

                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
                    $email = $_SESSION['email'];
                    if (strcmp($pass, $cpass) !== 0) {
                        echo "<font color='red'>password doesnot match</font>";
                    }else{
                        $sql = "UPDATE registration SET password = '" . $pass . "' WHERE email = '$email'";
                        $rs = mysqli_query($conn, $sql);
    
                        if ($rs) {
                            header('location:dashboard.php');
                        } else {
                            echo 'A error has occured';
                        }
                    }
                    
                    
                }
                mysqli_close($conn);
                ?>
        </div>
    </div>
</body>

</html>