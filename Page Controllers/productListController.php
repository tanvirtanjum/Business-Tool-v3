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
	
	$srchProdTF="";
	$srchProdTFerror="";
	
	$pidTF="";
	$pidTFerror="";
	$pnameTF="";
	$pnameTFerror="";

	$type="";
	$o1= false;
	$o2= false;
	$o3= false;
	$o4= false;
	$o5= false;
	$o6= false;
	$o7= false;
	$o8= false;
	$o9= false;
	$o10= false;
	$o11= false;
	$o12= false;
	$typeerror="";
	$quantTF="";
	$quantTFerror="";
	$buyPriceTF="";
	$buyPriceTFerror="";
	$sellPriceTF="";
	$sellPriceTFerror="";
	
	$insertERR=true;
	
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
			$srchProdTFerror="*Product ID required.";
		}
		
		else
		{
			$srchProdTF=$_POST["srchProdTF"];
		}
	}
	
	if(isset($_POST["insertBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			$pidTFerror="*";
			$insertERR=true;
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
			$insertERR=false;
		}
		
		if(empty($_POST["pnameTF"]))
		{
			$pnameTFerror="*";
			$insertERR=true;
		}
		
		else
		{
			$pnameTF=$_POST["pnameTF"];
			$insertERR=false;
		}
		
		if(isset($_POST["type"]))
		{
			$type=$_POST["type"];
			if($type == "SELECT")
			{
				$o1=true;
				$typeerror="*";
				$type="";
				$insertERR=true;
			}
			
			else
			{
				$type=$_POST["type"];
				
				if($type=="LAPTOP")
				{
					$o2=true;
				}
				
				if($type=="MONITOR")
				{
					$o3=true;
				}
				
				if($type=="MOUSE")
				{
					$o4=true;
				}
				
				if($type=="SPEAKER")
				{
					$o5=true;
				}
				
				if($type=="RAM")
				{
					$o6=true;
				}
				
				if($type=="ROM")
				{
					$o7=true;
				}
				
				if($type=="PROCCESOR")
				{
					$o8=true;
				}
				
				if($type=="PORTABLE HDD/SSD")
				{
					$o9=true;
				}
				
				if($type=="KEYBOARD")
				{
					$o10=true;
				}
				
				if($type=="PRINTER")
				{
					$o11=true;
				}
				
				if($type=="SOFTWARE")
				{
					$o12=true;
				}
				$insertERR=false;
			}			
		}
		
		else
		{
			$typeerror="*";
			$insertERR=true;
		}
		
		if(empty($_POST['quantTF']))
		{
			$quantTFerror="*";
			$insertERR=true;
		}
		else
		{
			if(is_numeric ($_POST['quantTF'])==true && strpos( $_POST['quantTF'], "." ) == false )
			{
				$quantTF=$_POST['quantTF'];
				$quantTFerror="";
				$insertERR=false;
			}
			
			else
			{
				$quantTF="";
				$quantTFerror="Invalid";
				$insertERR=true;
			}
		}
		
		if(empty($_POST['buyPriceTF']))
		{
			$buyPriceTFerror="*";
			$insertERR=true;
		}
		else
		{
			if(is_numeric ($_POST['buyPriceTF'])==true)
			{
				$buyPriceTF=$_POST['buyPriceTF'];
				$buyPriceTFerror="";
				if($buyPriceTF != 0 && $buyPriceTF >= 1)
				{
					$buyPriceTF=$_POST['buyPriceTF'];
					$buyPriceTFerror="";
					$insertERR=false;
				}
				
				else
				{
					$buyPriceTF="";
					$buyPriceTFerror="Invalid";
					$insertERR=true;
				}
			}
			
			else
			{
				$buyPriceTF="";
				$buyPriceTFerror="Invalid";
				$insertERR=true;
			}
		}
		
		if(empty($_POST['sellPriceTF']))
		{
			$sellPriceTFerror="*";
			$insertERR=true;
		}
		else
		{
			if(is_numeric ($_POST['sellPriceTF'])==true)
			{
				$sellPriceTF=$_POST['sellPriceTF'];
				$sellPriceTFerror="";
				if(!empty($_POST['buyPriceTF']) && $sellPriceTF > $buyPriceTF )
				{
					$sellPriceTF=$_POST['sellPriceTF'];
					$sellPriceTFerror="";
					$insertERR=false;
				}
				
				else
				{
					$sellPriceTF="";
					$sellPriceTFerror="Invalid";
					$insertERR=true;
				}
			}
			
			else
			{
				$sellPriceTF="";
				$sellPriceTFerror="Invalid";
				$insertERR=true;
			}
		}
		
		if(!$insertERR)
		{
			insertEmployee($pidTF, $pnameTF, $type, $quantTF, $buyPriceTF, $sellPriceTF, $uid);
		}
	}
	
	if(isset($_POST["updateBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			$pidTFerror="*";
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
		}
		
		if(empty($_POST["pnameTF"]))
		{
			$pnameTFerror="*";
		}
		
		else
		{
			$pnameTF=$_POST["pnameTF"];
		}
		
		if(isset($_POST["type"]))
		{
			$type=$_POST["type"];
			if($type == "SELECT")
			{
				$o1=true;
				$typeerror="*";
				$type="";
			}
			
			else
			{
				$type=$_POST["type"];
				
				if($type=="LAPTOP")
				{
					$o2=true;
				}
				
				if($type=="MONITOR")
				{
					$o3=true;
				}
				
				if($type=="MOUSE")
				{
					$o4=true;
				}
				
				if($type=="SPEAKER")
				{
					$o5=true;
				}
				
				if($type=="RAM")
				{
					$o6=true;
				}
				
				if($type=="ROM")
				{
					$o7=true;
				}
				
				if($type=="PROCCESOR")
				{
					$o8=true;
				}
				
				if($type=="PORTABLE HDD/SSD")
				{
					$o9=true;
				}
				
				if($type=="KEYBOARD")
				{
					$o10=true;
				}
				
				if($type=="PRINTER")
				{
					$o11=true;
				}
				
				if($type=="SOFTWARE")
				{
					$o12=true;
				}
			}			
		}
		
		else
		{
			$typeerror="*";
		}
		
		if(empty($_POST['quantTF']))
		{
			$quantTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['quantTF'])==true && strpos( $_POST['quantTF'], "." ) == false )
			{
				$quantTF=$_POST['quantTF'];
				$quantTFerror="";
			}
			
			else
			{
				$quantTF="";
				$quantTFerror="Invalid";
			}
		}
		
		if(empty($_POST['buyPriceTF']))
		{
			$buyPriceTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['buyPriceTF'])==true && strpos( $_POST['buyPriceTF'], "." ) == false )
			{
				$buyPriceTF=$_POST['buyPriceTF'];
				$buyPriceTFerror="";
				if($buyPriceTF != 0 && $buyPriceTF >= 1)
				{
					$buyPriceTF=$_POST['buyPriceTF'];
					$buyPriceTFerror="";
				}
				
				else
				{
					$buyPriceTF="";
					$buyPriceTFerror="Invalid";
				}
			}
			
			else
			{
				$buyPriceTF="";
				$buyPriceTFerror="Invalid";
			}
		}
		
		if(empty($_POST['sellPriceTF']))
		{
			$sellPriceTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['sellPriceTF'])==true && strpos( $_POST['sellPriceTF'], "." ) == false )
			{
				$sellPriceTF=$_POST['sellPriceTF'];
				$sellPriceTFerror="";
				if(!empty($_POST['buyPriceTF']) && $sellPriceTF > $buyPriceTF )
				{
					$sellPriceTF=$_POST['sellPriceTF'];
					$sellPriceTFerror="";
				}
				
				else
				{
					$sellPriceTF="";
					$sellPriceTFerror="Invalid";
				}
			}
			
			else
			{
				$sellPriceTF="";
				$sellPriceTFerror="Invalid";
			}
		}
	}
	
	if(isset($_POST["deleteBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			$pidTFerror="*";
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
		}
	}
	
	if(isset($_POST["refreshBTN"]))
	{
		$srchProdTF="";
		$srchProdTFerror="";
		
		$pidTF="";
		$pidTFerror="";
		$pnameTF="";
		$pnameTFerror="";

		$type="";
		$o1= false;
		$o2= false;
		$o3= false;
		$o4= false;
		$o5= false;
		$o6= false;
		$o7= false;
		$o8= false;
		$o9= false;
		$o10= false;
		$o11= false;
		$o12= false;
		$typeerror="";
		$quantTF="";
		$quantTFerror="";
		$buyPriceTF="";
		$buyPriceTFerror="";
		$sellPriceTF="";
		$sellPriceTFerror="";
	}
}

else
{
	header("Location:index.php");
}	
?>