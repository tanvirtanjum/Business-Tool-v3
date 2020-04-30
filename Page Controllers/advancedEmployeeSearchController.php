<?php
require_once '../DB Handler/employeeDB.php';
if((!isset($_GET['uid']) && !isset($_GET['sid'])) && ($_GET['sid'] != 1 || $_GET['sid'] != 2))
{
	header("Location:index.php");
}

else
{
	$uid = $_GET['uid'];
	$sid = $_GET['sid'];
	
	function showTable()
	{
		$table=loadAllTable();
		
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
}
?>