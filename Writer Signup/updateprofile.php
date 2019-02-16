<?php

session_start();
$user = $_SESSION["username"];
$id = $_SESSION["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "writers";

//create variables
		$fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $idnumber = $_POST["idnumber"];
        $location = $_POST["location"];
        $birthday = $_POST["birthday"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $specialty = $_POST["specialty"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE writers SET fname='$fname',lname='$lname',idnumber='$idnumber',location='$location',birthday='$birthday',gender='$gender', phone='$phone',specialty='$specialty' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location: writerprofile.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>