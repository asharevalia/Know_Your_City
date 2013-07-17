<?php
include('connection.php');
$result = mysql_query('SELECT myInputName FROM prefer') or die('Invalid query: ' . mysql_error());
$row_first = mysql_fetch_array($result);
mysql_data_seek($result , (mysql_num_rows($result)-1));

$row_last =  mysql_fetch_array($result);
//echo $result;
echo $s=$row_last['myInputName'];

echo $s1=$_REQUEST['type'];
$r=mysql_query("SELECT *
FROM tourguide
WHERE State = '$s'
AND TYPE = '$s1'");


while($row=mysql_fetch_array($r))
{
	echo "Agency Name  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :  ".$b=$row['Name_of_Agency']."<br>";


echo  $row['Address']."<br>";

echo  $row['Region']."<br>";
echo  $row['State']."<br>";
echo  $row['City']."<br>";
echo  $row['Contact Person']."<br>";
echo  $row['TYPE']."<br>";
echo  $row['Phone']."<br>";
echo  $row['Email']."<br>";
echo  $row['Fax']."<br>";

}



?>
