<?php echo "Hello World! This is a test. PHP is working." ?>

<?php 
$con=mysqli_connect ("localhost","root","","thoughtbox");

//I'm going to put an echo test here to confirm connection!

if (mysqli_connect_error()){
	echo "Failed to connect to mySQL database. :-(" . mysqli_connect_error();
}

else {
	echo "<p> Hey, you connected to the mySQL database! :D";
}

// Create table
$sql="CREATE TABLE question(qno INT, course TINYTEXT, semester TINYTEXT, question MEDIUMBLOB, option1 TEXT, option2 TEXT, 
option3 TEXT, option4 TEXT, in_type TINYTEXT, in_name TINYTEXT, answer CHAR(1))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "<br>Table persons created successfully";
  }
else
  {
  echo "<br>Error creating table: " . mysqli_error($con);
  }







/*

$sql="SELECT * FROM OMA";$result=mysql_query($sql);

if(!mysqli_query ($con, $sql))
	{
	die ('Error: ' . mysqli_error($con));
	}
	
	else {
	echo "<p>Here are the database results:" . $result;
	}
	
	mysql_select_db('clairetest');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_assoc($retval))
{
    echo "FIELD1 :{$row['rdate']}  <br> ".
         "FIELD2: {$row['rstatus']} <br> ".
         "FIELD3 : {$row['dstatus']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";

	mysqli_close($con);

*/
	
?>

