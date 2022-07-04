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

// $sql = "INSERT INTO registration (firstName, lastName, role, email, gender, DOB, streetName, postalCode, city, country, password) 
// VALUES ('$fName', '$lName', '$role', '$email', '$gender', '$dob', '$street', '$pcode', '$city', '$country', '$password')";
// echo $sql;

if (mysqli_query($conn, $sql)) {
    $_SESSION['name'] = $fName;
    echo $_SESSION['name'];
    header('location:dashboard.php');
} else {
    echo mysqli_error($conn);
}
mysqli_close($conn);
