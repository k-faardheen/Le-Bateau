<?php
include('connection.php');
session_start();

$fName = mysqli_real_escape_string($conn, $_POST['fname']);
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
$regId = 0;
$retId = "select registrationId from registration where firstName = '$fName' and lastName = '$lName'";
$rs_retId = mysqli_query($conn, $retId);

if (mysqli_num_rows($rs_retId) > 0) {
    while ($row = $rs_retId->fetch_assoc()) {
        $regId = $row['registrationId'];
    }
    
}

if (mysqli_query($conn, $sql)) {
    $_SESSION['name'] = $fName;

    if ($role == 'student') {
        $insert = "insert into student(registrationId) values ('$regId')";
        if (mysqli_query($conn, $insert)) {
            header('location:dashboard.php');
            $_SESSION['role'] = $role;
        } else {
            echo "failed to insert into table student " . mysqli_error($conn);
        }
    } else {
        $insert = "insert into contributor(registrationId) values ('" . $regId . "')";
        if (mysqli_query($conn, $insert)) {
          header('location:../admin/admin.php');
            $_SESSION['role'] = $role;
        } else {
            echo "failed to insert into table contributor " . mysqli_error($conn);
        }
    }
} else {
    echo mysqli_error($conn);
}



mysqli_close($conn);
