<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/learn-html.css">
    <title>Le Bateau - HTML</title>
</head>
<body>
    <?php include('./header.php'); ?>

    <section>
        <div class="banner-html">
            <div class="banner-html-title">
                <span>Learn HTML</span>
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
            <span style="font-weight: bold; font-size: 1.1rem;">Why Learn HTML?</span>
            <p>
                HTML is the foundation of all web pages. 
                Without HTML, you wouldn't be able to organize text or add images or videos to your web pages. 
                HTML is the beginning of everything you need to know to create engaging web pages!
            </p>

            <br>

            <span style="font-weight:bold; font-size: 1.1rem;">Take-Away Skills</span>

            <p>
                You will learn all the common HTML tags used to structure HTML pages, the skeleton of all websites. 
                You will also be able to create HTML tables to present tabular data efficiently.
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
                            <a href="./elements and structures.php">Elements and Structures</a>
                            <p>Learn about HTML elements and structure, the building blocks of websites.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>2</span>
                        </div>
                        <div class="list-description">
                            <a href="./tables.php">Tables</a>
                            <p>You'll learn all the syntax you need to create tables in your HTML documents.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="list-container">
                        <div class="list-order">
                            <span>3</span>
                        </div>
                        <div class="list-description">
                            <a href="./forms.php">Forms</a>
                            <p>You'll learn on how to create your own forms and integrate HTML5 validation.</p>
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
                        <img src="../assets/rainbow.png" width="100" height="100">
                    </div>
                    <div class="rainbow-description">
                        <a href="../rainbow.html">The colours of the rainbow (HTML Task)</a>
                    </div>
                    <div class="lets-try">
                        <a href="../code-challenge/rainbow.html"> Let's try -></a>
                    </div>
                </div>

                <div class="lemon">
                    <div class="lemon-img">
                        <img src="../assets/lemon.png" width="100" height="100">
                    </div>
                    <div class="lemon-description">
                        <a href="../lemon-cake.html">Lemon Drizzle Cake Recipe (HTML Task)</a>
                    </div>
                    <div class="lets-try">
                        <a href="../code-challenge/lemon-cake.html"> Let's try -></a>
                    </div>
                </div>

                <div class="road-sign">
                    <div class="road-signs-img">
                        <img src="../assets/highway-sign.png" width="100" height="100">
                    </div>
                    <div class="road-signs-description">
                        <a href="../road-sign.html">Road Signs (HTML / CSS)</a>
                    </div>
                    <div class="lets-try">
                        <a href="../code-challenge/road-sign.html"> Let's try -></a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include('./footer.php') ?>
</body>
</html>