<?php 
    include('./connection.php'); 
    session_start(); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dashboard.css">
    <title>
        <?php
        echo $_SESSION['fName'] . "'s profile | Le Bateau"
        ?>
    </title>
        
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
                            echo "@" . $_SESSION['fName'] 
                        ?> 
                    </span>
                    <br>
                    <span>
                        <?php
                            echo $_SESSION['fName'] . " " . $_SESSION['lName']; 
                        ?> 
                    </span>
                    
                </div>

                <div class="editProfile">
                    <button>Edit Profile</button>
                    <div class="moral-wrapper">
                        <div class="moral">
                            <form action="./edit-profile.php" method="POST">
                                <div class="moralHeader">
                                    <div class="label">
                                        <span>Edit Profile</span>
                                    </div>
                                    <div class="cancelBtn">
                                        <button name="cancelBtn">Cancel</button>
                                    </div>
                                </div>
                                <div class="moralBody">
                                        <label for="username">Username *</label>
                                        <br>
                                        <input type="text" name="username" value="<?php echo $_SESSION['fName']; ?>">
                                        <br>
                                        <label for="bio">Bio</label>
                                        <br>
                                        <textarea name="bio" id="bio" cols="60" rows="10" placeholder="Share your interests and goals (160 characters max)"></textarea>
                                        <br>
                                        <label for="github">GitHub Username</label>
                                        <br>
                                        <input type="text" name="github">
                                        <br>
                                        <label for="linkedIn">LinkedIn Username</label>
                                        <br>
                                        <input type="text" name="linkedIn">
                                        <br>
                                        <label for="twitter">Twitter Username</label>
                                        <br>
                                        <input type="text" name="twitter">
                                        <br>
                                        <label for="website">Personal Website</label>
                                        <br>
                                        <input type="text" name="website">
                                </div>      
                                <div class="moralFooter">
                                    <div class="saveChangesBtn">
                                        <button name="save">Save Changes</button>
                                    </div>
                                    <div class="cancelBtnFooter">
                                        <button name="cancelBtnFooter">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="userLocation">
                    <span>
                        <?php 
                            echo $_SESSION['city'] . ", " . $_SESSION['country']; 
                        ?> 
                    </span>
                </div>
            </div>
        </div>

        <div class="course-wrapper">
            <span style="font-size: 1.5rem; font-weight: bold;">Latest Courses</span>
            <ul class="courseList">
                <?php
                    $registrationId = $_SESSION['registrationId']; 
                    $sql = "SELECT s.studentId, c.courseId, c.name 
                            FROM course c, enrollment e, student s, registration r
                            WHERE c.courseId = e.courseId
                            AND s.studentId = e.studentId
                            AND s.registrationId = r.registrationId
                            AND r.registrationId = '$registrationId'; 
                            "; 

                    $result = mysqli_query($conn, $sql); 
                    $courses = mysqli_fetch_all($result, MYSQLI_ASSOC); 
         
                    foreach($courses as $course) {
                ?>
                    <li>
                        <button class="courseBtn" id="<?php echo $course['courseId'] ?>">
                            <div class="courseDetails">
                                <div class="courseName">
                                    <span style="font-size: 0.9rem;">Course</span>
                                    <br>
                                    <span><?php echo "Learn " . $course['name'] ?></span>
                                </div>
                                <div class="resumeIcon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                        </button>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <a href="logout.php">Logout</a>

    <?php 
        include('../footer.php'); 
    ?> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/dashboard.js"></script>
</body>
</html>

