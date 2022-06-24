<?php
         $dbhost = 'sql5.freesqldatabase.com:3306';
         $dbuser = 'sql5500343';
         $dbpass = 'UfdzsgnAeb';
         $db = 'sql5500343';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_connect_error());
         }
        // echo 'Connected successfully';
         
?>