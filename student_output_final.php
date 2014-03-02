<?php
$con = mysql_connect("localhost","root","claire","thoughtbox");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql = "SELECT * FROM thoughtbox.question;";
if (mysql_query($sql,$con))
  {
  	//loop~ HEAERRRR
  	$result = mysql_query($sql);
  	$recordCount=mysql_num_rows($result);
  	for($recordNum=0; $recordNum < $recordCount;$recordNum++)
  	{
		$qno = mysql_result($result, $recordNum, 'qno');
		$question = mysql_result($result, $recordNum, 'question');
		$op1 = mysql_result($result, $recordNum, 'option1');
		$op2 = mysql_result($result, $recordNum, 'option2');
		$op3 = mysql_result($result, $recordNum, 'option3');
		$op4 = mysql_result($result, $recordNum, 'option4');
		$in_type = mysql_result($result, $recordNum, 'in_type');
		$in_name = mysql_result($result, $recordNum, 'in_name');
		$answer = mysql_result($result, $recordNum, 'answer');

		echo "Question"; echo $qno; echo "<br>";
		echo $question; echo "<br>";
		echo $op1; echo "<br>";
		echo $op2; echo "<br>";
		echo $op3; echo "<br>";
		echo $op4; echo "<br>";
		echo "================";  echo "<br>";
	}
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
<!-- 
Question <?php echo $qno; ?>.<p>
<i><?php echo $question; ?></i><p>
<?php echo $op1; ?><br>
<?php echo $op2; ?><br>
<?php echo $op3; ?><br>
<?php echo $op4; ?><br>
 -->
</body>
</html>
