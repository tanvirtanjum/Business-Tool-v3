<?php
require_once '../DB Handler/employeeDB.php';

$EmpID="";
$Name="";
$Design="";
$Salary="";
$Mob="";
$Jdate="";
$Addedby="";

if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
	$data=loadEmployee($uid);
	
	$EmpID=$data[0]["EmpID"];
	$Name=$data[0]["E_NAME"];
	$Design=$data[0]["DID"];
	$Salary=$data[0]["SAL"];
	$Mob=$data[0]["E_MOB"];
	$Jdate=$data[0]["JOIN_DATE"];
	$Addedby=$data[0]["ADDED_BY"];
	
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
	
	if(isset($_POST["settingBTN"]))
	{
		setcookie("uid",$uid,time()+600);
		setcookie("sid",$sid,time()+600);
		header("Location:settings.php");
	}
}

else
{
	header("Location:index.php");
}	
?>