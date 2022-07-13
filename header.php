<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body> 
    <header>
            <div class="nav-container">
                <div class="lebateau">
                    <span>>_Le Bateau</span>
                </div>
                 <nav>
                        <div class="links">
                            <ul style="display: flex; ">
                                <li><a href="./tutorial.html">Tutorials</a></li>
                                <li><a href="./code-challenge.html">Code Challenges</a></li>
                                <li><a href="./about-us.html">About Us</a></li>

                                <?php
                                    session_start(); 
                                    if(!isset($_SESSION['name'])) { 
                                ?>
                                        <div class="auth"> 
                                            <li><a href="./login-form.php">Log in</a></li>
                                            <li><a href="./sign-up.html">Sign up</a></li>
                                        </div>
                                    
                                   <?php }else { ?>
                                        <li class="user-icon" style="display: block; "><a href="./php/dashboard.php"><img src="./assets/user.png" style="width: 20px; height: 20px;"></a></li>
                                   <?php } ?>
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
                                <li><a href="./log-in.html">Log in</a></li>
                                <li><a href="./sign-up.html">Sign up</a></li>
                            </ul>
                        </div>
                </nav> 
                </div>
            </div>         
    </header>

    </body> 
</html> 