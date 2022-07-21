<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Learn JavaScript - Conditionals</title>
</head>
<body>
    <?php include('./header.php');  ?> 


    <section class="header">
        <div class="header-wrapper" id="3">
            <h1>Functions</h1>
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
                <h2 class="heading">Functions</h2>
                <p>

                    Functions are one of the fundamental building blocks in JavaScript.
                    A function is a reusable set of statements to perform a task or calculate a value. 
                    Functions can be passed one or more values and can return a value at the end of their execution.
                    In order to use a function, you must define it somewhere in the scope where you wish to call it.
                </p>
                <br><br>
                <p>The example code provided contains a function that takes in 2 values and returns the sum of those numbers.</p>
                <br>
                <p>
                    Control structures such as conditionals (if statements and the like) alter control flow by only executing blocks of code if certain conditions are met. These structures essentially allow a program to make decisions about which code is executed as the program runs
                </p>
            </div>
            <div class="code-snippet">
                <span class="comments">// Defining the function:</span>
                <br>
                <span class="k4">function sum</span>(<span class="k4">num1</span>,<span class="k4">num2</span>) {
                <br>
                <span class="k4">return</span> <span class="k1">num1</span> + <span class="k1">num2</span>; 
                <br>
                }
                <br><br>
                <span class="comments">// Calling the function:</span>
                <br>
                <span class="k1">sum</span>(<span class="k1">3</span>, <span class="k1">6</span>); <span class="comments">// 9</span>
            </div>
        </article>  

        <article class="function-expressions">
            <div class="explanation">
                <h2 class="heading">Functions Expressions</h2>
                <p>Function expressions create functions inside an expression instead of as a function declaration. They can be anonymous and/or assigned to a variable.</p>
            </div>
            <div class="code-snippet">
                <span class="k4">const dog</span> = <span class="k4">function</span>() {
                <br>
                <span class="k4">return </span> <span class="k3">'Woof!'</span>; 
                <br>
                }
            </div>
        </article>
        <article class="function-parameters">
            <div class="explanation">
                <h2 class="heading">Function Parameters</h2>
                <p>Inputs to functions are known as parameters when a function is declared or defined. Parameters are used as variables inside the function body. When the function is called, these parameters will have the value of whatever is passed in as arguments. It is possible to define a function without parameters.</p>
            </div>
            <div class="code-snippet">
                <span class="comments"> // The parameter is name</span>
                <br><br>
                <span class="k4">function sayHello</span>(<span class="k4">name</span>) {
                <br>
                <span class="k4">return</span> <span class="k3">`Hello,</span> ${<span class="k1">name</span>}  <span class="k3">!`</span> ; 
                <br>
                }
            </div>
        </article>
        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>Pass the variable name as a parameter for the function "hello".</p>
            </div>

            <form action="validate.php" method="post" id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./exercises-functions.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <span class="k4">let name </span>= "<span class="k1">Jimmy</span>"; 
                        <br>
                        <span class="k4">function hello</span>( <input type="text" id="quiz"> ) {
                        <br>
                        <span class="k1">console</span>.<span class="k2">log</span>("<span class="k1">hello</span>" + name); 
                        <br>
                        }
                       
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </article>
        <article class="return-keyword">
            <div class="explanation">
                <h2 class="heading">return Keyword</h2>
                <p>
                    Functions return (pass back) values using the <span class="highlight-keyword">return</span> keyword. <span class="highlight-keyword">return</span> ends function execution and returns the specified value to the location where it was called.
                    A common mistake is to forget the <span class="highlight-keyword">return</span> keyword, in which case the function will return <span class="highlight-keyword">undefined</span> by default.
                </p>
            </div>
            <div class="code-snippet">
                <span class="comments">// With return</span>
                <br>
                <span class="k4">function sum</span>(<span class="k4">num1</span>,<span class="k4">num2</span>) {
                <br>
                <span class="k4">return</span> <span class="k1">num1</span> + <span class="k1">num2</span>; 
                <br>
                }
                <br><br>
                <span class="comments">// Without return, so the function doesn't output the sum</span>
                <br>
                <span class="k4">function sum</span>(<span class="k4">num1</span>,<span class="k4">num2</span>) {
                <br>
                <span class="k1">num1</span> + <span class="k1">num2</span>; 
                <br>
                }
            </div>
        </article>
        
    </main>
    <script src="../script/styleLi.js"></script>
    <script src="./script/validate js-answer.js"></script>
</body>
</html>