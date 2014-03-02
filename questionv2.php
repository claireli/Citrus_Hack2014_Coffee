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
	    <link rel="stylesheet" type="text/css" href="style.css">
        <title> Student Test Question 1</title>
    </head>
    <body><div id="box">
        <div class="container">
            <div class ="login">
                <font size="3">SUBJECT</font> <br>
                <font size="2">Question #<?php echo $qno; ?>
				<br></font>
            </div>

   			<div class="login">
            	<font size="3" style="font-style:italic"><?php echo $question; ?></font>
            </div>

            <div class = "login">                        
                <form action="result.php" method="post">
                    <input type="radio" name="<?php echo $in_name; ?>" value="a">a. <?php echo $op1; ?> <br>
                    <input type="radio" name="<?php echo $in_name; ?>" value="b">b. <?php echo $op2; ?> <br>
                    <input type="radio" name="<?php echo $in_name; ?>" value="c">c. <?php echo $op3; ?> <br>
                    <input type="radio" name="<?php echo $in_name; ?>" value="d">d. <?php echo $op4; ?>
                    <p class="submit"><input type="submit" name="commit" value="Submit"></p>
                </form>
				</div>
            </div>                      
        </div>
     </body>
</html>