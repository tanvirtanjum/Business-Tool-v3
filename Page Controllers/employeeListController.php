<?php
require_once '../DB Handler/employeeDB.php';
require_once '../DB Handler/loginDB.php';

function showTable()
{
	$table=loadTable();
	
	foreach($table as $data)
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
if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
	$srchEmpTF="";
	$srchEmpTFerror="";
	
	$eidTF="";
	$eidTFerror="";
	$enameTF="";
	$enameTFerror="";
	$design="";
	$o1= false;
	$o2= false;
	$o3= false;
	$o4= false;
	$designerror="";
	
	$salTF="";
	$salTFerror="";
	
	$mobTF="";
	$mobTFerror="";
	
	$addedbyTF="";
	
	$jdTF="";
	
	$msg = "";
	$msg1="";
	$DONE = false;
	
	$insertError=false;
	$srchvalid= false;
	
	echo "<script type='text/javascript'> var alertMSG=''; </script>";
	
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
		if(empty($_POST["srchEmpTF"]))
		{
			$srchEmpTFerror="*";
		}
		
		else
		{
			$srchEmpTF=$_POST["srchEmpTF"];
			
			$srchdata = loadEmployee($srchEmpTF);
			
			if(sizeof($srchdata)!=1)
			{
				$srchvalid=false;
				$srchEmpTF="Try Again.";
			}
			
			else
			{
				$srchvalid=true;
				$srchEmpTF="";
				$eidTF=$srchdata[0]["EmpID"];
				$enameTF=$srchdata[0]["E_NAME"];
				$design=$srchdata[0]["DID"];
				if($design=="1")
				{
					$o2=true;
				}
				
				if($design=="2")
				{
					$o3=true;
				}
				
				if($design=="3")
				{
					$o4=true;
				}		
				$salTF=$srchdata[0]["SAL"];				
				$mobTF=$srchdata[0]["E_MOB"];	
				$jdTF=$srchdata[0]["JOIN_DATE"];
				$addedbyTF=$srchdata[0]["ADDED_BY"];
			}
			
		}
	}
	
	if(isset($_POST["deleteBTN"]))
	{
	}
	
	if(isset($_POST["updateBTN"]))
	{
	}
	
	if(isset($_POST["insertBTN"]))
	{
		$insertError=false;
		
		if($sid == '1')
		{
			if(empty($_POST["eidTF"]))
			{
				$eidTFerror="*";
				$insertError=true;			
			}
			
			else
			{
				$eidTF=$_POST["eidTF"];
				
				$insertdata=loadEmployee($eidTF);
				if($insertdata != null)
				{
					$insertError=true;
					$DONE=true;
					echo "<script type='text/javascript'> alertMSG='User Exists'; </script>";
				}
			}
			
			if(empty($_POST["enameTF"]))
			{
				$enameTFerror="*";
				$insertError=true;
			}
			
			else
			{
				$enameTF=$_POST["enameTF"];
			}
			
			if(isset($_POST["design"]))
			{
				$design=$_POST["design"];
				if($design == "4")
				{
					$o1=true;
					$designerror="*";
					$design="";
					$insertError=true;
				}
				
				else
				{
					$design=$_POST["design"];
					
					if($design=="1")
					{
						$o2=true;
					}
					
					if($design=="2")
					{
						$o3=true;
					}
					
					if($design=="3")
					{
						$o4=true;
					}
				}			
			}
			
			else
			{
				$designerror="*";
				$insertError=true;
			}
			
			if(empty($_POST["salTF"]))
			{
				$salTFerror="*";
				$insertError=true;
			}
			
			else
			{
				
				$salTF =$_POST["salTF"];
				if(!is_numeric($salTF)) 
				{
					$msg = '<span> Not valid</span>';
					$insertError=true;
				} 
				
			}
			
			if(empty($_POST["mobTF"]))
			{
				$mobTFerror="*";
				$insertError=true;
			}
			
			else
			{
				
				$mobTF =$_POST["mobTF"];
				 if(!is_numeric($mobTF)) 
				{
					$msg1 = '<span> Not valid</span>';
					$insertError=true;
				} 
					
			}
			
			if(!$insertError)
			{
				$DONE=true;
				$pass = rand(1234,9999);
				echo "<script type='text/javascript'> alertMSG= 'Password: ".$pass."'; </script>";
				insertLogin($eidTF, $design, $pass);
				insertEmployee($eidTF, $enameTF, $design, $salTF, $mobTF, $uid);
			}
		}
		
		else if($sid=='2' || $sid=='3')
		{
			echo "<script type='text/javascript'> alertMSG='Not Allowed To Perform This Task.'; </script>";
		}
	
	}
	
	if(isset($_POST["refreshBTN"]))
	{
		$uid = $_COOKIE['uid'];
		$sid = $_COOKIE['sid'];
		
		$srchEmpTF="";
		$srchEmpTFerror="";
		
		$eidTF="";
		$eidTFerror="";
		$enameTF="";
		$enameTFerror="";
		$design="";
		$o1= false;
		$o2= false;
		$o3= false;
		$o4= false;
		$designerror="";
		
		$salTF="";
		$salTFerror="";
		
		$mobTF="";
		$mobTFerror="";
		
		$addedbyTF="";
		
		$jdTF="";
		
		$msg = "";
		$msg1="";
		$DONE = false;
		
		$insertError=false;
		$srchvalid= false;
		
		echo "<script type='text/javascript'> var alertMSG=''; </script>";
	}
}

else
{
	header("Location:index.php");
}	

?>

<script type='text/javascript'>
function PASS() 
{
	alert(alertMSG);
}
</script>