<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Le Bateau</title>
    <link rel="icon" href="./assets/rainbow.png">
</head>
<body>

    <?php
        include('./header.php'); 
    ?>

    <section>
        <div class="hero-container">
            <div class="welcome">
                <h2>Welcome at Le Bateau</h2>
                <p>It is a platform where you can learn coding 100% for free. Many people want to learn on how to code, but there are hundreds of languages and they don't know where to start.</p>
                <p>Our website will show you a roadmap for your journey. </p>
                <div class="btn">
                    <button class="btn-learn-more" onclick="window.location.href='./about-us.html'">Learn More</button>
                </div>
            </div>
            <div class="banner">
                <img src="./assets/ti bolom.png">
            </div>
        </div>
        <div class="line"></div>
    </section>
    <main>
        <div class="roadmap-container">
            <div class="roadmap-txt">
                <p>Web-Development is a basic skill that can be learned by anyone and can be <span style="font-weight: bold;">super helpful</span></p>
                <p>We've provide you a roadmap towards becoming a web developer</p>
            </div>
            <div class="roadmap-img">
                <img src="./assets/roadmap.jpg">
            </div>
            <div class="start-learning-btn">
                <button onclick="window.location.href='./tutorial.html'">Let'start learning</button>
            </div>
        </div>
    </main>

    <section class="work">
        <div class="work-title">
            <h2>How Le Bateau works ?</h2>
        </div>

        <div class="work-container">
            <div class="learn-container">
                <div class="learn-img">
                    <img src="./assets/online-learning.png" width="100" height="100">
                </div>
                <div class="learn-description">
                    <span>Learn</span>
                    <p>Learn from our content by us on web design and coding and much more.
                        Our library is continually refreshed with the latest web technologies, so you'll never fail behind.
                    </p>
                </div>
            </div>
            <div class="practice-container">
                <div class="practice-img">
                    <img src="./assets/coding.png" width="100" height="100">
                </div>
                <div class="practice-description">
                    <span>Practice</span>
                    <p>Practice what you've learned through our tutorial 
                        and interactive code challenges. This style of 
                        practicing will allow you to retain information 
                        you've learned so you can apply it to your 
                        own future projects</p>
                </div>
            </div>
            <div class="build-container">
                <div class="build-img">
                    <img src="./assets/website.png" width="100" height="100">
                </div>
                <div class="build-description">
                    <span>Build a website</span>
                    <p>You'll learn the basics to building a website with
                        an introduction to text editors, basic HTML tags,
                        and advanced HTML skills</p>
                </div>
            </div>
        </div>
    </section>

    <section class="quote-wrapper">
        <div class="quote">
            <p>" Hands-on coding environments </p>
            <p>You don't get better at swimming by watching others.</p> 
            <p> Coding is no different. Practice as you learn with live code environments inside your browser. "</p>
        </div>
    </section>

    <section class="quiz-wrapper">
        <div class="quiz-heading">
            <h2>Stop scrolling. Start coding.</h2>
        </div>
        <div class="quiz-container">
            <div class="lemon">
                <div class="lemon-img">
                    <img src="./assets/lemon.png" width="100" height="100">
                </div>
                <div class="lemon-description">
                    <a href="">Lemon Drizzle Cake Recipe (HTML Task)</a>
                </div>
                <div class="lets-try">
                    <a href="./code-challenge/lemon-cake.html"> Let's try -></a>
                </div>
            </div>
            <div class="wanted-poster">
                <div class="lemon-img">
                    <img src="./assets/wanted.png" width="100" height="100">
                </div>
                <div class="wanted-poster-description">
                    <a href="">Wanted Poster (CSS Task)</a>
                </div>
                <div class="lets-try">
                    <a href="./code-challenge/wanted-poster.html"> Let's try -></a>
                </div>
            </div>
            <div class="poker-card">
                <div class="poker-img">
                    <img src="./assets/keypad.png" width="100" height="100">
                </div>
                <div class="poker-card-description">
                    <a href="">Digicode (JavaScript)</a>
                </div>
                <div class="lets-try">
                    <a href="./code-challenge/digicode.html"> Let's try -></a>
                </div>
            </div>
        </div>
        <div class="quiz-btn">
            <button onclick="window.location.href='./code-challenge.html'">Give me more!</button>
        </div>
    </section>

    <div class="separator"></div>

    <section class="student-corner">
        <div class="student-heading">
            <h2>Our students say </h2>
        </div>
        <div class="student-container">
            <div class="first-student">
                <div class="quotation-img">
                    <img src="./assets/quote.png" width="40" height="40">
                </div>
                <div class="review">
                    <p>Your courses are simply awesome, 
                        the depth they go into and the breadth of 
                        coverage is so good that I don't
                        have to refer to 10 different websites
                        looking for interview topics and content.
                    </p>
                </div>
                <div class="name">
                    <span style="font-weight: bold;">Software Developer</span> <br>
                    <span>Faardheen Khodabuccus</span>
                </div>
            </div>
            <div class="second-student">
                <div class="quotation-img">
                    <img src="./assets/quote.png" width="40" height="40">
                </div>
                <div class="review">
                    <p>Thank you for finally making such a 
                        platform, where I can just read the useful
                         information and  execute the code for a
                         challenge and get real hands-on
                         experience without 
                        watching videos for hours.
                    </p>
                </div>
                <div class="name">
                    <span style="font-weight: bold;">Web Developer</span> <br>
                    <span>Muntaswir Waliyullah</span>
                </div>
            </div>

            <div class="third-student">
                <div class="quotation-img">
                    <img src="./assets/quote.png" width="40" height="40">
                </div>
                <div class="review">
                    <p>I'm good to go. This is simply unbelievable! 
                        I will recommend Le Bateau to my colleagues. 
                        Thank you for making it painless,
                        pleasant and most of all hassle free!
                    </p>
                </div>
                <div class="name">
                    <span style="font-weight: bold;">Front-End Developer</span> <br>
                    <span>Mohammad Ibn</span>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up-wrapper">
        <div class="sign-up-container">
            <div class="sign-up-img">
                <img src="./assets/working.png">
            </div>
            <div class="sign-up-text">
                <span style="font-weight: bold; font-size: 18px;">Start for free</span>
                <p>If you've made it this far, you must be at least a little 
                    curious. Sign up and take the first step 
                    toward your goals.
                </p>
                <div class="sign-up-btn">
                    <button onclick="window.location.href='./sign-up.html'">Sign Up</button>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include('./footer.php'); 
    ?> 

    <script src="./script/responsive menu.js"></script>
</body>
</html>