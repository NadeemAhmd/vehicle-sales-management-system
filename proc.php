
<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("vsms", $con);
print "<h2>MySQL: Simple Select statement</h2>";
$result = mysql_query("select * from model");
 
while($row = mysql_fetch_array($result))
  {
  echo $row['model_id'] ."". $row['model_name'] . "" . $row['manufacturer_name'];
  echo "<br/>";
  }
print "<h2>MySQL: Creating Stored Procedure</h2>";
$qry = mysql_query("create procedure user() insert into model values(45,'SUV','BMW'");
echo "Stored Procedure created.";
mysql_query($qry,$con);
 
print "<h2>MySQL: Calling Stored procedure</h2>";
 
$res = mysql_query("call user()");
 
while($row=mysql_fetch_array($res))
{
 echo $row['model_id'] ." ". $row['model_name'] . " " . $row['manufacturer_name'];
  echo "<br/>";
}
mysql_close($con);
?>