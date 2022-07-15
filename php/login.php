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
                $_SESSION['registrationId'] = $row['registrationId']; 
                $_SESSION['fName'] = $row['firstName'];
                $_SESSION['city'] = $row['city']; 
                $_SESSION['country'] = $row['country']; 
            }
            header('location:dashboard.php');
        }
    }

    mysqli_close($conn);

?>
