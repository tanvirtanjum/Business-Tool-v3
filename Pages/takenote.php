<?php
if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
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
}

else
{
	header("Location:index.php");
}	
?>
<html>
	<head> 
		<title> Take Note</title>
		<link rel="stylesheet" type="text/css" href="CSS/takenote.css">
	</head>
	
	<body>
		<div class="container">
			<form action="" method="post">
				<div class="floatRightTop">
					<table name="download&logout">
						<tr>
							<td><input type="text" class="tf" name="noteIDTF" placeholder="Note ID" value=""></td>
							<td><input type="submit" class="downloadbtn" name="downloadBTN" value="Download"></td>
							<td style="width:50%;"></td>
							<td><input type="submit" class="downloadbtn" name="gohomebtn" value="Home"></td>
							<td class="col"></td>
							<td><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
						</tr>
					</table>
					<div class="scrollit">
						<table name="noteTable" id="noteTable">
							<tr>
								<th>Note ID</th>
								<th>Note Name</th>
								<th>Owner ID</th>
							</tr>
							
							<tr>
								<td>1</td>
								<td>Contact</td>
								<td>BT-01AD</td>
							</tr>
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="upload">
						<tr>
							<td>
								<input type="text" class="tf" name="noteNameTF" placeholder="Note Name" value="">
								<input type="submit" class="uploadbtn" name="downloadBTN" value="Upload">
							</td>
						</tr>
					
						<tr>
							<td>
								<textarea name="noteTA" class="noteTA"></textarea>
							</td> 
						</tr>
					</table>
				</div>
				
				<table name="buttons" class="btnTB">
					<tr>
						<td> <input type="submit" class="btn" name="refreshBTN" value="REFRESH"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="updateBTN" value="UPDATE"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="deleteBTN" value="DELETE"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="printBTN" value="PRINT"> </td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>	
		
