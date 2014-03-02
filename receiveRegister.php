<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="style.css">
        <title> Question to Server</title>
    </head>
	<body>

<?php
$con=mysqli_connect("localhost","root","","thoughtbox");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO login (username, password) VALUES ('$_POST[usr]','$_POST[ps]');";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
//redirect back a page

mysqli_close($con);
?>

<a href="HomePage.html">
<p id="POOP" class="submit"><input type="submit" name="POOP" value="back to home"></a>
		
		
		</div>
	
		
	</form>
	</body>
</html>
