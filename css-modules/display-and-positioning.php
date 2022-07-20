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
    <title>Le Bateau - Display and Positioning</title>
  </head>
  <body>
    <?php include('./header.php');  ?> 

    <section class="header">
      <div class="header-wrapper">
        <h1>Display And Positioning</h1>
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
      <article class="fixed-position">
        <div class="explanation">
          <h2 class="heading">Fixed CSS Positioning</h2>
          <p>
            Positioning in CSS provides designers and developers options for
            positioning HTML elements on a web page. The CSS position can be set
            to static, relative, absolute or fixed. When the CSS position has a
            value of fixed, it is set/pinned to a specific spot on a page. The
            fixed element stays the same regardless of scrolling. The navigation
            bar is a great example of an element that is often set to
            position:fixed;, enabling the user to scroll through the web page
            and still access the navigation bar.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">navbar</span>
          <span>{</span><br />
          <span>postion : fixed;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="display-property">
        <div class="explanation">
          <h2 class="heading">CSS display property</h2>
          <p>
            The CSS display property determines the type of render block for an
            element. The most common values for this property are block, inline,
            and inline-block.
          </p>
          <br />
          <p>
            Block-level elements take up the full width of their container with
            line breaks before and after, and can have their height and width
            manually adjusted.
          </p>
          <br />
          <p>
            Inline elements take up as little space as possible, flow
            horizontally, and cannot have their width or height manually
            adjusted.
          </p>
          <br />
          <p>
            Inline-block elements can appear next to each other, and can have
            their width and height manually adjusted.
          </p>
          <br />
        </div>
        <div class="code-snippet">
          <span class="tag">.container1 </span><span>{</span><br />
          <span>display: block;</span><br />
          <span>}</span><br />
          <br />

          <span class="tag">.container2 </span><span>{</span><br />
          <span>display: inline;</span><br />
          <span>}</span><br />
          <br />

          <span class="tag">.container3 </span><span>{</span><br />
          <span>display: inline-block;</span><br />
          <span>}</span><br />
          <br />
        </div>
      </article>

      <article class="absolute">
        <div class="explanation">
          <h2 class="heading">CSS position: absolute</h2>
          <p>
            The value absolute for the CSS property position enables an element
            to ignore sibling elements and instead be positioned relative to its
            closest parent element that is positioned with relative or absolute.
            The absolute value removes an element entirely from the document
            flow. By using the positioning attributes top, left, bottom and
            right, an element can be positioned anywhere as expected
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">.element </span><span>{</span><br />
          <span>position: absolute;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="relative">
        <div class="explanation">
          <h2 class="heading">CSS position: relative</h2>
          <p>
            The value relative of the CSS position property enables an element
            to be positioned relative to where it would have originally been on
            a web page. The offset properties can be used to determine the
            actual position of the element relative to its original position.
            Without the offset properties, this declaration will have no effect
            on its positioning, it will act as the default value static of the
            position property.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">.element </span><span>{</span><br />
          <span>position: relative;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="activity">
        <div class="explanation">
          <h2 class="heading">An activity for you!</h2>
          <p>
            Position the &lt;h1&gt; element to always be 50px from the top, and
            10px from the right, relative to the window/frame edges.
          </p>
        </div>

        <form action="" id="3" class="activity">
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
              <span>h1{</span><br />
              <input type="text" id="quiz" />
              <span>:</span>
              <input type="text" id="quiz" />
              <span>;</span><br />
              <input type="text" id="quiz" />
              <span>:</span>
              <span>50px;</span><br />
              <input type="text" id="quiz" />
              <span>:</span>
              <span>10px;</span><br />
              <span>}</span><br />
              <span class="tag">&lt;/style&gt; </span><br />
              <span class="tag">&lt;body&gt; </span><br />
              <span class="tag">&lt;h1&gt;</span>
              <span>This is a heading</span>>
              <span class="tag">&lt;/h1&gt;</span><br />
              <span class="tag">&lt;p&gt;</span>
              <span>This is a paragraph</span>
              <span class="tag">&lt;/p&gt;</span><br />
              <span class="tag">&lt;/body&gt; </span>
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
