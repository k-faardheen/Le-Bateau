<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="./style/css-module.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Le Bateau - Syntax And Slectors</title>
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
      <div class="header-wrapper">
        <h1>Syntax And Selectors</h1>
        <div class="menu">
          <ul>
            <li><h3>TOPICS</h3></li>
            <li>
              <a href="./syntax-and-selectors.php">Syntax and Slectors</a>
            </li>
            <li><a href="./visual-rules.php">Visual rules</a></li>
            <li><a href="./box-model.php">The Box Model</a></li>
            <li>
              <a href="./display-and-positioning.php"
                >Display and Positioning</a
              >
            </li>
            <li><a href="./colors.php">Colors</a></li>
            <li><a href="./typography.php">Typography</a></li>
          </ul>
        </div>
      </div>
    </section>

    <main class="main-wrapper">
      <article class="link-element">
        <div class="explanation">
          <h2 class="heading">&lt;link&gt;Link Element</h2>
          <p>
            The &lt;link&gt; element is used to link HTML documents to external
            resources like CSS files. It commonly uses:
          </p>
          <ul>
            <li>href attribute to specify the URL to the external resource</li>
            <li>
              rel attribute to specify the relationship of the linked document
              to the current document
            </li>
            <li>type attribute to define the type of content being linked</li>
          </ul>
        </div>

        <div class="code-snippet">
          <span style="color: grey">
            &lt;!-- How to link an external stylesheet with href, rel, and type
            attributes --&gt;</span
          ><br />
          <span class="tag">&lt;link </span>
          <span
            >href="./path/to/stylesheet/style.css" rel="stylesheet"
            type="text/css"</span
          >
          <span class="tag">&gt;</span>
        </div>
      </article>

      <article class="purpose">
        <div class="explanation">
          <h2 class="heading">Purpose of CSS</h2>
          <p>
            CSS, or Cascading Style Sheets, is a language that is used in
            combination with HTML that customizes how HTML elements will appear.
            CSS can define styles and change the layout and design of a sheet.
          </p>
        </div>
      </article>

      <article class="seperate-file">
        <div class="explanation">
          <h2 class="heading">Write CSS in Separate Files</h2>
          <p>
            CSS code can be written in its own files to keep it separate from
            the HTML code. The extension for CSS files is .css. These can be
            linked to an HTML file using a &lt;link&gt; tag in the &lt;head&gt;
            section
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">&lt;head&gt; </span><br />
          <span class="tag">&lt;link </span>
          <span> href="style.css" type="text/css" rel="stylesheet"</span>
          <span class="tag">&gt;</span>
        </div>
      </article>

      <article class="write-css">
        <div class="explanation">
          <h2 class="heading">Write CSS in HTML File</h2>
          <p>
            CSS code can be written in an HTML file by enclosing the code in
            &lt;style&gt; tags. Code surrounded by &lt;style&gt; tags will be
            interpreted as CSS syntax.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">&lt;head&gt;</span><br />
          <span class="tag">&lt;style&gt;</span><br />
          <span class="tag">h1 {</span><br />
          <span>color:</span>
          <span class="tag"> blue;</span><br />
          <span class="tag">}</span><br />
          <span class="tag">&lt;/style&gt;</span><br />
          <span class="tag">&lt;/head&gt;</span><br />
        </div>
      </article>

      <article class="Inline-Styles">
        <div class="explanation">
          <h2 class="heading">Inline Styles</h2>
          <p>
            CSS styles can be directly added to HTML elements by using the style
            attribute in the element’s opening tag. Each style declaration is
            ended with a semicolon. Styles added in this manner are known as
            inline styles
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">&lt;h2 </span>
          <span>style="text-align: center;"</span>
          <span class="tag">&gt;</span>
          <span>Centered text</span>
          <span class="tag">&lt;/h2&gt;</span><br />
          <br />

          <span class="tag">&lt;p </span>
          <span>style="color: blue; font-size: 18px;"</span>
          <span class="tag">&gt;</span>
          <span>Blue, 18-point text</span>
          <span class="tag">&lt;/p&gt;</span>
        </div>
      </article>

      <article class="seperate">
        <div class="explanation">
          <h2 class="heading">Separating HTML code from CSS code</h2>
          <p>
            It is common practice to separate content code in HTML files from
            styling code in CSS files. This can help make the code easier to
            maintain, by keeping the syntax for each file separate, and any
            changes to the content or styling can be made in their respective
            files.
          </p>
        </div>
      </article>

      <article class="selectors">
        <div class="explanation">
          <h2 class="heading">Class and ID Selectors</h2>
          <p>
            CSS classes can be reusable and applied to many elements. Class
            selectors are denoted with a period . followed by the class name.
            CSS ID selectors should be unique and used to style only a single
            element. ID selectors are denoted with a hash sign # followed by the
            id name.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey"
            >/* Selects all elements with class="column" */
          </span>
          <br />
          <span class="tag">.column </span><span>{</span><br />
          <span>}</span><br />
          <br />
          <span style="color: grey"
            >/* Selects element with id="first-item" */</span
          ><br />
          <span class="tag">.#first-item </span><span>{</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="Group-css-selector">
        <div class="explanation">
          <h2 class="heading">Groups of CSS Selectors</h2>
          <p>
            Match multiple selectors to the same CSS rule, using a
            comma-separated list. In this example, the text for both h1 and h2
            is set to red.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">h1 </span>
          <span>,</span>
          <span class="tag">h2 </span>
          <span>{</span><br />
          <span> color: red;</span><br />
          <span>{</span>
        </div>
      </article>

      <article class="type-selector">
        <div class="explanation">
          <h2 class="heading">CSS Type Selectors</h2>
          <p>
            CSS type selectors are used to match all elements of a given type or
            tag name. Unlike for HTML syntax, we do not include the angle
            brackets when using type selectors for tag names. When using type
            selectors, elements are matched regardless of their nesting level in
            the HTML.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey">/* Selects all &lt;p&gt; tags */</span
          ><br />
          <span class="tag">p</span>
          <span>{</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="class-selector">
        <div class="explanation">
          <h2 class="heading">CSS class selectors</h2>
          <p>
            The CSS class selector matches elements based on the contents of
            their class attribute. For selecting elements having calendar-cell
            as the value of the class attribute, a . needs to be prepended.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">.calender-cell </span><span>{</span><br />
          <span> color: #fff;</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="multiple-values">
        <div class="explanation">
          <h2 class="heading">HTML attributes with multiple values</h2>
          <p>
            Some HTML attributes can have multiple attribute values. Multiple
            attribute values are separated by a space between each attribute
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag"> &lt;div</span>
          <span>class="value1 value2 value3"</span>
          <span class="tag"> &gt;&lt;/div&gt;</span>
        </div>
      </article>

      <article class="id-selectors">
        <div class="explanation">
          <h2 class="heading">CSS ID selectors</h2>
          <p>
            The CSS ID selector matches elements based on the contents of their
            id attribute. The values of id attribute should be unique in the
            entire DOM. For selecting the element having job-title as the value
            of the id attribute, a # needs to be prepended.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">#job-title</span><span>{</span><br />
          <span>font-weight: bold;</span> <br />
          <span>}</span>
        </div>
      </article>

      <article class="activity">
        <div class="explanation">
            <h2 class="heading">An activity for you!</h2>
            <p>Fill in the missing keywords in the code to your right. 👉</p>
            <p>Set the color of all &lt;p&gt; elements to red.</p>
        </div>

        <form action="" id="4" class="activity">
            <div class="code-snippet-wrapper">

                <div class="correct" style="display: none;">
                    <div class="tick">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                    <span class="correct-msg">Correct!</span>
                    <br>
                    <a href="">Try More -></a>
                </div>

                <div class="wrong" style="display: none;">
                    <div class="cross">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <span class="wrong-msg">Wrong!</span>
                </div>

                <div class="code-snippet">
                    <span class="tag">&lt;style&gt; </span>
                    <br>
                    <input type="text" id="quiz">
                    <span>{</span><br>
                      <input type="text" id="quiz">
                    <span>red;</span><br>
                    <span>}</span><br>
                    <span class="tag">&lt;/style&gt; </span>
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

    <script src="./script/css-module.js"></script>
  </body>
</html>
