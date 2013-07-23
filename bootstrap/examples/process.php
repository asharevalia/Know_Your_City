<?php
//echo $at=$_POST['hotelname'];
$detail=$_POST['Name_of_Agency'];
include('connection.php');
$q=mysql_query("SELECT * FROM tourguide WHERE Name_of_Agency='$detail'");
while($row=mysql_fetch_array($q))
{
	echo "<th>Name Of Agency:</th> <td>".$b=$row['Name_of_Agency']."</td></tr>";
	
echo "<th>Address:</th>".$b=$row['Address']."</td></tr>";
	
echo "<th>PHONE:</th> <td>".$b=$row['Phone']."</td></tr>";
	
echo "<th>Email ID:</th> <td>".$b=$row['Email']."</td></tr>";
	
echo "<th>FAX:</th> <td>".$b=$row['Fax']."</td></tr>";
	
echo "<th>STATE:</th> <td>".$b=$row['State']."</td></tr>";
        
echo  "<th>Contact Person:</th> <td>".$b=$row['Contact_Person']."</td></tr>";
	
echo "<th>Hotel:</th> <td>".$b=$row['TYPE']."</td></tr>";
	
        

}
?>

