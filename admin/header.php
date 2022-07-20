<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body> 
    <header>
            <div class="nav-container">
                <div class="lebateau">
                    <a href="../index.php">>_Le Bateau</a>
                </div>
                 <nav>
                        <div class="links">
                            <ul style="display: flex; ">
                                <li><a href="../tutorial.php">Courses</a></li>
                                <li><a href="../code-challenge.html">Code Challenges</a></li>
                                <li><a href="../about-us.html">About Us</a></li>

                                <?php
                                    if(!isset($_SESSION['fName'])) { 
                                ?>
                                        <div class="auth"> 
                                            <li><a href="./login-form.php">Log in</a></li>
                                            <li><a href="./sign-up.html">Sign up</a></li>
                                        </div>
                                    
                                   <?php }else { ?>
                                        <li class="user-icon"><a href="./php/dashboard.php"><i class="fa-solid fa-user"></i></a></li>
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
                                <li><a href="../tutorial.php">Tutorials</a></li>
                                <li><a href="../code-challenge.html">Code Challenges</a></li>
                                <li><a href="../about-us.html">About Us</a></li>
                                <li><a href="../login-form.php">Log in</a></li>
                                <li><a href="../sign-up.html">Sign up</a></li>
                            </ul>
                        </div>
                </nav> 
                </div>
            </div>         
    </header>

    </body> 
</html> 