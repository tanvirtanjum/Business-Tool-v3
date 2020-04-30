<?php
require_once '../DB Handler/employeeDB.php';
require_once '../DB Handler/loginDB.php';

function showTable()
{
	$table=loadTable();
	
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
?>