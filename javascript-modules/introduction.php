<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Introduction to JavaScript</title>
</head>
<body>
    <?php include('./header.php');  ?> 


    <section class="header">
        <div class="header-wrapper" id="1">
            <h1>Introduction to JavaScript</h1>
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
        <article class="intro-js">
            <div class="explanation">
                <h2 class="heading">JavaScript</h2>
                <p>
                    JavaScript is a programming language that powers the dynamic behavior on most websites.
                    Alongside HTML and CSS, it is a core technology that makes the web run.
                </p>
            </div>
        </article>
        <article class="console.log">
            <div class="explanation">
                <h2 class="heading">console.log()</h2>
                <p>
                    The <span class="highlight-keyword">console.log()</span> method is used to log or print messages to the console. It can also be used to print objects and other info.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Hi there!'</span>); 
                <br>
                <span class="comments">// Prints: Hi there!</span>
            </div>
        </article>

        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>log "hello world" to the console.</p>
            </div>

            <form action="validate.php" method="post" id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./introduction.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <input type="text" id="quiz">.<input type="text" id="quiz">("<span class="k1">Hello World!</span>"); 
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </article>
        
        <article class="single-line-comments">
            <div class="explanation">
                <h2 class="heading">Single-Line Comments</h2>
                <p>
                    In JavaScript, single-line comments are created with two consecutive forward slashes <span class="highlight-keyword">//</span>.
                </p>
            </div>
            <div class="code-snippet">
                <span class="comments">// This lines will denote a comment</span>
            </div>
        </article>
        <article class="multi-line-comments">
            <div class="explanation">
                <h2 class="heading">Multi-Line Comments</h2>
                <p>
                    In JavaScript, multi-line comments are created by surrounding the lines with <span class="highlight-keyword">/*</span> at the beginning and <span class="highlight-keyword">*/</span> at the end.
                    Comments are good ways for a variety of reasons like explaining a code block or indicating some hints, etc.
                </p>
            </div>
            <div class="code-snippet">
                <span class="comments">/*</span>
                <br>
                <span class="comments">The code below will</span>
                <br>
                <span class="comments">print "hello world"</span>
                <br>
                <span class="comments">to the console.</span>
                <br>
                <span class="comments">*/</span>
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'hello world'</span>); 
            </div>
        </article>
        <article class="multi-line-comments">
            <div class="explanation">
                <h2 class="heading">Variables</h2>
                <p>
                    Variables are used whenever there's a need to store a piece of data. A variable contains data that can be used in the program elsewhere.
                    Using variables also ensures code re-usability since it can be used to replace the same value in multiple places.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">const currency </span> = <span class="k3">'$'</span>
                <br>
                <span class="k4">const userIncome </span> = <span class="k3">85000</span> 
            </div>
        </article>
        <article class="declaring-variables">
            <div class="explanation">
                <h2 class="heading">Declaring Variables</h2>
                <p>
                    To declare a variable in JavaScript, any of these three keywords can be used along with a variable name:
                    <ul>
                        <li><span class="highlight-keyword">var</span> is used in pre-ES6 versions of JavaScript.</li>
                        <li><span class="highlight-keyword">let</span>  is the preferred way to declare a variable when it can be reassigned.</li>
                        <li><span class="highlight-keyword">const</span> is the preferred way to declare a variable with a constant value.</li>
                    </ul>
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">var age</span>; 
                <br>
                <span class="k4">let weight</span>; 
                <br>
                <span class="k4">const numberOfFingers</span> = <span class="k1">20</span>; 
            </div>
        </article>
        <article class="let-keyword">
            <div class="explanation">
                <h2 class="heading">let Keyword</h2>
                <p>
                    <span class="highlight-keyword">let</span> creates a local variable in JavaScript & can be re-assigned. Initialization during the declaration of a <span class="highlight-keyword">let</span> variable is optional.
                    A <span class="highlight-keyword">let</span> variable will contain <span class="highlight-keyword">undefined</span> if nothing is assigned to it.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">let count</span>; 
                <br>
                <span class="k1">console</span>.log(<span class="k1">count</span>); <span class="comments">// Prints: undefined</span>
                <br>
                <span class="k1">count</span> = <span class="k1">10</span>; 
                <br>
                <span class="k1">console</span>.log(<span class="k1">count</span>); <span class="comments">  // Prints: 10</span>
            </div>
        </article>

        <article class="const-keyword">
            <div class="explanation">
                <h2 class="heading">const Keyword</h2>
                <p>
                    A constant variable can be declared using the keyword <span class="highlight-keyword">const</span>. It must have an assignment.
                    Any attempt of re-assigning a <span class="highlight-keyword">const</span> variable will result in JavaScript runtime error
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">const numberOfColumns</span> = <span class="k1">4</span>; 
                <br>
                <span class="k1">numberOfColumns</span> = <span class="k1">8</span>; 
                <br>
                <span class="comments">// TypeError: Assignment to constant variable.</span>
            </div>
        </article>

        <article class="string-concatenation">
            <div class="explanation">
                <h2 class="heading">String Concatenation</h2>
                <p>
                    In JavaScript, multiple strings can be concatenated together using the <span class="highlight-keyword">+</span> operator.
                    In the example, multiple strings and variables containing string values have been concatenated.
                    After execution of the code block, the <span class="highlight-keyword">displayText</span> variable will contain the concatenated string.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">let service</span> = <span class="k3">'credit card'</span>; 
                <br>
                <span class="k4">let month</span> = <span class="k3">'May 30th'</span>; 
                <br>
                <span class="k4">let displayText</span> = <span class="k3">'Your'</span> + <span class="k1">service</span> + <span class="k3">'bill is due on '</span> + <span class="k1">month</span>; 
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">displayText</span>); 
            </div>
        </article>

        <article class="template-literals">
            <div class="explanation">
                <h2 class="heading">Template Literals</h2>
                <p>
                    Template literals are strings that allow embedded expressions, <span class="highlight-keyword">${expression}</span>.
                    While regular strings use single <span class="highlight-keyword">'</span> or double <span class="highlight-keyword">"</span> quotes, template literals use backticks instead.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">let name </span> = <span class="k3">"John Smith"</span>; 
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">`Hello,</span> ${<span class="k1">name</span>} <span class="k3">`</span>);
                <br> 
                <span class="comments">// Prints: Hello, John Smith.</span>
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">`Billy is </span> ${<span class="k1">6+8</span>} <span class="k3"> years old.`</span>); 
                <br> 
                <span class="comments">// Prints: Billy is 14 years old.</span>
            </div>
        </article>

        <article class="arithmetic-operators">
            <div class="explanation">
                <h2 class="heading">Arithmetic Operators</h2>
                <p>JavaScript supports arithmetic operators for:</p>
                <ul>
                    <li><span class="highlight-keyword">+</span> addition</li>
                    <li><span class="highlight-keyword">-</span> subtraction</li>
                    <li><span class="highlight-keyword">*</span> multiplication</li>
                    <li><span class="highlight-keyword">/</span> division</li>
                    <li><span class="highlight-keyword">%</span> modulo</li>
                </ul>
            </div>
            <div class="code-snippet">
                <span class="comments">// Addition</span>
                <br>
                <span class="k1">5</span> + <span class="k1">5</span>
                <br>
                <span class="comments">// Subtraction</span>
                <br>
                <span class="k1">15</span> - <span class="k1">5</span>
                <br>
                <span class="comments">// Multiplication</span>
                <br>
                <span class="k1">5</span> * <span class="k1">10</span>
                <br>
                <span class="comments">// Division</span>
                <br>
                <span class="k1">10</span> / <span class="k1">5</span>
                <br>
                <span class="comments">// Modulo</span>
                <br>
                <span class="k1">10</span> % <span class="k1">5</span>
            </div>
        </article>
    </main>
    <script src="../script/styleLi.js"></script>
    <script src="./script/validate js-answer.js"></script>
</body>
</html>