<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "writers";
    
    // get values form input text and number

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatpassword = $_POST["repeatpassword"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO accowners VALUES ('$name','$email','$password','$repeatpassword','','','','','','','','','','','','','','')";
   
//if submission was successful
  if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('successfully registered');
window.location='index.html';
</script>";
    
      //if submission fails
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 