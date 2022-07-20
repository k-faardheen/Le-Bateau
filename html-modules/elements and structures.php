<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Le Bateau - Elements and Structures</title>
</head>
<body>
<?php include('./header.php'); ?>

    <section class="header">
        <div class="header-wrapper" id="1">
            <h1>Elements and Structures</h1>
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
           
        <article class="intro-html">
            <div class="explanation">
                <h2 class="heading">Introduction to HTML</h2>
                <p>
                    HTML(Hypertext Markup Language) is used to give content to a web page and instructs web browsers on how to structure that content.
                    Learning HTML is the first step in creating websites. 
                    As we progress throughout this learning journey, we will show you how you can layer HTML wtih CSS and JavaScript to create aesthetically pleasing and dynamic websites. 
                </p>
            </div>
        </article>

        <article class="html-anatomy">
            <div class="explanation">
                <h2 class="heading">HTML Anatomy</h2>
                <p>
                    HTML is composed of elements. 
                    These elements structure the webpage and define its content.
                </p>
                <br>
                <p>
                    The diagram to the right displays how an HTML paragraph element is written. 
                    As you can see, the paragraph element is made up of: 
                    <ul>
                        <li> An opening tag (&lt;p&gt;)</li>
                        <li>The content ("Hello World! 🙂")</li>
                        <li>A closing tag (&lt;p&gt;)</li>
                    </ul>
                </p>

                <p>
                    Let's quickly review each part of the element pictured: 
                    <ul>
                        <li>
                            Opening Tag - The first HTML tag used to start an HTML element. 
                            The tag type is surrounded by opening and closing angle brackets.
                        </li>
                        <li>
                            Content - The information (text or other elements) contained between the opening and closing tags of an HTML element.
                        </li>
                        <li>
                            Closing tag — the second HTML tag used to end an HTML element.
                            Closing tags have a forward slash (/) inside of them, directly after the left angle bracket.
                        </li>
                    </ul>
                </p>
            </div>

            <div class="code-snippet">
                <span class="tag">&lt;p&gt; </span>
                <span>Hello World! 🙂</span>
                <span class="tag">&lt;/p&gt;</span>
            </div>
    
        </article>

        <article class="document-type">
            <div class="explanation">
                <h2 class="heading">Document Type Declaration</h2>
                <p>
                    The document type declaration, <span class="highlight-keyword">&lt;!DOCTYPE html&gt;</span> is required as the first line of an HTML document.
                    It is an instruction to the browser about what document type to expect and which version of HTML is being used, in our case, it's HTML5.
                </p>
            </div>

            <div class="code-snippet">
                <span>&lt;!DOCTYPE html&gt;</span>
            </div>
            
        </article>

        <article class="html">
            <div class="explanation">
                <h2 class="heading">&lt;html&gt;HTML Element</h2>
                <p>
                    The <span class="highlight-keyword">&lt;html&gt;</span> element, is the root of an HTML document. 
                    It should always be added after the <span class="highlight-keyword">&lt;!DOCTYPE&gt;</span> declaration. 
                    All the content/structure of an HTML document should be contained between the <span class="highlight-keyword">&lt;html&gt;</span> tags.
                </p>
            </div>
         
            <div class="code-snippet">
                <span>&lt;!DOCTYPE html&gt; </span>
                <br>
                <span class="tag">&lt;html&gt; </span>
                <br>
                <span class="tag">&lt;h1&gt;</span>
                <span>Coding is fun</span>
                <span class="tag">&lt;/h1&gt;</span>
                <br>
                <span class="tag">&lt;/html&gt;</span>
            </div>
        
        </article>

        <article class="head">
            <div class="explanation">
                <h2 class="heading">&lt;head&gt;Head Element</h2>
                <p>
                    The <span class="highlight-keyword">&lt;head&gt;</span> element contains general information about an HTML page that isn't displayed on the page itself. 
                    These informations are called as 'metadata'. The head usually includes things like the title of the HTML document and links to external stylesheets
                </p>
            </div>
            
            <div class="code-snippet">
                <span>&lt;!DOCTYPE html&gt; </span>
                <br>
                <span class="tag">&lt;html&gt; </span>
                <br>
                <span class="tag">&lt;head&gt;</span>
                <br>
                <span>&lt;! -- Metadata is stored in this element--&gt;</span>
                <br>
                <span class="tag">&lt;/head&gt;</span>
                <br>
                <span class="tag">&lt;/html&gt;</span>
            </div>
           
        </article>

        <article class="title">
            <div class="explanation">
                <h2 class="heading">&lt;title&gt;Title Element</h2>
                <p>
                    The <span class="highlight-keyword">&lt;title&gt;</span> element contains the title of an HTML document.
                    The title is displayed in the browser's title bar or tab in which the HTML page is displayed.
                    The <span class="highlight-keyword">&lt;title&gt;</span> element can only be contained inside a document's <span class="highlight-keyword">&lt;head&gt;</span> element. 
                </p>
            </div>
            
            <div class="code-snippet">
                <span>&lt;!DOCTYPE html&gt; </span>
                <br>
                <span class="tag">&lt;head&gt; </span>
                <br>
                <span class="tag">&lt;title&gt;</span>
                <span>Page Title</span>
                <span class="tag">&lt;/title&gt;</span>
                <br>
                <span class="tag">&lt;/head&gt;</span>
            </div>
            
        </article>

        <article class="the-body">
            <div class="explanation">
                <h2 class="heading"> The Body Element</h2>
                <p>
                    The <span class="highlight-keyword">&lt;body&gt;</span> element represents the content of an HTML document.   
                    Content inside <span class="highlight-keyword">&lt;body&gt;</span> tags are rendered on the web browsers.
                </p>
                <br>
                <p>
                    <span style="font-weight: bold;">Note: </span>
                    There can only be one <body> element in a document
                </p>
            </div>

        
            <div class="code-snippet">
                <span class="tag">&lt;body&gt; </span>
                <br>
                <span class="tag">&lt;h1&gt;</span>
                <span>Learn coding with Le Bateau ;)</span>
                <span class="tag">&lt;/h1&gt;</span>
                <br>
                <span class="tag">&lt;/body&gt;</span>
            </div>
          
        </article>

        <article class="activity">
            <div class="explanation">
                <h2 class="heading">An activity for you!</h2>
                <p>Fill in the missing keywords in the code to your right. 👉</p>
            </div>

            <form action="validate.php" method="post" id="1" class="activity">
                <div class="code-snippet-wrapper">

                    <div class="correct" style="display: none;">
                        <div class="tick">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <span class="correct-msg">Correct!</span>
                        <br>
                        <a href="./exercises-elements and structures.html">Try More -></a>
                    </div>

                    <div class="wrong" style="display: none;">
                        <div class="cross">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                        <span class="wrong-msg">Wrong!</span>
                    </div>

                    <div class="code-snippet">
                        <span class="tag">&lt;body&gt; </span>
                        <br>
                        <input type="text" id="quiz">
                        <span>Learn coding with Le Bateau ;)</span>
                        <span class="tag">&lt;/h1&gt;</span>
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

        <article class="heading-elements">
            <div class="explanation">
                <h2 class="heading">&lt;h1&gt;-&lt;h6&gt; Heading Elements</h2>
                <p>
                    There exists 6 levels of heading elements in HTML.  
                    The highest level being the <span class="highlight-keyword">&lt;h1&gt;</span>
                    to the lowest level being the <span class="highlight-keyword">&lt;h6&gt;</span>.
                </p>
            </div>

            <div class="code-snippet">
                <span>
                    <span class="tag">&lt;h1&gt;</span>This is an h1 Heading<span class="tag">&lt;/h1&gt;
                </span>
                <br>
                <span>
                    <span class="tag">&lt;h2&gt;</span>This is an h2 Heading<span class="tag">&lt;/h2&gt;         
                </span>
                <br>
                <span>
                    <span class="tag">&lt;h3&gt;</span>This is an h3 Heading<span class="tag">&lt;/h3&gt; 
                </span>
                    <br>
                <span>...</span>
                <br>
                <span>
                    <span class="tag">&lt;h6&gt;</span>This is an h6 Heading<span class="tag">&lt;/h6&gt;   
                </span> 
            </div>
     
        </article>

        <article class="div-element">
            <div class="explanation">
                <h2 class="heading">&lt;div&gt;Div Element</h2>
                <p>
                    The <span class="highlight-keyword">&lt;div&gt;</span> element is used as a container that divides an HTML document into sections.
                    Its main role is to group various HTML tags which could then be style by applying CSS on those group of elements. 
                    <span class="highlight-keyword">&lt;div&gt;</span> elements can contain flow content such as headings, paragraphs, links, images, etc.
                </p>
            </div>
            
            <div class="code-snippet">
                <span>
                    <span class="tag">&lt;div&gt;</span>
                </span>
                <br>
                <span>
                    <span class="tag">&lt;h1&gt;</span>This is a Heading !<span class="tag">&lt;/h1&gt;         
                </span>
                <br>
                <span>
                    <span class="tag">&lt;p&gt;</span>What's up, doc? ✌️<span class="tag">&lt;/p&gt; 
                </span>
                    <br>
                <span>
                    <span class="tag">&lt;/div&gt;</span>   
                </span> 
            </div>
         
        </article>

        <article class="html-attributes">
            <div class="explanation">
                <h2 class="heading">HTML Attributes</h2>
                <p>
                    HTML attributes are used to provide additional information about HTML elements. 
                    The attribute values are added to the opening tag of an element to configure the element or change the element's default behaviour. 
                    In our example,  we are giving the <span class="highlight-keyword">&lt;p&gt;</span> (paragraph) element an unique identifier using the <span class="highlight-keyword">id</span> attribute that could be referred to a CSS stylesheet for styling. 
                </p>
            </div>
           
                <div class="code-snippet">
                    <span>
                        <span class="tag">&lt;p </span>
                            <span class="attribute-tag">id</span> 
                            =<span class="attribute-value">"my-para";</span> <span class="tag">&gt;</span>
                            <span>
                                Yo fellas! , Happy Learning. 😎 
                            </span>
                        <span class="tag">&lt;/p&gt;</span>
                    </span>                           
                </div>
          
        </article>

    </main>
    <script src="../script/styleLi.js"></script>
    <script src="./script/validateAnswer.js"></script>
</body>
</html>