<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Learn JavaScript - Arrays</title>
</head>
<body>
    <?php include('./header.php');  ?> 


    <section class="header">
        <div class="header-wrapper" id="4">
            <h1>Arrays</h1>
            <div class="menu">
                <ul>
                    <li><h3>TOPICS</h3></li>
                    <li id="1"><a href="./introduction.php">Introduction</a></li>
                    <li id="2"><a href="./conditionals.php">Conditionals</a></li>
                    <li id="3"><a href="./functions.php">Functions</a></li>
                    <li id="4"><a href="./arrays.php">Arrays</a></li>
                    <li id="5"><a href="./loops.php">Loops</a></li>
                </ul>
            </div>
        </div>
    </section>

    <main class="main-wrapper">
        <article class="functions">
            <div class="explanation">
                <h2 class="heading">Arrays</h2>
                <p>
                    Arrays are lists of ordered, stored data. They can hold items that are of any data type. Arrays are created by using square brackets, with individual elements separated by commas.
                </p>
            </div>
            <div class="code-snippet">
                <span class="comments">// An array containing numbers</span>
                <br>
                <span class="k4">const numberArray</span>= [<span class="k1">0</span>, <span class="k1">1</span>, <span class="k1">2</span>, <span class="k1">3</span>];

                <br><br>
                <span class="comments">// An array containing different data types</span>
                <br>
                <span class="k4">const numberArray</span>= [<span class="k1">1</span>, <span class="k3">'chicken'</span>, <span class="k5">false</span>];
            </div>
        </article>  

        <article class="index">
            <div class="explanation">
                <h2 class="heading">Index</h2>
                <p>
                    Array elements are arranged by index values, starting at <span class="highlight-keyword">0</span> as the first element index. Elements can be accessed by their index using the array name, and the index surrounded by square brackets.
                </p>
            </div>
            <div class="code-snippet">
                <span class="comments">// Accessing an array element</span>
                <br>
                <span class="k4">const numberArray</span> = [<span class="k1">100</span>, <span class="k1">200</span>, <span class="k1">300</span>];
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">myArray</span>[<span class="k1">0</span>]); <span class="comments"> // 100</span>
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">myArray</span>[<span class="k1">1</span>]); <span class="comments"> // 200</span>
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">myArray</span>[<span class="k1">2</span>]); <span class="comments"> // 300</span>
            </div>
        </article>
        <article class=".length">
            <div class="explanation">
                <h2 class="heading">Property .length</h2>
                <p>The <span class="highlight-keyword">.length</span> property of a JavaScript array indicates the number of elements the array contains.</p>
            </div>
            <div class="code-snippet">
                <span class="k4">const numberArray</span> = [<span class="k1">1</span>, <span class="k1">2</span>, <span class="k1">3</span>, <span class="k1">4</span>];
                <br><br>
                <span class="k1">numbers</span>.<span class="k2">length</span> <span class="comments">// 4</span>
            </div>
        </article>
        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>Declare an array, cars with the value "Ferrari", "Mercedes", "Red Bull"</p>
            </div>

            <form action="validate.php" method="post"  id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./exercises-arrays.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <span class="k4">let cars </span>= ["<input type="text" id="quiz">", "<input type="text" id="quiz">", "<input type="text" id="quiz">"]; 
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </article>
    </main>
    <script src="../script/styleLi.js"></script>
    <script src="./script/validate js-answer.js"></script>
</body>
</html>