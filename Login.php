<?php
//header('Location: no_clickerq_avail.html');
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="thoughtbox"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

//check MySQL for questions, if no questions, go to no_clicker_avail.html
/*$questStr="select * from question;";
$source=mysql_query($questStr);
$QCount=mysql_num_rows($source);
if($QCount==0){
	header('Location: no_clickerq_avail.html');
}

*/
/*$query = "SELECT * FROM question";
$myresult = mysql_query($query);
if (mysql_num_rows($myresult) > 0) { 
 echo "Table is not Empty";
}
else header('Location: no_clickerq_avail.html');*/


// username and password sent from form 
$myusername=$_POST['usr']; 
$mypassword=$_POST['pw']; 

// To protect MySQL injection (more detail about MySQL injection)

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["myusername"];
$_SESSION["mypassword"]; 
header("location:login_success.php");
//header("Location: no_clickerq_avail.html");
}
else {
echo "Wrong Username or Password";
}
?>