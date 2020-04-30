<?php
require_once 'DBC.php';
$key1 = $_GET['key1'];
$key2 = $_GET['key2'];
$table=null;

$query ="SELECT * FROM `employee` WHERE `E_NAME` LIKE '%$key1%' AND `DID` LIKE '%$key2%';";

$table=get($query);
if($table != null)
{	
	foreach($table as $data)
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
}

else
{
	echo "<tr> <td colspan='8' align='middle'> NO DATA FOUND </td> </tr>";
}
?>