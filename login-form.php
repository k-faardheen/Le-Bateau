<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Le Bateau-Log In</title>
  <link rel="stylesheet" href="./style/login.css" />
</head>

<body>
  <header>
    <nav>
      <div class="menu-container">
        <div class="logo">
          <a href="./index.php">>_Le Bateau</a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="./tutorial.html">Tutorial</a></li>
            <li><a href="./code-challenge.html">Code Challenge</a></li>
            <li><a href="./about-us.html">About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="main">
    <div class="form-group">
      <form name="login-form" action="./php/login.php" method="POST">
        <div class="email">
          <input type="email" id="email" name="email" ; name="email" placeholder="Email Address" required />
        </div>
        <div class="password">
          <input type="password" id="password" name="password" name="password" placeholder="Password" required />
        </div>
        <button class="btn" onclick="return validate()">Log In</button>
        <p>Not a member yet?<a href="sign-up.html"> Sign Up</a></p>
        <a href="#">Forget password?</a><br>
        <?php
        // session_start();
        // if (isset($_SESSION['auth'])){
        //   echo $_SESSION['auth'];
        //   if ($_SESSION['auth']== 'wrong'){
        //     echo 'invalid password/username';
        //   }

        // }
        //-----------------------------------------
        if (isset($_GET['status'])) {
          if ($_GET['status'] == 'invalid') {
            echo "<font color='red'>wrong password/username</font>";
          }
        }
        //-----------------------------------------
        ?>
      </form>
    </div>
    <div class="left-section">
      <h2>Welcome back at <span class="bateau">Le Bateau</span></h2>
      <div class="line">
        <hr />
      </div>
      <h3>Log in to your account to continue</h3>
    </div>
  </div>
  <script src="./script/log-in.js"></script>
</body>

</html>