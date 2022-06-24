<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
</head>
<body>
    <form name = forget action="forget-pwd.php" method="POST">
        <input type="text" name="name">
    <button name="SubmitButton">submit</button>
    </form>
   <?php
    if (isset($_POST['SubmitButton'])) {
   $name = $_POST['name'];
   echo $name;
    }
   ?>
</body>
</html>