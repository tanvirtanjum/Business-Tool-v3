<?php
require_once '../DB Handler/loginDB.php';

$uid="";
$err_uid="";
$pass="";
$err_pass="";
$err_invalid="";

$has_error=false;
if(!isset($_COOKIE['uid']) && !isset($_COOKIE['sid']))
{
	if(isset($_POST['Login']))
	{
		if(!empty($_POST['uidTF']))
		{
			$uid=$_POST['uidTF'];
		}
		else
		{
			$err_uid="*User ID Required";
			$has_error=true;
		}
		
		if(!empty($_POST['passTF']))
		{
			$pass=$_POST['passTF'];
		}
		else
		{
			$err_pass="*Password Required";
			$has_error=true;
		}
		
		if(!$has_error)
		{
			$result=getLogin($uid,$pass);
			
			if(sizeof($result) > 0)
			{
				setcookie("uid",$result[0]["LID"],time()+600);
				setcookie("sid",$result[0]["SID"],time()+600);
				header("Location:home.php");
			}
			
			else
			{
				$err_invalid="Invalid Username Or Password";
			}
		}
	}
}

else
{
	header("Location:home.php");
}
?>

<script>
	function showPass() 
	{
		var passTF = document.getElementById("passTF");
		if (passTF.type === "password") 
		{
			passTF.type = "text";
		} 
		
		else 
		{
			passTF.type = "password";
		}
	}
</script>