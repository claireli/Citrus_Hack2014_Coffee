<?php 
$timenow = time();
echo $timenow;
echo "<br>";

//$vartime = $_POST("name");
$vartime = 10000000;
if ($timenow>=$vartime) {
	echo "timenow >= vartime <br> (Yes to Clicker Question) <br>";
	header("Location: question.php");
} else {
	echo "vartime < timenow <br> (No Clicker Question) <br>";
	header("Location: no_clickerq_avail.html");
}
?>
