<?php
require_once 'DBC.php';

//$key = $_GET['key'];

function loadTableByType()
{
	$result=array();
	$result=null;
	try
	{
		$query="SELECT * FROM `product` WHERE `TYPE` LIKE %$key%;";
		$result=get($query);
		return $result;
		
		if($result != null)
		{
			foreach($result as $data)
			{
				echo "<tr>";
				echo "<td>".$data["PID"]."</td>";
				echo "<td>".$data["P_NAME"]."</td>";
				echo "<td>".$data["TYPE"]."</td>";
				echo "<td>".$data["QUANTITY"]."</td>";
				echo "<td>".$data["BUY_PRICE"]."</td>";
				echo "<td>".$data["SELL_PRICE"]."</td>";
				echo "<td>".$data["MOD_BY"]."</td>";
				echo "<td>".$data["Add_PDate"]."</td>";
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
		$query="SELECT * FROM `product` WHERE `AVAILABILITY` = 'AVAILABLE' ORDER BY `TYPE`,`MOD_BY`;";
		$result=get($query);
		return $result;
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}
}

function loadProduct($PID)
{
	$result=array();
	$result=null;
	try
	{
		$query="SELECT * FROM `product` WHERE `PID`='".$PID."';";
		$result=get($query);
		return $result;
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}	
}

function insertProduct($PID, $name, $type, $quant, $buy, $sell, $mod_by)
{
	try
	{
		$query = "INSERT INTO `product`(`PID`, `P_NAME`, `TYPE`, `AVAILABILITY`, `QUANTITY`, `BUY_PRICE`, `SELL_PRICE`, `MOD_BY`, `Add_PDate`) VALUES('".$PID."','".strtoupper($name)."','".$type."', 'AVAILABLE','".$quant."','".$buy."','".$sell."','".$mod_by."', current_timestamp());";

		execute($query);
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
	}
}

function updateProduct($EmpID, $name, $did, $sal, $mob, $E_MAIL)
{
	try
	{
		$query = "UPDATE `employee` SET `E_NAME`= '".strtoupper($name)."',`DID`= '$did',`SAL`= '$sal',`E_MOB`= '$mob', `E_MAIL`='".strtolower($E_MAIL)."' WHERE `EmpID` = '$EmpID';";

		execute($query);
	}
	
	catch (Exception $e)
	{
		throw $e->getMessage();
	}
}
?>