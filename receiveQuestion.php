<?php
$con=mysqli_connect("localhost","root","claire","thoughtbox");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO question (qno, course, semester, question, option1, option2, option3, option4, in_type, in_name, answer)
VALUES ('$_POST[qNum]','$_POST[course]','$_POST[semester]','$_POST[question]','$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[in_type]','$_POST[in_name]','$_POST[answer]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="style.css">
        <title> Question to Server</title>
    </head>
    <body>
    	<p>Question Updated to Server!</p>
    </body>
</html>


mysqli_close($con);
?>