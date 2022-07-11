<?php
    include('connection.php');
    session_start();


    if (isset($_session['name'])) {
        header('location:dashboard.php');
        
    } else {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "select * from registration where email = '$email' and password = '$pass'";
        $rs = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($rs) < 1) {
            header("location:../login-form.php?status=invalid");

        } else {
            while ($row = $rs->fetch_assoc()) {
                $_SESSION['name'] = $row['firstName'];
                echo $_SESSION['name'];
               $_SESSION['lname'] = $row['lastName'];
               echo 'hello'.$_SESSION['lname'];
            }
            echo '<script src="./auth.js"></script>'; 
            header('location:dashboard.php');
        }
    }

    mysqli_close($conn);

?>
