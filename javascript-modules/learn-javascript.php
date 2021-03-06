<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/learn-html.css">
    <title>Le Bateau - Javascript</title>
</head>
<body>
    <?php include('./header.php');  ?> 

    <section>
        <div class="banner-html">
            <div class="banner-html-title">
                <span>Learn JavaScript</span>
            </div>
        
            <div class="banner-html-start">
                <a href="../html-modules/elements and structures.php">Start</a>
            </div>
            
        </div>
    </section>

    <section class="overview-wrapper">

        <div class="overview-title">
            <span style="border-bottom: #1F7A8C solid 3.5px;">Overview</span>
        </div>

        <article class="overview-html">
            <span style="font-weight: bold; font-size: 1.1rem;">Why Learn JavaScipt?</span>
            <p>
                JavaScript is among the most powerful and flexible programming languages of the web.
                It powers the dynamic behavior on most websites, including this one
            </p>
            <br>
            <span style="font-weight:bold; font-size: 1.1rem;">Take-Away Skills</span>

            <p>
                You will learn programming fundamentals and basic object-oriented concepts using the latest JavaScript syntax.
                The concepts covered in these lessons lay the foundation for using JavaScript in any environment.
            </p>
        </article>

        <article class="html-syllabus">

            <ol class="syllabus-list">
                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>1</span>
                        </div>
                        <div class="list-description">
                            <a href="./introduction.php">Introduction</a>
                            <p>You will learn all about JavaScript Fundamentals.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>2</span>
                        </div>
                        <div class="list-description">
                            <a href="./conditionals.php">Conditionals</a>
                            <p>Learn how to use conditional statements.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>3</span>
                        </div>
                        <div class="list-description">
                            <a href="./functions.php">Functions</a>
                            <p>Learn about JavaScript function syntax, passing data to functions, the return keyword, and concise body syntax.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>4</span>
                        </div>
                        <div class="list-description">
                            <a href="./arrays.php">Arrays</a>
                            <p>You will learn about the fundamentals of arrays.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>5</span>
                        </div>
                        <div class="list-description">
                            <a href="./loops.php">Loops</a>
                            <p>In this course, you will learn how to use for and while loops to execute blocks of code multiple times.</p>
                        </div>
                    </div>
                </li>

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
                        <img src="../assets/minesweeper.png" width="100" height="100">
                    </div>
                    <div class="rainbow-description">
                        <a href="../minesweeper.html">Minesweeper</a>
                    </div>
                    <div class="lets-try">
                        <a href="../minesweeper.html"> Let's try -></a>
                    </div>
                </div>

                <div class="lemon">
                    <div class="lemon-img">
                        <img src="../assets/poker.png" width="100" height="100">
                    </div>
                    <div class="lemon-description">
                        <a href="">Poker Card Game</a>
                    </div>
                    <div class="lets-try">
                        <a href="../lemon-cake.html"> Let's try -></a>
                    </div>
                </div>

                <div class="road-sign">
                    <div class="road-signs-img">
                        <img src="../assets/tap.png" width="100" height="100">
                    </div>
                    <div class="road-signs-description">
                        <a href="../click-me.html">Click Me!</a>
                    </div>
                    <div class="lets-try">
                        <a href="../click-me.html"> Let's try -></a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include('./footer.php');  ?> 
</body>
</html>