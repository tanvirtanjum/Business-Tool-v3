<?php
require_once '../DB Handler/loginDB.php';
require_once '../DB Handler/employeeDB.php';

$recover=false;
$NEWPASS="";
$info="";
$userINFO=null;

$LID="";
$UNAME="";
$UDEGN="";
$SID="";
$UCON="";
$USAL="";

if(isset($_POST['send']))
{
	if(!empty($_POST['UID']))
	{
		$LID=$_POST['UID'];
		$userINFO=loadEmployee($LID);
		if($userINFO != null)
		{
			$LID=$_POST['UID'];
			$recover=true;
		}
		else
		{
			$LID="NO SUCH USER";
			$recover=false;
		}
	}
	else
	{
		$recover=false;
	}
	
	if(!empty($_POST['UNAME']))
	{
		$UNAME=$_POST['UNAME'];
		$recover=true;
	}
	else
	{
		$recover=false;
	}
	
	if(!empty($_POST['UDEGN']))
	{
		$UDEGN=strtoupper($_POST['UDEGN']);
		if($UDEGN == "ADMIN")
		{
			$SID="1";
			$recover=true;
		}
		else if($UDEGN == "MANAGER")
		{
			$SID="2";
			$recover=true;
		}
		else if($UDEGN == "SALESMAN")
		{
			$SID="3";
			$recover=true;
		}
		else
		{
			$SID="4";
			$recover=true;
		}
		$recover=true;
	}
	else
	{
		$recover=false;
	}
	
	if(!empty($_POST['UCON']))
	{
		$UCON=$_POST['UCON'];
		$recover=true;
	}
	else
	{
		$recover=false;
	}
	
	if(!empty($_POST['USAL']))
	{
		$USAL=$_POST['USAL'];
		$recover=true;
	}
	else
	{
		$recover=false;
	}
	
	
	if($recover == true)
	{				
		if($LID==$userINFO[0]["EmpID"] && strtoupper($UNAME)==$userINFO[0]["E_NAME"] && $SID==$userINFO[0]["DID"] && $UCON==$userINFO[0]["E_MOB"] && $USAL==$userINFO[0]["SAL"])
		{
			$NEWPASS=rand(1111,9999);
			resetPASS($LID,md5($NEWPASS));
			$info="Change password on next login and stay secured.";
		}
		
		else
		{
			$info="Information Mismatched. Try again or contact with ADMIN.";
		}
	}	
}
?>

