<?php
include('connection.php');
session_start();

$fName = mysqli_real_escape_string($conn, $_POST['fname']); //Escape special characters in strings to avoid sql injection
$lName = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$role = mysqli_real_escape_string($conn, $_POST['profession']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$pcode = mysqli_real_escape_string($conn, $_POST['fname']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);


$sql = "INSERT INTO registration (firstName, lastName, role, email, gender, DOB, streetName, postalCode, city, country, password) 
VALUES ('" . $fName . "', '" . $lName . "', '" . $role . "', '" . $email . "', '" . $gender . "', '" . $dob . "', '" . $street . "', '" . $pcode . "', '" . $city . "', '" . $country . "', '" . $password . "')";
$rs = mysqli_query($conn, $sql);
if ($rs) {
    echo "inserted";
} else {
    echo mysqli_error($conn);
}

$regId = 0;
$retId = "select registrationId from registration where firstName = '$fName' and lastName = '$lName'";//getting the registrationid of the current user
$rs_retId = mysqli_query($conn, $retId);

if (mysqli_num_rows($rs_retId) > 0) {
    while ($row = $rs_retId->fetch_assoc()) {
        $regId = $row['registrationId'];
    }
}

$_SESSION['fName'] = $fName;
$_SESSION['lName'] = $lName;

//if the curent registered account is a student insert into student table else in the contributor table
if ($role == 'student') {
    $insert = "insert into student(registrationId) values ('" . $regId . "')";//insert into student table
    if (mysqli_query($conn, $insert)) {
        header('location:dashboard.php');
        $_SESSION['role'] = $role;
        $_SESSION['city'] = $city;
        $_SESSION['country'] = $country;
        $_SESSION['registrationId'] = $regId;
        $sql_stud = "select studentId from student WHERE registrationId = '$regId' "; //retrieving studentid for enrollement
        $rs_stud = mysqli_query($conn, $sql_stud); 
        $studentId = mysqli_fetch_all($rs_stud, MYSQLI_ASSOC); 

        $_SESSION['studentId'] = $studentId[0]['studentId'];
    } else {
        echo "failed to insert into table student " . mysqli_error($conn);
    }
} else {
    $insert = "insert into contributor(registrationId) values ('" . $regId . "')";//insert into contributor table
    if (mysqli_query($conn, $insert)) {
        header('location:../admin/admin.php');
        $_SESSION['role'] = $role;
    } else {
        echo "failed to insert into table contributor " . mysqli_error($conn);
    }
}



mysqli_close($conn);
