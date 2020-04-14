<?php
require_once 'DBC.php';

//$key = $_GET['key'];

function loadTableByName()
{
	$result=array();
	$result=null;
	try
	{
		$query="SELECT * FROM `employee` WHERE `E_NAME` LIKE %$key%;";
		$result=get($query);
		return $result;
		
		if($result != null)
		{
			foreach($result as $data)
			{
				echo "<tr>";
				echo "<td>".$data["EmpID"]."</td>";
				echo "<td>".$data["E_NAME"]."</td>";
				echo "<td>".$data["DID"]."</td>";
				echo "<td>".$data["SAL"]."</td>";
				echo "<td>".$data["E_MOB"]."</td>";
				echo "<td>".$data["JOIN_DATE"]."</td>";
				echo "<td>".$data["ADDED_BY"]."</td>";
				echo "</tr>";		
			}
		}
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}
}

function loadTable()
{
	$result=array();
	$result=null;
	try
	{
		$query="SELECT * FROM `employee` WHERE `EmpID` != 'superuser' AND `DID` != '4' ORDER BY `DID`,`EmpID`;";
		$result=get($query);
		return $result;
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}
}

function loadEmployee($EmpID)
{
	$query="SELECT * FROM `employee` WHERE `EmpID`='".$EmpID."';";
	$result=get($query);
	return $result;
}

function insertEmployee($EmpID, $name, $did, $sal, $mob, $addedby)
{
	try
	{
		$query = "INSERT INTO `employee`(`EmpID`, `E_NAME`, `DID`, `SAL`, `E_MOB`, `JOIN_DATE`, `ADDED_BY`) VALUES('".$EmpID."','".$name."','".$did."','".$sal."','".$mob."',current_timestamp(),'".$addedby."');";

		execute($query);
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
	}
}

function updateEmployee($EmpID, $name, $did, $sal, $mob)
{
	try
	{
		$query = "UPDATE `employee` SET `E_NAME`= '$name',`DID`= '$did',`SAL`= '$sal',`E_MOB`= '$mob' WHERE `EmpID` = '$EmpID';";

		execute($query);
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
	}
}
?>