<?php 
    include('./connection.php'); 
    session_start(); 

    echo $_SESSION['studentId']; 

    if(!isset($_SESSION['fName'])) { 
        echo 'you need to first login';
    }else { 
        $course = $_POST['course-btn']; 
        $path = ''; 
        if($course === '1') { 
            $path = '../html-modules/learn-html.html';  
        }else if($course === '2') { 
            $path = '../css-modules/learn-css.html';
        }else if($course === '3') { 
            $path = '../js-modules/learn-javascript.html';
        }

        $studentId = $_SESSION['studentId']; 

        $sql = "INSERT INTO enrollment(courseId,studentId)
                VALUES('$course', '$studentId');
                "; 


        if(mysqli_query($conn, $sql)) { 
            header('location:' . $path);
        }else { 
            echo mysqli_error($conn);
            header('./enrollment.php');
        }
    }
    
    mysqli_close($conn); 
?> 