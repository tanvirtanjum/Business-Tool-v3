<?php
require_once '../DB Handler/salesDB.php';
function showTable()
{
	$table=loadSaleTable();
	
	foreach($table as $data)
	{
		echo "<tr>";
		echo "<td align='middle'>".$data["SLID"]."</td>";
		echo "<td align='middle'>".$data["PID"]."</td>";
		echo "<td align='middle'>".$data["QUANT"]."</td>";
		echo "<td align='middle'>".$data["OB_AMMOUNT"]."</td>";
		echo "<td align='middle'>".$data["PROFIT"]."</td>";
		echo "<td>".$data["C_NAME"]."</td>";
		echo "<td align='middle'>".$data["C_MOB"]."</td>";
		echo "<td align='middle'>".$data["SOLD_BY"]."</td>";
		echo "<td align='middle'>".$data["Sell_SDate"]."</td>";
		echo "</tr>";
	}
}

if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
	
	$srchProdTF="";
	$srchProdTFerror="";
	
	if(isset($_POST["logoutBTN"]))
	{
		setcookie("uid",$uid,time()-600);
		setcookie("sid",$sid,time()-600);
		header("Location:index.php");
	}
	
	if(isset($_POST["gohomebtn"]))
	{
		setcookie("uid",$uid,time()+600);
		setcookie("sid",$sid,time()+600);
		header("Location:home.php");
	}
	
	if(isset($_POST["srchBTN"]))
	{
		if(empty($_POST["srchProdTF"]))
		{
			$srchProdTFerror="*";
		}
		
		else
		{
			$srchProdTF=$_POST["srchProdTF"];
		}
	
	}
}

else
{
	header("Location:index.php");
}	
?>