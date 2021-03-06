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
        <div class="header-wrapper" id="2">
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
                <p>Add a table row with two tables headers.</p>
                <p>The two table headers should have the value "Name" and "Age".</p>
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
                        <span>&lt;table&gt;</span>
                        <br>
                        <input type="text" id="quiz">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz">
                        <br>
                        <span>&lt;tr&gt;</span>
                        <br>
                        <span>&lt;td&gt;Jill Smith&lt;/td&gt;</span>
                        <br>
                        <span>&lt;td&gt;50&lt;/td&gt;</span>
                        <br>
                        <span>&lt;/tr&gt;</span>
                        <br>
                        <span>&lt;/table&gt;</span>
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
                <p>Add a table row at the end of the table, with two table cells.</p>
                <p>The two table cells should have the value "Eve Jackson" and "94".</p>
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
                        <span>&lt;table&gt;</span>
                        <br>
                        <span>&lt;tr&gt;</span>
                        <br>
                        <span>&lt;th&gt;Name&lt;/th&gt;</span>
                        <br>
                        <span>&lt;th&gt;Age&lt;/th&gt;</span>
                        <br>
                        <span>&lt;/tr&gt;</span>
                        <br>
                        <span>&lt;tr&gt;</span>
                        <br>
                        <span>&lt;td&gt;Jill Smith&lt;/td&gt;</span>
                        <br>
                        <span>&lt;td&gt;50&lt;/td&gt;</span>
                        <br>
                        <span>&lt;/tr&gt;</span>
                        <br>
                        <input type="text" id="quiz">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz" style="width: 40%;">
                        <br>
                        <input type="text" id="quiz">
                        <br>
                        <span>&lt;/table&gt;</span>
                    </div>
    
                    <div class="btn-wrapper">
                        <button id="submit">Submit your answer</button>
                        <br>
                        <button id="show-answer">Show Answer</button>
                    </div>
                </div>
            </form>
        </section>
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
                    <span>&lt;table&gt;</span>
                    <br>
                    <span>&lt;tr&gt;</span>
                    <br>
                    <span>&lt;th&gt;<input type="text" id="quiz" style="width: 20%;">&gt;Name&lt;/th&gt;</span>
                    <br>
                    <span>&lt;th&gt;Age&lt;/th&gt;</span>
                    <br>
                    <span>&lt;/tr&gt;</span>
                    <br>
                    <span>&lt;tr&gt;</span>
                    <br>
                    <span>&lt;td&gt;Jill Smith&lt;/td&gt;</span>
                    <br>
                    <span>&lt;td&gt;50&lt;/td&gt;</span>
                    <br>
                    <span>&lt;/tr&gt;</span>
                    <br>
                    <span>&lt;tr&gt;</span>
                    <br>
                    <span>&lt;td&gt;Eve Smith&lt;/td&gt;</span>
                    <br>
                    <span>&lt;td&gt;45&lt;/td&gt;</span>
                    <br>
                    <span>&lt;/tr&gt;</span>
                    <span>&lt;/table&gt;</span>
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