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
    <title>Le Bateau - Visual Rules</title>
  </head>
  <body>
    <?php include('./header.php');  ?> 

    <section class="header">
      <div class="header-wrapper">
        <h1>Visual Rules</h1>
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
      <article class="css-declaration">
        <div class="explanation">
          <h2 class="heading">CSS declarations</h2>
          <p>
            In CSS, a declaration is the key-value pair of a CSS property and
            its value. CSS declarations are used to set style properties and
            construct rules to apply to individual or groups of elements. The
            property name and value are separated by a colon, and the entire
            declaration must be terminated by a semi-colon.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey">
            /* CSS declaration format: property-name: value; */</span
          ><br />
          <br />
          <span style="color: grey"> /* CSS declarations */</span><br />
          <span class="tag">text-align: center;</span><br />
          <span class="tag">color: purple;</span><br />
          <span class="tag">width: 100px;</span><br />
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

      <article class="font-size">
        <div class="explanation">
          <h2 class="heading">Font Size</h2>
          <p>
            The font-size CSS property is used to set text sizes. Font size
            values can be many different units or types such as pixels. section
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">font-size: 30px;</span><br />
        </div>
      </article>

      <article class="background-color">
        <div class="explanation">
          <h2 class="heading">Background Color</h2>
          <p>
            The background-color CSS property controls the background color of
            elements.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">background-color: blue;</span>
        </div>
      </article>

      <article class="opacity">
        <div class="explanation">
          <h2 class="heading">Opacity</h2>
          <p>
            The opacity CSS property can be used to control the transparency of
            an element. The value of this property ranges from 0 (transparent)
            to 1 (opaque).
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">opacity: 0.5;</span>
        </div>
      </article>

      <article class="font-weight">
        <div class="explanation">
          <h2 class="heading">Font Weight</h2>
          <p>
            The font-weight CSS property can be used to set the weight
            (boldness) of text. The provided value can be a keyword such as bold
            or normal.
          </p>
        </div>
        <div class="code-snippet">
          <span class="tag">font-weight: bold;</span>
        </div>
      </article>

      <article class="text-align">
        <div class="explanation">
          <h2 class="heading">Text Align</h2>
          <p>
            The text-align CSS property can be used to set the text alignment of
            inline contents. This property can be set to these values: left,
            right, or center.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">text-align: right;</span>
        </div>
      </article>

      <article class="rule-set">
        <div class="explanation">
          <h2 class="heading">CSS Rule Sets</h2>
          <p>
            A CSS rule set contains one or more selectors and one or more
            declarations. The selector(s), which in this example is h1, points
            to an HTML element. The declaration(s), which in this example are
            color: blue and text-align: center style the element with a property
            and value. The rule set is the main building block of a CSS sheet.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">h1 </span>
          <span>{</span><br />
          <span> color: red;</span><br />
          <span> text-align: center;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="url">
        <div class="explanation">
          <h2 class="heading">Resource URLs</h2>
          <p>
            In CSS, the url() function is used to wrap resource URLs. These can
            be applied to several properties such as the background-image.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">background-image: url(</span>
          <span>"../resources/image.png");</span>
        </div>
      </article>

      <article class="font-family">
        <div class="explanation">
          <h2 class="heading">Font-family</h2>
          <p>
            The font-family CSS property is used to specify the typeface in a
            rule set. Fonts must be available to the browser to display
            correctly, either on the computer or linked as a web font. If a font
            value is not available, browsers will display their default font.
            When using a multi-word font name, it is best practice to wrap them
            in quotes.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">h1 </span>
          <span>{</span><br />
          <span> font-family: Verdana;</span><br />
          <span>}</span><br />
          <br />
          <span>#page-title {</span><br />
          <span>font-family: "Courier New";</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="color-name">
        <div class="explanation">
          <h2 class="heading">Color Name Keywords</h2>
          <p>
            Color name keywords can be used to set color property values for
            elements in CSS.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">h1 </span>
          <span>{</span><br />
          <span> color: aqua;</span><br />
          <span>}</span><br />
          <br />
          <span class="tag">li</span><span>{</span><br />
          <span>color: khaki;</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="activity">
        <div class="explanation">
          <h2 class="heading">An activity for you!</h2>
          <p>Fill in the missing keywords in the code to your right. 👉</p>
          <p>Set the background color to #6aa305</p>
        </div>

        <form action="" id="6" class="activity">
          <div class="code-snippet-wrapper">
            <div class="correct" style="display: none">
              <div class="tick">
                <i class="fa-regular fa-circle-check"></i>
              </div>
              <span class="correct-msg">Correct!</span>
              <br />
              <a href="">Try More -></a>
            </div>

            <div class="wrong" style="display: none">
              <div class="cross">
                <i class="fa-regular fa-circle-xmark"></i>
              </div>
              <span class="wrong-msg">Wrong!</span>
            </div>

            <div class="code-snippet">
              <span class="tag">&lt;style&gt; </span>
              <br />
              <input type="text" id="quiz" />
              <span>:</span>
              <input type="text" id="quiz" />
              <span>;</span><br />
              <span class="tag">&lt;/style&gt; </span>
            </div>

            <div class="btn-wrapper">
              <button id="submit">Submit your answer</button>
              <br />
              <button id="show-answer">Show Answer</button>
            </div>
          </div>
        </form>
      </article>
    </main>

    <script src="./script/css-module.js"></script>
  </body>
</html>
