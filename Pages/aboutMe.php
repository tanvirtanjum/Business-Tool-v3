<?php
include '../Page Controllers/aboutMeController.php';
?>

<html>
	<head>
		<title> About Me </title>
		<link rel="stylesheet" type="text/css" href="CSS/aboutme.css">
	</head>
	<body class="body">
		<div class="form">
			<form method="post" action="">
				<table>
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text"> ID: </p> </td>
						<td> <input type="text" class="tf" name="empidTF" value="<?php echo "$EmpID"; ?>"> </td>
					</tr>
					
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text"> Name: </p> </td>
						<td> <input type="text" class="tf" name="empnameTF" value="<?php echo "$Name"; ?>"> </td>
					</tr>
					
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text"> Designation: </p> </td>
						<td> <input type="text" class="tf" name="dignTF" value="<?php if($Design == 1){echo "ADMIN";} else if($Design == 2){echo "MANAGER";} else if($Design == 3){echo "SALESMAN";} else{} ?>"> </td>
					</tr>
					
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text"> Salary: </p> </td>
						<td> <input type="text" class="tf" name="salTF" value="<?php echo "$Salary"; ?>"> </td>
					</tr>
					
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text">Mobile No.: </p> </td>
						<td> <input type="text" class="tf" name="mobTF" value="<?php echo "$Mob"; ?>"> </td>
					</tr>
					
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text"> Join Date:</p> </td>
						<td> <input type="text" class="tf" name="joindateTF" value="<?php echo "$Jdate"; ?>"> </td>
					</tr>
					
					<tr align="right" valign="middle" style="height: 40px;">
						<td> <p class="text"> Added By: </p> </td>
						<td> <input type="text" class="tf" name="addedbyTF" value="<?php echo "$Addedby"; ?>"> </td>
					</tr>
					
					<tr>
						<td colspan="2" align="center" valign="middle" style="height: 50px;"> <input type="submit" class="settings" name="settingBTN" value="Settings"> </td>
					</tr>
					
					<tr>
						<td colspan="2" align="center" valign="middle" style="height: 50px;"><input type="submit" class="settings" name="gohomebtn" value="Home"></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"  valign="middle" style="height: 50px;"> <input type="submit" class="logout" name="logoutBTN" value="Logout"> </td>
					</tr>
				</table>
			</form>	
		</div>
	</body>
</html>