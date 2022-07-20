<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="../style/exercises-template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HTML - Exercises</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <section class="header">
        <div class="header-wrapper" id="1">
            <h1>Exercises</h1>
            <div class="menu">
                <ul>
                    <li><h3>TOPICS</h3></li>
                    <li id="1"><a href="./exercises-elements and structures.html">Elements and Structures</a></li>
                    <li id="2"><a href="./exercises-table.html">Tables</a></li>
                    <li id="3"><a href="./exercise-forms.html">Forms</a></li>
                </ul>
            </div>
        </div>
    </section>

    <main class="main-wrapper">
        <section>
            <div class="explanation">
                <p>Use the correct HTML tag to add a heading with the text "London".</p>
            </div>

            <form action="validate.php" method="post" id="2">
                <div class="code-snippet-wrapper">
                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <span>&lt;p&gt;London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.&lt;/p&gt;</span>
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </section>

        <section>
            <div class="explanation">
                <p>Add six headings to the document with the text "Hello".</p>
                <p>Start with the most important heading (the largest) and end with the least important heading (the smallest).</p>
            </div>

            <form action="validate.php" method="post" id="3">
                <div class="code-snippet-wrapper">
                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <span class="tag">&lt;html&gt;</span>
                        <br>
                        <span class="tag">&lt;body&gt;</span>
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <span class="tag">&lt;/body&gt;</span>
                        <br>
                        <span class="tag">&lt;/html&gt;</span>
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <div class="explanation">
                <p>Mark up the text with appropriate tags:</p>
                <p>"Universal Studios Presents" is the most important heading.</p>
                <p>"Jurassic Park" is the next most important heading.</p>
                <p>"About" is the third most important heading.</p>
                <p>The last sentence is just a paragraph.</p>
                <p>Start with the most important heading (the largest) and end with the least important heading (the smallest).</p>
            </div>

            <form action="validate.php" method="post" id="4">
                <div class="code-snippet-wrapper">
                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <input type="text" id="quiz"><span>Univesal Studio Presents</span><input type="text" id="quiz">
                        <br>
                        <input type="text" id="quiz"><span>Jurassic Park</span><input type="text" id="quiz">
                        <br>
                        <input type="text" id="quiz"><span>About</span><input type="text" id="quiz">
                        <br>
                        <input type="text" id="quiz"><span>On the Island of Isla Nublar, a new park has been built: Jurassic Park is a theme park of cloned dinosaurs!!</span><input type="text" id="quiz">
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script src="../script/styleLi.js"></script>
    <script src="./script/validateAnswer.js"></script>
</body>
</html>