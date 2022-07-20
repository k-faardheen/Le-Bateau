<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/learn-html.css" />
    <title>Le Bateau - CSS</title>
  </head>
  <body>
   <?php include('./header.php');  ?> 

    <section>
      <div class="banner-html">
        <div class="banner-html-title">
          <span>Learn CSS</span>
        </div>

        <div class="banner-html-start">
          <a href="./syntax-and-selectors.php">Start</a>
        </div>
      </div>
    </section>

    <section class="overview-wrapper">
      <div class="overview-title">
        <span style="border-bottom: #1f7a8c solid 3.5px">Overview</span>
      </div>

      <article class="overview-html">
        <span style="font-weight: bold; font-size: 1.1rem">Why Learn CSS?</span>
        <p>
          Cascading Style Sheets are an important way to control how your web
          pages look. CSS controls the fonts, text, colors, backgrounds,
          margins, and layout. CSS offers several significant advantages over
          alternative approaches to web design.
        </p>

        <br />

        <span style="font-weight: bold; font-size: 1.1rem"
          >Take-Away Skills</span
        >

        <p>
          You will learn some bacis of css. How to change colors using selectors
          and syntax.You will also learn how to position elements using css.
        </p>
      </article>

      <article class="html-syllabus">
        <ol class="syllabus-list">
          <li>
            <div class="list-container">
              <div class="list-order">
                <span>0</span>
              </div>
              <div class="list-description">
                <a href="./syntax-and-selectors.php">Syntax and Selectors</a>
                <p>Learn about how to insert css</p>
              </div>
            </div>
          </li>

          <li>
            <div class="list-container">
              <div class="list-order">
                <span>1</span>
              </div>
              <div class="list-description">
                <a href="./visual-rules.php">Visual Rules</a>
                <p>Learn about how to use class and id to change elements</p>
              </div>
            </div>
          </li>

          <li>
            <div class="list-container">
              <div class="list-order">
                <span>2</span>
              </div>
              <div class="list-description">
                <a href="./box-model.php">The Box Model</a>
                <p>Learn about how to resize elements</p>
              </div>
            </div>
          </li>

          <li>
            <div class="list-container">
              <div class="list-order">
                <span>3</span>
              </div>
              <div class="list-description">
                <a href="./display-and-positioning.php"
                  >Display And Positioning</a
                >
                <p>You'll learn on how to position an element using css</p>
              </div>
            </div>
          </li>
          <li>
            <div class="list-container">
              <div class="list-order">
                <span>4</span>
              </div>
              <div class="list-description">
                <a href="./colors.php">Colors</a>
                <p>
                  You'll learn on how to change colors of a specific element
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="list-container">
              <div class="list-order">
                <span>5</span>
              </div>
              <div class="list-description">
                <a href="./typography.php">Typography</a>
                <p>You'll learn on how to change the typography</p>
              </div>
            </div>
          </li>
        </ol>
      </article>
    </section>

    <article class="build">
      <div class="build-wrapper">
        <div class="heading">
          <h1>WHAT YOU'LL BE BUILDING.</h1>
        </div>

        <div class="code-challenge">
          <div class="rainbow">
            <div class="rainbow-img">
              <img src="../assets/rainbow.png" width="100" height="100" />
            </div>
            <div class="rainbow-description">
              <a href="">The colours of the rainbow (HTML Task)</a>
            </div>
            <div class="lets-try">
              <a href=""> Let's try -></a>
            </div>
          </div>

          <div class="lemon">
            <div class="lemon-img">
              <img src="../assets/lemon.png" width="100" height="100" />
            </div>
            <div class="lemon-description">
              <a href="">Lemon Drizzle Cake Recipe (HTML Task)</a>
            </div>
            <div class="lets-try">
              <a href=""> Let's try -></a>
            </div>
          </div>

          <div class="road-sign">
            <div class="road-signs-img">
              <img src="../assets/highway-sign.png" width="100" height="100" />
            </div>
            <div class="road-signs-description">
              <a href="">Road Signs (HTML / CSS)</a>
            </div>
            <div class="lets-try">
              <a href=""> Let's try -></a>
            </div>
          </div>
        </div>
      </div>
    </article>

    <?php include('./footer.php');?> 
  </body>
</html>
