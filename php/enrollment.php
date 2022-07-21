<?php 
    include('./connection.php'); 
    session_start(); 

    if(!isset($_SESSION['fName'])) { //Checks if the user is already logged in. 
        echo 'you need to first login';
    }else { 
        $courseBtn = $_POST['course-btn']; // get the value of the course-btn(i.e assuming each value corresponds to each course's id)
        $courses = $_SESSION['courses'];  // grab previous courses the student has already enrolled to. 
        $alreadyEnrolled = false; 
        $path = ''; 
        //get the path of the course's landing page depending on which course button the user clicked on. 
        if($courseBtn === '1') { 
            $path = '../html-modules/learn-html.php';  
        }else if($courseBtn === '2') { 
            $path = '../css-modules/learn-css.php';
        }else if($courseBtn === '3') { 
            $path = '../javascript-modules/learn-javascript.php';
        }

        $studentId = $_SESSION['studentId']; //grab the studentId from a session to be used to insert into the table course

        foreach($courses as $courseEnrolled) { 
            if($courseBtn === $courseEnrolled['courseId']) { // if the student has already enrolled to a course, 
                $alreadyEnrolled = true;  // Set the flag to true and break from the loop. 
                break; 
            }
        }

        if($alreadyEnrolled) { 
            header('location:' . $path . "?alreadyEnrolled"); // redirects to the course's landing page. 
        }else { 
            $sql = "INSERT INTO enrollment(courseId,studentId)
            VALUES('$courseBtn', '$studentId');"; //inserting row into table course

            if(mysqli_query($conn, $sql)) { 
                header('location:' . $path); // redirects to the course's landing page. 
            }else { 
                header('./enrollment.php');
            }
        }
    }
    
    
    mysqli_close($conn); 
?> 