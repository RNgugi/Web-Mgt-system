<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("writers", $con);

 

$sql="INSERT INTO writers (username,fname, lname,idnumber,inmateid,yob,crime,termlength,releasedate,activity)

VALUES

('$_POST[username]','$_POST[fname]','$_POST[lname]','$_POST[idnumber]','$_POST[inmateid]','$_POST[yob]','$_POST[crime]','$_POST[termlength]','$_POST[releasedate]','$_POST[activity]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "<script type='text/javascript'>alert('success');
window.location='signup.php';
</script>";


 

mysql_close($con)

?>