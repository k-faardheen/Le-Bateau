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
    <title>Le Bateau - Box Model</title>
  </head>
  <body>
    <?php include('./header.php');  ?> 

    <section class="header">
      <div class="header-wrapper">
        <h1>The Box Model</h1>
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
      <article class="margin">
        <div class="explanation">
          <h2 class="heading">CSS Margin Collapse</h2>
          <p>
            CSS margin collapse occurs when the top and bottom margins of blocks
            are combined into a single margin equal to the largest individual
            block margin.
          </p>
          <p>
            Margin collapse only occurs with vertical margins, not for
            horizontal margins.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey">
            /* The vertical margins will collapse to 30 pixels instead of adding
            to 50 pixels. */</span
          ><br />
          <span class="tag">.block-one</span><span> {</span><br />
          <span>margin: 20px;</span><br />
          <span>}</span><br />
          <br />
          <span class="tag">.block-two</span><span> {</span><br />
          <span>margin: 30px;</span><br />
          <span>}</span><br />
        </div>
      </article>

      <article class="auto">
        <div class="explanation">
          <h2 class="heading">CSS auto keyword</h2>
          <p>
            The value auto can be used with the property margin to horizontally
            center an element within its container. The margin property will
            take the width of the element and will split the rest of the space
            equally between the left and right margins.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">div</span>
          <span>{</span><br />
          <span>margin: auto;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="overflow">
        <div class="explanation">
          <h2 class="heading">Write CSS in Separate Files</h2>
          <p>
            If content is too large for its container, the CSS overflow property
            will determine how the browser handles the problem. section
          </p>

          <p>
            By default, it will be set to visible and the content will take up
            extra space. It can also be set to hidden, or to scroll, which will
            make the overflowing content accessible via scroll bars within the
            original container.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">small-block</span>
          <span>{</span><br />
          <span>overflow: scroll;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="height-width">
        <div class="explanation">
          <h2 class="heading">Height and Width Maximums/Minimums</h2>
          <p>
            The CSS min-width and min-height properties can be used to set a
            minimum width and minimum height of an element’s box. CSS max-width
            and max-height properties can be used to set maximum widths and
            heights for element boxes.
          </p>
        </div>

        <div class="code-snippet">
          <span style="color: grey"
            >/* Any element with class "column" will be at most 200 pixels wide,
            despite the width property value of 500 pixels. */</span
          ><br />
          <span class="tag">.column </span><span>{</span><br />
          <span>max-width: 200px;</span><br />
          <span>width: 500px;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="box-sizing">
        <div class="explanation">
          <h2 class="heading">The property box-sizing of CSS box model</h2>
          <p>
            CSS styles can be directly added to HTML elements by using the style
            attribute in the element’s opening tag. Each style declaration is
            ended with a semicolon. Styles added in this manner are known as
            inline styles
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">.container </span><span>{</span><br />
          <span> box-sizing: border-box;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="border-box">
        <div class="explanation">
          <h2 class="heading">CSS box-sizing: border-box</h2>
          <p>
            The value border-box of the box-sizing property for an element
            corresponds directly to the element’s total rendered size, including
            padding and border with the height and width properties.
          </p>
          <p>
            The default value of the border-box property is content-box. The
            value border-box is recommended when it is necessary to resize the
            padding and border but not just the content. For instance, the value
            border-box calculates an element’s height as follows: height =
            content height + padding + border.
          </p>
        </div>

        <div class="code-snippet">
          <span class="tag">#box-example </span><span>{</span><br />
          <span>box-sizing: border-box;</span><br />
          <span>}</span>
        </div>
      </article>

      <article class="activity">
        <div class="explanation">
          <h2 class="heading">An activity for you!</h2>
          <p>Fill in the missing keywords in the code to your right. 👉</p>
          <p>Set the width of the &lt;div&gt; element to "200px".</p>
        </div>

        <form action="" id="1" class="activity">
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
              <span>{</span><br />
              <input type="text" id="quiz" />
              <span>:</span>
              <input type="text" id="quiz" />
              <span>;</span><br />
              <span>}</span><br />
              <span class="tag">&lt;/style&gt; </span><br />
              <br />
              <span class="tag">&lt;body&gt; </span><br />
              <span class="tag">&lt;div&gt; </span><br />
              <span>Lorem ipsum dolor sit amet,</span><br />
              <span>consectetur adipiscing elit,</span><br />
              <span>sed do eiusmod tempor incididunt</span><br />
              <span>ut labore et dolore magna aliqua.</span><br />
              <span class="tag">&lt;/div&gt; </span><br />
              <br />
              <span class="tag">&lt;body&gt; </span><br />
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
