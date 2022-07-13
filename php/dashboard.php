<?php 
    include('./connection.php'); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../header.php'); 
    ?>

    <div class="dashboard-wrapper">
        <div class="profile-wrapper">
            <div class="profileDetail">
                <img src="../assets/wanted.png">
                <div class="username">
                    <span>
                        <?php 
                            session_start(); 
                            echo print_r($_SESSION);  
                        ?> 
                    </span>
                </div>

                <div class="editProfile">
                    <a href="">Edit Profile</a>
                </div>

                <div class="userLocation">
                    <span>
                        <?php 
                        
                        ?> 
                    </span>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>

<a href="logout.php">Logout</a>