<?php
    include('./connection.php'); 
    session_start(); 

    if(isset($_POST['save'])) { 
        $registrationId = $_SESSION['registrationId']; 
        $username = mysqli_real_escape_string($conn, $_POST['username']); 
        $bio = mysqli_real_escape_string($conn,$_POST['bio']); 
        $github = mysqli_real_escape_string($conn,$_POST['github']); 
        $linkedIn = mysqli_real_escape_string($conn,$_POST['linkedIn']); 
        $twitter = mysqli_real_escape_string($conn,$_POST['twitter']); 
        $website = mysqli_real_escape_string($conn,$_POST['website']); 

        
       echo  "UPDATE registration 
        SET firstName = '$username', 
        bio = '$bio', 
        github = '$github', 
        linkedIn = '$linkedIn', 
        twitter = '$twitter', 
        personalWebsite = '$website', 
        WHERE registrationId = '$registrationId';
        "; 

        $sql = "UPDATE registration 
                SET firstName = '$username', 
                bio = '$bio', 
                github = '$github', 
                linkedIn = '$linkedIn', 
                twitter = '$twitter', 
                personalWebsite = '$website'
                WHERE registrationId = '$registrationId';
                "; 
    }else { 
        header('location:./dashboard.php'); 
    }

    if(mysqli_query($conn, $sql)) { 
        header('location:./dashboard.php'); 
    }else { 
        echo 'error'; 
    }

    mysqli_close($conn); 

?>