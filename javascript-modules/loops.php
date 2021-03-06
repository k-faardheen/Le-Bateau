<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Learn JavaScript - Loops</title>
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="lebateau">
                <a href="../index.html"> >_Le Bateau</a>
            </div>
 
             <nav>
                <div class="links">
                    <ul>
                        <li><a href="../tutorial.html">Tutorials</a></li>
                        <li><a href="../code-challenge.html">Code Challenges</a></li>
                        <li><a href="../about-us.html">About Us</a></li>
                        <li><a href="../log-in.html">Log in</a></li>
                        <li><a href="../sign-up.html">Sign up</a></li>
                    </ul>
                </div>
            </nav>
        </div>  
    </header>


    <section class="header">
        <div class="header-wrapper" id="5">
            <h1>Loops</h1>
            <div class="menu">
                <ul>
                    <li><h3>TOPICS</h3></li>
                    <li id="1"><a href="./introduction.html">Introduction</a></li>
                    <li id="2"><a href="./conditionals.html">Conditionals</a></li>
                    <li id="3"><a href="./functions.html">Functions</a></li>
                    <li id="4"><a href="./arrays.html">Arrays</a></li>
                    <li id="5"><a href="./loops.html">Loops</a></li>
                </ul>
            </div>
        </div>
    </section>

    <main class="main-wrapper">
        <article class="while-loop">
            <div class="explanation">
                <h2 class="heading">While Loop</h2>
                <p>
                    The <span class="highlight-keyword">while</span> loop creates a loop that is executed as long as a specified condition evaluates to <span class="highlight-keyword">true</span> . The loop will continue to run until the condition evaluates to <span class="highlight-keyword">false</span>. 
                    The condition is specified before the loop, and usually, some variable is incremented or altered in the <span class="highlight-keyword">while</span> loop body to determine when the loop should stop.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">while</span>(<span class="k1">condition</span>) {
                <br>
                <span class="comments">// code block to be executed</span>
                <br>
                }
                <br><br>
                <span class="k4">let i</span> = <span class="k1">0</span>; 
                <br><br>
                <span class="k4">while</span>(<span class="k1">i</span> &gt; <span class="k1">5</span>) {
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">i</span>);
                <br>
                <span class="k1">i</span>++; 
                <br>
                }
            </div>
        </article>  

        <article class="do-while-loop">
            <div class="explanation">
                <h2 class="heading">Do...While Statement</h2>
                <p>
                    A <span class="highlight-keyword">do...while</span> statement creates a loop that executes a block of code once, checks if a condition is true, and then repeats the loop as long as the condition is true. They are used when you want the code to always execute at least once. The loop ends when the condition evaluates to false.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k1">x</span> = <span class="k1">0</span>;
                <br>
                <span class="k1">i</span> = <span class="k1">0</span>; 
                <br><br>
                <span class="k4">do</span> {
                <br>
                <span class="k1">x</span> = <span class="k1">x</span> + <span class="k1">i</span>;
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">x</span>);
                <br>
                <span class="k1">i</span>++; 
                <br>
                }<span class="k4">while</span>(<span class="k1">i</span> &gt; <span class="k1">5</span>);
            </div>
        </article>
        <article class="for-loop">
            <div class="explanation">
                <h2 class="heading">For Loop</h2>
                <p>The <span class="highlight-keyword">for</span> oop declares looping instructions, with three important pieces of information separated by semicolons <span class="highlight-keyword">;</span>:</p>
                <ul>
                    <li>The initialization defines where to begin the loop by declaring (or referencing) the iterator variable</li>
                    <li>The stopping condition determines when to stop looping (when the expression evaluates to <span class="highlight-keyword">false</span> )</li>
                    <li>he iteration statement updates the iterator each time the loop is completed</li>
                </ul>
            </div>
            <div class="code-snippet">
                <span class="k4">for</span> (<span class="k4">let i</span> = <span class="k1">0</span>; <span class="k1">i</span> &lt; <span class="k1">4</span>;<span class="k1">i</span> += <span class="k1">1</span>) {
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">i</span>);
                <br> 
                }; 
                <br>
                <span class="comments"> // Output: 0,1,2,3</span>
            </div>
        </article>
        <article class="looping-through-arrays">
            <div class="explanation">
                <h2 class="heading">Looping Through Arrays</h2>
                <p>
                    An array's length can be evaluated with the <span class="highlight-keyword">.length</span> property.
                    This is extremely helpful for looping through arrays, as the <span class="highlight-keyword">.length</span>  of the array can be used as the stopping condition in the loop.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">for</span> (<span class="k4">let i</span> = <span class="k1">0</span>; <span class="k1">i</span> &lt; <span class="k1">array</span>.<span class="k2">length</span>;<span class="k1">i</span>++) {
                <br>
                <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">array</span>[<span class="k1">i</span>]);
                <br> 
                }; 
                <br>
                <span class="comments"> // Output: Every item in the array</span>
            </div>
        </article>
        <article class="break-keyword">
            <div class="explanation">
                <h2 class="heading">Break Keyword</h2>
                <p>
                    Within a loop, the <span class="highlight-keyword">break</span> keyword may be used to exit the loop immediately, continuing execution after the loop body.
                    <br>
                    Here, the <span class="highlight-keyword">break</span> keyword is used to exit the loop when <span class="highlight-keyword">i</span> is greater than 5.
                </p>
            </div>
            <div class="code-snippet">
                <span class="k4">for</span> (<span class="k4">let i</span> = <span class="k1">0</span>; <span class="k1">i</span> &lt; <span class="k1">99</span>;<span class="k1"> i</span>++) {
                    <br>
                    <span class="k4">if</span>(<span class="k1">i</span> &gt; <span class="k1">5</span>){
                    <br>
                    <span class="k4">break</span>; 
                    <br>
                    }
                    <br>
                    <span class="k1">console</span>.<span class="k2">log</span>(<span class="k1">i</span>);
                    <br>
                    }
                    <br><br>
                    <span class="comments"> // Output: 0,1,2,3</span>
            </div>
        </article>

        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>break from the iteration when i is equal to 5</p>
            </div>

            <form action="validate.php" method="post" id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./exercises-loops.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <span class="k4">for </span>= ( <span class="k1">i</span> = <span class="k3">0</span>; <span class="k1">i</span> &gt; <span class="k3">10</span>; <span class="k1">i</span>++ ) {
                        <br>
                        <span class="k4">if</span> (<span class="k1">i</span> == 5) {
                        <br>
                        <input type="text" id="quiz">; 
                        <br>
                        }
                        <br>
                        <span class="k1">console</span>. <span class="k2">log</span>(i); 
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
        
    </main>
    <script src="../script/styleLi.js"></script>
    <script src="./script/validate js-answer.js"></script>
</body>
</html>