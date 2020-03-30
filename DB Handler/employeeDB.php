<?php
require_once 'DBC.php';

function loadTable()
{
	$result=array();
	$result=null;
	try
	{
		$query="SELECT * FROM `employee` WHERE `EmpID` != 'superuser' ORDER BY `DID`,`EmpID`;";
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
?>