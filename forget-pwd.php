<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forget password</title>
  <link rel="stylesheet" href="./style/forget-pwd.css">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="./assets/rainbow.png">
</head>

<body>
  <header>
   <?php include('header.php')?>
  </header>
  <div id="wrapper">
    <div id="container">
      <h1>Forget password </h2>
        <form name="forget-pwd" action="forget-pwd.php" method="POST">
          <input type="text" id="email" name="email" placeholder="Enter your email address" /><br>
          <button name="submit" id="btn">Forget password</button>
        </form>
        <?php
        session_start();
        include('./php/connection.php');
        if (isset($_POST['submit'])) {
          $email = $_POST['email'];
          $sql = "select * from registration where email = '$email'";//look for email in the database
          $rs = mysqli_query($conn, $sql);

          if (mysqli_num_rows($rs) < 1) {
            echo "<font color='red'>email doesnot exists</font>";
          } else {
            while ($row = $rs->fetch_assoc()) {

              $_SESSION['name'] = $row['firstName'];
              $_SESSION['email'] = $row['email'];
            }
            header('location:./php/reset-pwd.php');
          }
        }
        mysqli_close($conn);
        ?>
    </div>
  </div>
</body>

</html>