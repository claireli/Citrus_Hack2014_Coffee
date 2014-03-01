<?php
$con=mysqli_connect("localhost","root"," ","thoughtbox");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO question (qno, question, option1, option2, option3, option4, in_type, in_name, in_value)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>