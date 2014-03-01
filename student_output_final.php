<?php
$con = mysql_connect("localhost","root","claire","thoughtbox");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql = "SELECT * FROM thoughtbox.question;";
if (mysql_query($sql,$con))
  {
	$result = mysql_query("SELECT * FROM thoughtbox.question;");
	$qno = mysql_result($result, 0, 'qno');
	$question = mysql_result($result, 0, 'question');
	$op1 = mysql_result($result, 0, 'option1');
	$op2 = mysql_result($result, 0, 'option2');
	$op3 = mysql_result($result, 0, 'option3');
	$op4 = mysql_result($result, 0, 'option4');
	$in_type = mysql_result($result, 0, 'in_type');
	$in_name = mysql_result($result, 0, 'in_name');
	$in_value = mysql_result($result, 0, 'in_value');

	//the mysql access, the row#, and the field
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

mysql_close($con);
?>

<html>
<head>
<title> OUTPUT TEST </title>
</head>

<body>

Question <?php echo $qno; ?>.<p>
<i><?php echo $question; ?></i><p>
<?php echo $op1; ?><br>
<?php echo $op2; ?><br>
<?php echo $op3; ?><br>
<?php echo $op4; ?><br>

</body>
</html>