<?php 
    include('./php/connection.php'); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/tutorial.css">
    <title>Le Bateau-Tutorial</title>
</head>
<body>
        <?php
            include('./header.php');
        ?>
    <section class="card-wrapper">
        <form action="./php/enrollment.php" name="tutorial form" method="POST">
            <div class="html-card-wrapper">
                
                <div class="html-description">
                    <h1 style="font-size: 2rem;">HTML</h1>
                    <p>The language for building web pages</p>
                    <button class="html-btn" name="course-btn" value="1">Learn HTML</button> 
                </div>

                <div class="html-card">
                    <h2>HTML Example:</h2>
                    <div class="html-display">
                        <span class="symbol"><</span>
                        <span class="tag">!DOCTYPE </span> 
                        <span style="color: #FF0000;">html</span>
                        <span class="symbol-rev">></span> 
                        <br>
                        <span class="symbol"><</span>
                        <span  class="tag">html</span>
                        <span class="symbol-rev">></span>
                        <br>
                        <span class="symbol"><</span>
                        <span class="tag">title</span>
                        <span class="symbol-rev">></span>
                        <span class="tag">HTML Tutorial</span>
                        <span class="symbol"><</span>
                        <span class="tag">/title</span>
                        <span class="symbol-rev">></span>
                        <br>
                        <span class="symbol"><</span>
                        <span class="tag">body</span>
                        <span class="symbol-rev">></span>
                        <br><br>
                        <span class="symbol"><</span>
                        <span class="tag">h1</span>
                        <span class="symbol-rev">></span>
                        <span class="tag">This is a heading</span>
                        <span class="symbol"><</span>
                        <span class="tag">/h1</span>
                        <span class="symbol-rev">></span>
                        <br>
                        <span class="symbol"><</span>
                        <span class="tag">p</span>
                        <span class="symbol-rev">></span>
                        <span class="tag">This is a paragraph.</span>
                        <span class="symbol"><</span>
                        <span class="tag">/p</span>
                        <span class="symbol-rev">></span>
                        <br>
                        <span class="symbol"><</span>
                        <span class="tag">/body</span>
                        <span class="symbol-rev">></span>
                        <br>
                        <span class="symbol"><</span>
                        <span class="tag">/html</span>
                        <span class="symbol-rev">></span>
                    </div>
                    <a href="./html-modules/exercises-elements and structures.html" class="try-it-yourself-btn">Try it yourself!</a>
                </div>
            </div>

            <div class="css-card-wrapper">
                <div class="css-description">
                    <h1 style="font-size: 2rem;">CSS</h1>
                    <p>The language for styling web pages</p>
                    <button class="css-btn" name="course-btn" value="2">Learn CSS</button> 
                </div>
                <div class="css-card">
                    <h2>CSS Example:</h2>
                    <div class="css-display">
                        <span class="tag">body </span> <span> {</span>
                        <br>
                        <span  class="css-tag">background-color<span>:</span></span>
                        <span class="arguments"> lightblue<span>;</span></span>
                        <br>
                        <span>}</span>
                        <br><br>
                        <span class="tag">h1 </span><span> {</span>
                        <br>
                        <span class="css-tag">color <span>:</span></span>
                        <span class="arguments"> white<span>;</span></span>
                        <br>
                        <span class="css-tag">text-align <span>:</span></span>
                        <span class="arguments"> center<span>;</span></span>
                        <br>
                        <span>}</span>
                    </div>
                    <a href="./css-modules/exercise-syntanx-selectors.html" class="try-it-yourself-btn">Try it yourself!</a>
                </div>
            </div>

            <div class="js-card-wrapper">
                <div class="js-description">
                    <h1 style="font-size: 2rem;">JavaScript</h1>
                    <p>The language for programming web pages</p>
                    <button class="js-btn" name="course-btn" value="3">Learn JavaScript</button>
                </div>
            
                <div class="js-card">
                    <h2>JavaSript Example:</h2>
                    <div class="js-display">
                        <span class="symbol"><</span>
                    <span style="color: #A52A2A;">button </span>
                    <span style="color: #FF0000;">onClick</span>
                    <span>=</span>
                    <span style="color: #0000CD;">"myFunction()"</span>
                    <span class="symbol">></span>
                    <span>Click Me!</span>
                    <span class="symbol"><</span>
                    <span style="color: #A52A2A;">/button</span>
                    <span class="symbol">></span>
                    <br><br>

                    <span class="symbol"><</span>
                    <span style="color: #A52A2A;">script </span>
                    <span class="symbol">></span>
                    <br>
                    <span style="color: #0000CD;">function</span>
                    <span>myFunction() {</span>
                    <br>
                    <span style="color: #0000CD;">  let  </span>
                    <span>x = document.getElementById(</span>
                    <span style="color: #A52A2A;">"demo"</span>
                    <span>);</span>
                    <br>
                    <span>  x.style.fontSize = </span>
                    <span style="color: #A52A2A;">"25px"</span>
                    <span>;</span>
                    <br>
                    <span>  x.style.color = </span>
                    <span style="color: #A52A2A;">"red"</span>
                    <span>;</span>
                    <br><br>
                    <span class="symbol"><</span>
                    <span style="color: #A52A2A;">/script </span>
                    <span class="symbol">></span>
                    </div>
                    <a href="./js-modules/exercises-introduction.html" class="try-it-yourself-btn">Try it yourself!</a>
                </div>
            </div>
        </form>

        <div class="showMoreBtn" style="display: flex; justify-content: center; padding: 1.45rem">
            <a href="./courses.php" 
            style=" text-decoration: none;
            background-color: #1F7A8C;
            color: white;
            display: inline-block;
            margin: 0.5rem 0;
            padding: 0.5rem 2rem;
            border-radius: 40px;">
                Show More
            </a>
        </div>

    </section>

    <?php
        include('./footer.php');
    ?>
</body>
</html>