
<?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
         $db = 'lebateau';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
         
         if(! $conn ) {
           die('Could not connect: ' . mysqli_connect_error());
        }
     // echo 'Connected successfully';
         
?>