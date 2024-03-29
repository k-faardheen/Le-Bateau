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
    <title>Le Bateau - Typography</title>
  </head>
  <body>
    <?php include('./header.php');  ?> 

    <section class="header">
      <div class="header-wrapper">
        <h1>Typography</h1>
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
      <article class="font-weight">
        <div class="explanation">
          <h2 class="heading">CSS font-weight Property</h2>
          <p>
            The CSS font-weight property declares how thick or thin should be
            the characters of a text. Numerical values can be used with this
            property to set the thickness of the text. The numeric scale range
            of this property is from 100 to 900 and accepts only multiples of
            100. The default value is normal while the default numerical value
            is 400. Any value less than 400 will have text appear lighter than
            the default while any numerical value greater than the 400 will
            appear bolder.
          </p>
          <br />
          <p>
            In the given example, all the &lt;p&gt; elements will appear in a
            bolder font.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey"> /* Sets the text as bolder. */</span><br />
          <span class="tag">p </span>
          <span>{</span><br />
          <span>font-weight: 700;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="font-style">
        <div class="explanation">
          <h2 class="heading">CSS font-style property</h2>
          <p>
            The CSS font-style property determines the font style in which text
            will appear.<br />

            It accepts italic as a value to set the font style to italic.
          </p>
        </div>
        <div class="code-snippet">
          <span class="tag">.text</span><span>{</span><br />
          <span>font-style: italic;</span>
          <span>}</span>
        </div>
      </article>

      <article class="css-fallback-font">
        <div class="explanation">
          <h2 class="heading">CSS Fallback Fonts</h2>
          <p>
            The CSS font-family property can have multiple fonts declared in
            order of preference. In this case the fonts following the initial
            font are known as the fallback fonts.<br />

            If the initial value of the property font-family fails to load to
            the webpage, the fallback fonts will be used.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey"
            >/* Here `Arial` is the fallback font for &lt;p&gt;tags
            */&lt;/p&gt;</span
          ><br />
          <span class="tag">p</span>
          <span>{</span><br />
          <span>font-family: "Helvetica", "Arial";</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="inline-height">
        <div class="explanation">
          <h2 class="heading">The CSS line-height property</h2>
          <p>
            The CSS line-height property declares the vertical spacing between
            lines of text. It accepts both unitless numbers as a ratio (eg. 2)
            and numbers specified by unit as values (eg. 12px) but it does not
            accept negative numbers. A unitless number is an absolute value that
            will compute the line height as a ratio to the font size and a unit
            number can be any valid CSS unit (eg. pixels, percents, ems, rems,
            etc.). To set the line-height of the &lt;p&gt; elements to 10px, the
            given CSS declaration can be used.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">p</span>
          <span>{</span><br />
          <span>line-height: 10px;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="linking-fonts">
        <div class="explanation">
          <h2 class="heading">CSS Linking fonts</h2>
          <p>
            Linking fonts allow user to use web fonts in the document. They can
            be imported in an HTML document by using the &lt;link&gt; tag. Once
            the web font URL is placed within the href attribute, the imported
            font can then be used in CSS declaration.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">&lt;head&gt; </span><br />
          <span class="tag">&lt;link </span>
          <span
            >href="https://fonts.googleapis.com/css?family=Droid%20Serif"
            rel="stylesheet"</span
          >
          <span class="tag">&gt;</span><br />
          <span class="tag">&lt;/head&gt; </span><br />
        </div>
      </article>

      <article class="activity">
        <div class="explanation">
          <h2 class="heading">An activity for you!</h2>
          <p>Fill in the missing keywords in the code to your right. 👉</p>
          <p>Set the font weight of all &lt;p&gt; elements to 500.</p>
        </div>

        <form action="" id="5" class="activity">
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
              <span class="tag">p</span>
              <span>{</span><br />
              <input type="text" id="quiz" />
              <span>:</span>
              <input type="text" id="quiz" />
              <span>;</span><br />
              <span>}</span><br />
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
