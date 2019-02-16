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
        $staffid = $_POST["staffid"];
        $yob = $_POST["yob"];
        $gender = $_POST["gender"];
        $rank = $_POST["rank"];
        //$shift = $_POST["shift"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE accowners SET fname='$fname',lname='$lname',idnumber='$idnumber',staffid='$staffid',yob='$yob',gender='$gender', rank='$rank' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location: profile.php");

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>