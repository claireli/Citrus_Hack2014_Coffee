<?php
session_start();

$con = mysql_connect("localhost","root","","thoughtbox");
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
  	$x=3;
		$qno = mysql_result($result, $x, 'qno');
		$question = mysql_result($result, $x, 'question');
		$course=mysql_result($result, $x, 'course');
		$semester=mysql_result($result, $x, 'semester');
		$op1 = mysql_result($result, $x, 'option1');
		$op2 = mysql_result($result, $x, 'option2');
		$op3 = mysql_result($result, $x, 'option3');
		$op4 = mysql_result($result, $x, 'option4');
		$in_type = mysql_result($result, $x, 'in_type');
		$in_name = mysql_result($result, $x, 'in_name');
		$answer = mysql_result($result, $x, 'answer');

	
	//the mysql access, the row#, and the field
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

$_SESSION['store']=$answer;  

mysql_close($con);
?>




<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="style.css">
        <title>Clicker Question</title>
    </head>
    <body><div id="box">
        <div class="container">
            <div class ="login">
            	<a align="left" href="Homepage.html"> <img align="left" src="back_button.png" height=20 width=20> </a> <br>
                <font size="3"><?php echo $course; ?> - <?php echo $semester; ?></font> <br>
                <font size="2">Question #<?php echo $qno; ?>
				<br></font>
            </div>

   			<div class="login">
            	<font size="3" style="font-style:italic"><?php echo $question; ?></font>
            </div>

            <div class = "login">                 
                <form action="result4.php" method="post">
				
                    <input type="radio" name="q" value="a">a. <?php echo $op1; ?> <br>
                    <input type="radio" name="q" value="b">b. <?php echo $op2; ?> <br>
                    <input type="radio" name="q" value="c">c. <?php echo $op3; ?> <br>
                    <input type="radio" name="q" value="d">d. <?php echo $op4; ?>
                    <p class="submit"><input type="submit" name="commit" value="submit"></p>
                </form>
				</div>
            </div>                      
        </div>
     </body>
</html>