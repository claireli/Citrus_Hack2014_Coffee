<?php 

$con= mysql_connect("localhost", "root", "", "thoughtbox");

if(!$con){
	die('this is a fuckuppp'. mysql_error());
}
$sql="SELECT * FROM thoughtbox.register";

//for loop, loop through $num get all username/password and insert into login
//for($x=0; x < $RecordNum; ++$x){
	$usr="SELECT username FROM thoughtbox.register";
	// echo $usr; echo "<br>";
	$ps="SELECT password FROM thoughtbox.register";
	// echo $ps; echo "<br>";
	$bob = mysql_query($sql);
	$bob2 = mysql_fetch_array($bob);

	// echo $bob2[2];
	// echo $bob2[3];
	$query="INSERT INTO login (username, password) values ('butts', 'yolo')";
	
echo $query;
if(mysql_query($query)){

die('FUCK' . mysqli_error($query));

}
	echo "yay we didnt fuck up!";
//}



?>