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
        <div class="header-wrapper" id="2">
            <h1>Conditionals</h1>
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
        <article class="control-flow">
            <div class="explanation">
                <h2 class="heading">Control Flow</h2>
                <p>
                    Control flow is the order in which statements are executed in a program. The default control flow is for statements to be read and executed in order from left-to-right, top-to-bottom in a program file.
                </p>
                <br>
                <p>
                    Control structures such as conditionals (if statements and the like) alter control flow by only executing blocks of code if certain conditions are met. These structures essentially allow a program to make decisions about which code is executed as the program runs
                </p>
            </div>
        </article>  
        <article class="comparison-operators">
            <div class="explanation">
                <h2 class="heading">Comparison Operators</h2>
                <p>Comparison operators are used to comparing two values and return <span class="highlight-keyword">true</span> or <span class="highlight-keyword">false</span> depending on the validity of the comparison:</p>
                <ul>
                    <li><span class="highlight-keyword">===</span> strict equal</li>
                    <li><span class="highlight-keyword">!==</span> strict NOT equal</li>
                    <li><span class="highlight-keyword">&lt;</span> greater than</li>
                    <li><span class="highlight-keyword">&lt;=</span> greater than or equal</li>
                    <li><span class="highlight-keyword">&gt;</span> less than</li>
                    <li><span class="highlight-keyword">&gt;=</span> less than or equal</li>
                </ul>
            </div>
            <div class="code-snippet">
                <span class="k1">1</span> &lt; <span class="k1">3</span> <span class="comments"> // false</span>
                <br>
                <span class="k1">3</span> &lt; <span class="k1">1</span> <span class="comments"> // true</span>
                <br>
                <span class="k1">250</span> &lt;= <span class="k1">250</span> <span class="comments"> // true</span>
                <br>
                <span class="k1">1</span> === <span class="k1">1</span> <span class="comments"> // true</span>
                <br>
                <span class="k1">1</span> === <span class="k1">3</span> <span class="comments"> // false</span>
                <br>
                <span class="k1">1</span> === <span class="k3">'1'</span> <span class="comments"> // false</span>
            </div>
        </article>
        <article class="if-statement">
            <div class="explanation">
                <h2 class="heading">if Statement</h2>
                <p>An <span class="highlight-keyword">if</span> statement accepts an expression with a set of parentheses:</p>
                <ul>
                    <li>If the expression evaluates to a truthy value, then the code within its code body executes.</li>
                    <li>If the expression evaluates to a falsy value, its code body will not execute.</li>
                </ul>
            </div>
            <div class="code-snippet">
                <span class="k4">const isMailSent</span> = <span class="k5">true</span>
                <br><br>
                <span class="k4">if</span>(<span class="k1">isMailSent</span>) { 
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Mail sent to recipient'</span>); 
                <br>
                }
            </div>
        </article>
        <article class="else-if-clause">
            <div class="explanation">
                <h2 class="heading">else if Clause</h2>
                <p>
                    After an initial <span class="highlight-keyword">if</span> block, <span class="highlight-keyword">else if</span> blocks can each check an additional condition. An optional else block can be added after the <span class="highlight-keyword">else if</span> block(s) to run by default if none of the conditionals evaluated to truthy.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">const size </span> = <span class="k1">10</span>; 
                <br><br>
                <span class="k4">if </span>(<span class="k1">size > 100</span>) {
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Big'</span>); 
                <br>
                }
                <span class="k4">else if </span>(<span class="k1">size > 20</span>) {
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Medium'</span>); 
                <br>
                }<span class="k4">else if </span>(<span class="k1">size > 4</span>) {
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Small'</span>); 
                <br>
                }<span class="k4">else</span>{
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Tiny'</span>); 
            </div>
        </article>
        <article class="else-statement">
            <div class="explanation">
                <h2 class="heading">else Clause</h2>
                <p>
                    An <span class="highlight-keyword">else</span> block can be added to an <span class="highlight-keyword">if</span> block or series of <span class="highlight-keyword">if</span>-<span class="highlight-keyword">else if</span> blocks. The <span class="highlight-keyword">else</span> block will be executed only if the <span class="highlight-keyword">if</span> condition fails.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">const isMailSent</span> = <span class="k5">true</span>
                <br><br>
                <span class="k4">if</span>(<span class="k1">isMailSent</span>) { 
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Mail sent to recipient'</span>); 
                <br>
                } <span class="k4">else</span> { 
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Mail Not sent to recipient'</span>); 
                <br>
                }
            </div>
        </article>

        <article class="switch">
            <div class="explanation">
                <h2 class="heading">switch Statement</h2>
                <p>
                    The <span class="highlight-keyword">switch</span> statements provide a means of checking an expression against multiple <span class="highlight-keyword">case</span> clauses. If a case matches, the code inside that clause is executed.
                </p>
                <br><br>
                <p>
                    The <span class="highlight-keyword">case</span> clause should finish with a <span class="highlight-keyword">break</span> keyword. If no case matches but a <span class="highlight-keyword">default</span> clause is included, the code inside <span class="highlight-keyword">default</span> will be executed.
                </p>
                <br><br>
                <p><strong>Note: </strong>If <span class="highlight-keyword">break</span> is omitted from the block of a <span class="highlight-keyword">case</span>, the <span class="highlight-keyword">switch</span> statement will continue to check against <span class="highlight-keyword">case</span> values until a break is encountered or the flow is broken.</p>
            </div>
            <div class="code-snippet">
                <span class="k4">const food</span> = <span class="k3">'salad'</span>; 
                <br><br>
                <span class="k4">switch</span> (<span class="k1">food</span>) { 
                <br>
                <span class="k4">case</span> <span class="k3">'oyster'</span>:
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'The taste of the sea 🦪'</span>); 
                <br>
                <span class="k4">break</span>; 
                <br>
                <span class="k4">case</span> <span class="k3">'pizza'</span>:
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'So Good! 🍕'</span>); 
                <br>
                <span class="k4">break</span>; 
                <br>
                <span class="k2">default</span>:
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k3">'Enjoy your meal 🥗'</span>); 
                <br>
                }
                <br><br>
                <span class="comments">// Prints: Enjoy your meal 🥗</span>
            </div>
        </article>
        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>Choose the correct comparison operator to alert true, when x is greater than y.</p>
            </div>

            <form action="validate.php" method="post" id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./exercises-conditionals.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        x = 10; 
                        <br>
                        y = 5; 
                        <br>
                        alert(x <input type="text" id="quiz" style="width: 3%;"> y);
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