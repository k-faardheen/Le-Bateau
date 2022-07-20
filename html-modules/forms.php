<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Learn HTML - Forms</title>
</head>
<body>
    <?php include('./header.php'); ?>

    <section class="header">
        <div class="header-wrapper" id="3">
            <h1>Forms</h1>
            <div class="menu">
                <ul>
                    <li><h3>TOPICS</h3></li>
                    <li id="1"><a href="./elements and structures.php">Elements and Structures</a></li>
                    <li id="2"><a href="./tables.php">Tables</a></li>
                    <li id="3"><a href="./forms.php">Forms</a></li>
                </ul>
            </div>
        </div>
    </section>

    <main class="main-wrapper">
        <article class="form">
            <div class="explanation">
                <h2 class="heading">&lt;form&gt; Element</h2>
                <p>The HTML <span class="highlight-keyword">&lt;form&gt;</span> element is used to collect and send information to an external source.</p>
                <br>
                <p><span class="highlight-keyword">&lt;form&gt;</span> can contain various input elements. When a user submits the form, information in these input elements is passed to the source which is named in the <span class="highlight-keyword">&lt;action&gt;</span> attribute of the form.</p>
            </div>

            <div class="code-snippet">
                <span class="tag">&lt;form&gt;</span>
                <br>
                ...
                <br>
                <i>form elements</i>  
                <br>
                ...
                <br>
                <span class="tag">&lt;/form&gt;</span>
            </div>
        </article>
        <article class="input">
            <div class="explanation">
                <h2 class="heading">&lt;input&gt; Element</h2>
                <p>The HTML <span class="highlight-keyword">&lt;input&gt;</span> element is used to render a variety of input fields on a webpage including text fields, checkboxes, buttons, etc.</p>
                <br>
                <p><span class="highlight-keyword">&lt;input&gt;</span> element have a <span class="highlight-keyword">&lt;type&gt;</span> attribute that determines how it gets rendered to a page.</p>
                <br>
                <p>The example code block will create a text input field on a webpage.</p>
            </div>

            <div class="code-snippet">
                <span class="tag">&lt;label </span>
                <span class="attribute-tag">for</span>=
                <span class="attribute-value">"fname"</span>
                <span class="tag">></span>First name:
                <span class="tag">&lt;/label&gt;</span>
                <br>
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"text"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"fname"</span>
                <span class="attribute-tag">id</span>=
                <span class="attribute-value">"fname"</span>
                <span class="tag">&gt;</span>
            </div>
        </article>
        <article class="label">
            <div class="explanation">
                <h2 class="heading">&lt;label&gt; Element</h2>
                <p>
                    The HTML <span class="highlight-keyword">&lt;label&gt;</span> elementprovides identification for a specific.
                    <span class="highlight-keyword">&lt;input&gt;</span> based on matching values of the <span class="highlight-keyword">&lt;input&gt;</span>'s <span class="highlight-keyword">&lt;id&gt;</span> attribute and the <span class="highlight-keyword">&lt;label&gt;</span>'s <span class="highlight-keyword">for</span> attribute.
                </p>
            </div>

            <div class="code-snippet">
                <span class="tag">&lt;label </span>
                <span class="attribute-tag">for</span>=
                <span class="attribute-value">"password"</span>
                <span class="tag">></span>Password:
                <span class="tag">&lt;/label&gt;</span>
                <br>
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"text"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"password"</span>
                <span class="attribute-tag">id</span>=
                <span class="attribute-value">"password"</span>
                <span class="tag">&gt;</span>
            </div>
        </article>

        <article class="input-text">
            <div class="explanation">
                <h2 class="heading">&lt;input&gt;: Text Type</h2>
                <p>
                    HTML <span class="highlight-keyword">&lt;input&gt;</span> elements can support text input by setting the attribute <span class="highlight-keyword">type="text"</span>.
                    This renders a single row input field that users can type text inside.
                </p>
                <br>
                <p>The value od the <span class="highlight-keyword">&lt;input&gt;</span>'s <span class="highlight-keyword">name</span> and <span class="highlight-keyword">value</span> attribute of the element are sent as key-value pair when the form is submitted.</p>
                <br>
                <p>The example code block will create a text input field on a webpage.</p>
            </div>

            <div class="code-snippet">
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"text"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"username"</span>
                <span class="tag">&gt;</span>
            </div>
        </article>

        <article class="input-number">
            <div class="explanation">
                <h2 class="heading">&lt;input&gt;: Number Type</h2>
                <p>
                    HTML input elements can be of type <span class="highlight-keyword">number</span>. These input field allow the user to enter only numbers inside the field.
                </p>
                <br>
                <p>The example code block shows an input with a type of <span class="highlight-keyword">number</span> and a name of <span class="highlight-keyword">balance</span>.</p>
            </div>

            <div class="code-snippet">
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"number"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"balance"</span>
                <span class="tag">&gt;</span>
            </div>
        </article>

        <article class="input-checkbox">
            <div class="explanation">
                <h2 class="heading">&lt;input&gt;: Checkbox Type</h2>
                <p>
                    When using an HTML <span class="highlight-keyword">input</span> element, the <span class="highlight-keyword">type="checkbox"</span> attribute will <span class="highlight-keyword">render a single checkbox item.</span>
                    To create a group of checkboxes related to the same topic, they should all use the same <span class="highlight-keyword">name</span> attribute. Since it's a checkbox, multiple checkboxes can be selected for the same topic.
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"checkbox"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"breakfast"</span>
                <span class="attribute-tag">value</span>=
                <span class="attribute-value">"waffle"</span>
                <span class="tag">&gt;</span>
                Waffle 🧇
                <br>
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"checkbox"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"breakfast"</span>
                <span class="attribute-tag">value</span>=
                <span class="attribute-value">"honey"</span>
                <span class="tag">&gt;</span>
                Honey 🍯
                <br>
                <span class="tag">&lt;input </span>
                <span class="attribute-tag">type</span>=
                <span class="attribute-value">"checkbox"</span>
                <span class="attribute-tag">name</span>=
                <span class="attribute-value">"breakfast"</span>
                <span class="attribute-tag">value</span>=
                <span class="attribute-value">"coffee"</span>
                <span class="tag">&gt;</span>
                Coffee ☕️

            </div>
        </article>

        <article class="input-radio">
        <div class="explanation">
            <h2 class="heading">&lt;input&gt;: Number Type</h2>
            <p>
                HTML input elements can be of type <span class="highlight-keyword">number</span>. These input field allow the user to enter only numbers inside the field.
            </p>
            <br>
            <p>The example code block shows an input with a type of <span class="highlight-keyword">number</span> and a name of <span class="highlight-keyword">balance</span>.</p>
        </div>

        <div class="code-snippet">
            <span class="tag">&lt;input </span>
            <span class="attribute-tag">type</span>=
            <span class="attribute-value">"number"</span>
            <span class="attribute-tag">name</span>=
            <span class="attribute-value">"balance"</span>
            <span class="tag">&gt;</span>
        </div>
    </article>

    <article class="input-checkbox">
        <div class="explanation">
            <h2 class="heading">&lt;input&gt;: Radio Button Type</h2>
            <p>
                HTML <span class="highlight-keyword">input</span> element, can be given a <span class="highlight-keyword">type="radio"</span> attribute.
                Radio buttons let a user to select ONE of a limited number of choices.
            </p>
            <br>
            <p>
                The code block shown to you allows a user to select their delivery options. The user is allowed to select only one of the option.
            </p>
        </div>
        <div class="code-snippet">
            <span class="tag">&lt;input </span>
            <span class="attribute-tag">type</span>=
            <span class="attribute-value">"radio"</span>
            <span class="attribute-tag">name</span>=
            <span class="attribute-value">"delivery-option"</span>
            <span class="attribute-tag">value</span>=
            <span class="attribute-value">"pickup"</span>
            <span class="tag">&gt;</span>
            <br>
            <span class="tag">&lt;input </span>
            <span class="attribute-tag">type</span>=
            <span class="attribute-value">"radio"</span>
            <span class="attribute-tag">name</span>=
            <span class="attribute-value">"delivery-option"</span>
            <span class="attribute-tag">value</span>=
            <span class="attribute-value">"delivery"</span>
            <span class="tag">&gt;</span>
        </div>
        </article>

        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>In the form below, add an input field with the type "button" and the value "OK". 👉</p>
            </div>

            <form action="validate.php" method="post" id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./exercise-forms.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <span class="tag">&lt;form&gt; </span>
                        <br>
                        <span class="tag">&lt;</span> <input type="text" id="quiz" style="width: 55%;"> <span class="tag">&gt; </span>
                        <br>
                        <input type="text" id="quiz">
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
    <script src="./script/validateAnswer.js"></script>
</body>
</html>