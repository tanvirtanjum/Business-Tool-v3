<?php
require_once '../DB Handler/loginDB.php';

$pass="";
$LID="";
$check=null;

if(isset($_POST['send']))
{
	if(!empty($_POST['UID']))
	{
		$LID=$_POST['UID'];
		$NEWPASS=rand(1111,9999);
		resetPASS($LID,md5($NEWPASS));
		$pass=$NEWPASS;
	}	
}
?>

