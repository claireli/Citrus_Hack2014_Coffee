<html>
<body>
<?php$username="root";$password="";$database="clairetest";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM OMA.clairetest";$result=mysql_query($query);
$num=mysql_numrows($result);mysql_close();

echo $result;

?>

<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>
<font face="Arial, Helvetica, sans-serif">Value1</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value2</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value3</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value4</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value5</font>
</td>
</tr>
<?php$i=0;while ($i < $num) {$f1=mysql_result($result,$i,"rdate");
$f2=mysql_result($result,$i,"rstatus");
$f3=mysql_result($result,$i,"dstatus");
$f4=mysql_result($result,$i,"dname");
$f5=mysql_result($result,$i,"durl");}
?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1=mysql_result($result,$i,"rdate"); ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
</td>
<tr>
<td>
<?php echo $result; ?>
</td>
</tr>
</tr>

<?php$i++;}?>
</body>
</html>