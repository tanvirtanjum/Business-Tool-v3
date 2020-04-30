<?php
$key = $_GET['key'];

$serverName="localhost";
$userName="root";
$password="";
$dbName="btweb";

try
{
	$conn = mysqli_connect( $serverName, $userName, $password, $dbName);
	$query ="SELECT * FROM `employee` WHERE `E_NAME` LIKE '%$key%';";
	$result=mysqli_query($conn,$query);

	while($data = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td align='middle'>".$data["EmpID"]."</td>";
		echo "<td>".$data["E_NAME"]."</td>";
		echo "<td align='middle'>".$data["DID"]."</td>";
		echo "<td align='middle'>".$data["SAL"]."</td>";
		echo "<td align='middle'>".$data["E_MOB"]."</td>";
		echo "<td align='middle'>".$data["E_MAIL"]."</td>";
		echo "<td align='middle'>".$data["JOIN_DATE"]."</td>";
		echo "<td align='middle'>".$data["ADDED_BY"]."</td>";
		echo "</tr>";															
	}
	mysqli_close($conn);
}
catch (Exception $e)
{
	throw $e->getMessage();
	return $result;
}

?>