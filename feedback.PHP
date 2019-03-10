<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "writers";
    
    // get values form input text and number

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$relationship = $_POST["relationship"];
$message = $_POST["message"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{

if (isset($_POST['submit']))
  {
$sql = "INSERT INTO contact (username,email,phone,relationship,message) VALUES ('$name','$email','$phone','$relationship','$message')";
   
//if submission was successful
  if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Your message has been received successfully');
window.location='contact.php';
</script>";
    
      //if submission fails
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}

$conn->close();

?> 