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
    <title>Le Bateau - Colors</title>
  </head>
  <body>
    <?php include('./header.php');  ?> 

    <section class="header">
      <div class="header-wrapper">
        <h1>Colors</h1>
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
      <article class="color-keyword">
        <div class="explanation">
          <h2 class="heading">Color Name Keywords</h2>
          <p>
            Color name keywords can be used to set color property values for
            elements in CSS.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">h1</span>
          <span>{</span><br />
          <span> color: aqua;</span><br />
          <span>}</span><br />
          <br />

          <span class="tag">li</span>
          <span>{</span><br />
          <span> color: khaki;</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="alpha-values">
        <div class="explanation">
          <h2 class="heading">CSS Color Alpha Values</h2>
          <p>
            Alpha values determine the transparency of colors in CSS. Alpha
            values can be set for both RGB and HSL colors by using rgba() and
            hsla() and providing a fourth value representing alpha. Alpha values
            can range between 0.0 (totally transparent) and 1.0 (totally
            opaque).<br />

            The CSS transparent value can also be used to create a fully
            transparent element.
          </p>
        </div>
        <div class="code-snippet">
          <span class="tag">.midground </span><span>{</span><br />
          <span>background-color: rgba(0, 255, 0, 0.5);</span><br />
          <span>}</span><br />
          <br />
          <span class="tag">.foreground </span><span>{</span><br />
          <span>background-color: hsla(34, 100%, 50%, 0.1);</span><br />
          <span>}</span><br />
          <br />

          <span class="tag">.transparent </span><span>{</span><br />
          <span>color: transparent;</span><br />
          <span>}</span><br />
          <br />
        </div>
      </article>

      <article class="hex-colors">
        <div class="explanation">
          <h2 class="heading">CSS Hexadecimal Colors</h2>
          <p>
            CSS colors can be represented in hexadecimal (or hex) notation.
            Hexadecimal digits can represent sixteen different values using 0-9
            and a-f.<br />

            Hexadecimal colors are composed of 6 characters–each group of two
            represents a value between 0 and 255 for red, green, or blue. For
            example #ff0000 is all red, no green, and no blue.<br />

            When both characters of all three colors are repeated, hex colors
            can be abbreviated to only three values, so #0000ff could also be
            represented as #00f.<br />
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">.red </span><span>{</span><br />
          <span>color: #ff0000;</span><br />
          <span>}</span><br />
          <br />
          <span class="tag">.short-blue </span><span>{</span><br />
          <span>color: #00f;</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="rgb-css">
        <div class="explanation">
          <h2 class="heading">CSS rgb() Colors</h2>
          <p>
            CSS colors can be declared with RGB colors using rgb() syntax.<br />

            rgb() should be supplied with three values representing red, green,
            and blue. These values range can from 0 to 255.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">.hot-pink </span><span>{</span><br />
          <span>color: rgb(249, 2, 171);</span><br />
          <span>}</span><br />
          <br />
          <span class="tag">.green</span><span>{</span><br />
          <span>color: rgb(0, 255, 0);</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="activity">
        <div class="explanation">
          <h2 class="heading">An activity for you!</h2>
          <p>Fill in the missing keywords in the code to your right. 👉</p>
          <p>Set the color of all &lt;h1&gt; elements to blue.</p>
        </div>

        <form action="" id="2" class="activity">
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
              <input type="text" id="quiz" />
              <span>{</span><br />
              <span>color</span>
              <span>:</span>
              <input type="text" id="quiz" />
              <span>;</span><br />
              <span>}</span>
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
