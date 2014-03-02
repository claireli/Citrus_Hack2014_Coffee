<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="style.css">
        <title>Clicker Question</title>
    </head>
    <body><div id="box">
        <div class="container">
            <div class = "login">                        

<?php
session_start();
$con = mysql_connect("localhost","root","","thoughtbox");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


//On page 2

$user_answer=$_POST['q'];

$correct=$_SESSION['store'];
$x=0;

$q_count=1;

$_SESSION['inc']=$q_count;

echo "This is the user's answer: ";
echo $user_answer;
echo "<br>This is the correct answer: ";
echo $correct;
echo "<p>";

if ($user_answer==$correct)
  {
  echo "Goodness, you are correct!";
  $x++;
  echo "<br>Your current score is:  ";
  echo $x;
  }
else
  {
  echo "That is incorrect!";
  echo "<br>Your current score is:  ";
  echo $x;
  echo "<p>Your attendance has been noted. Thank you for your participation, clicker questions have concluded.";
  }


/*

$sql1 = "SELECT * FROM thoughtbox.question;";  
$sql = "SELECT * FROM thoughtbox.score;";
if (mysql_query($sql,$con))
  {
  	//loop~ HEAERRRR
  	$result = mysql_query($sql);
  	$recordCount=mysql_num_rows($result);
  	$x=0;
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

mysql_close($con);
*/
?>
                <form action="homepage.html" method="post">
                    <p class="submit"><input type="submit" name="commit" value="Ok"></p>

                </form>
				</div>
            </div>                      
        </div>
     </body>
</html>


