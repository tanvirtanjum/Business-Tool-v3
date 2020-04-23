<?php
require_once '../DB Handler/productDB.php';

function showTable()
{
	$table=loadTable();
	
	foreach($table as $data)
	{
		echo "<tr>";
		echo "<td align='middle'>".$data["PID"]."</td>";
		echo "<td>".$data["P_NAME"]."</td>";
		echo "<td align='middle'>".$data["TYPE"]."</td>";
		echo "<td align='middle'>".$data["QUANTITY"]."</td>";
		echo "<td align='middle'>".$data["BUY_PRICE"]."</td>";
		echo "<td align='middle'>".$data["SELL_PRICE"]."</td>";
		echo "<td align='middle'>".$data["MOD_BY"]."</td>";
		echo "<td align='middle'>".$data["Add_PDate"]."</td>";
		echo "</tr>";
	}
}

if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
	$pidTF="";
	$pnameTF="";
	
	$srchProdTF="";
	
	$quantTF="";
	
	$priceTF="";
	
	$cusnameTF="";
	
	$cusmobTF="";
	
	$sidTF="";
	
	
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
	
	if(isset($_POST["goBTN"]))
	{
		setcookie("uid",$uid,time()+600);
		setcookie("sid",$sid,time()+600);
		header("Location:salesHistory.php");
	}
	
	if(isset($_POST["srchBTN"]))
	{
		if(empty($_POST["srchProdTF"]))
		{
		
		}
		
		else
		{
			$srchProdTF=$_POST["srchProdTF"];
		}
	
	}
	
	if(isset($_POST["sellBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
		}
		
		if(empty($_POST["pnameTF"]))
		{
			
		}
		
		else
		{
			$pnameTF=$_POST["pnameTF"];
		}
		
		if(empty($_POST["quantTF"]))
		{
			
		}
		
		else
		{
			
		$quantTF =$_POST["quantTF"];
			 if(!is_numeric($quantTF)) 
			{
				
			} 	
		}
		
		if(empty($_POST["priceTF"]))
		{
			
		}
		
		else
		{
			
			$priceTF =$_POST["priceTF"];
			if(!is_numeric($priceTF)) 
			{
				
			} 	
		}
		
		if(empty($_POST["cusnameTF"]))
		{
			
		}
		
		else
		{
			$cusnameTF=$_POST["cusnameTF"];
		}
		
		
		if(empty($_POST["cusmobTF"]))
		{
			
		}
		
		else
		{
			
		$cusmobTF =$_POST["cusmobTF"];
			 if(!is_numeric($cusmobTF)) 
			{
				
			} 	
		}
		
		if(empty($_POST["sidTF"]))
		{
			
		}
		
		else
		{
			$sidTF=$_POST["sidTF"];
		}

	}
}

else
{
	header("Location:index.php");
}	
?>