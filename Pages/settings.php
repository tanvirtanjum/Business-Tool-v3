<?php
include '../Page Controllers/settingsController.php';
?>

<html>
	<head>
		<title> Change Password </title>
		<link rel="stylesheet" type="text/css" href="CSS/settings.css">
	</head>
	<body class="body">
		<div class="form">
			<form method="post" action="">
				<table>
					<tr valign="middle" style="height: 40px;">
						<td align="right"> <p class="text"> Old Password: </p> </td>
						<td align="left"> <input type="password" class="tf" name="oldpassPF" id="oldpassTF" value="<?php echo "$oldpassPF";?>"> 
						<br> <span style="color:red; font-size:15px;"> <?php echo $msg1; ?> <?php echo "$oldpassPFerror"; ?> </span></td>
						<td align="left"> <input type="checkbox" class="" name="oldshowpassCB" onClick="showOldPass()" value=""> Show  </td>
					</tr>
					
					<tr valign="middle" style="height: 40px;">
						<td align="right"> <p class="text"> New Password: </p> </td>
						<td align="left"> <input type="password" class="tf" name="newpassPF" id="newpassTF" value="<?php echo "$newpassPF";?>"> 
						<br> <span style="color:red; font-size:15px;"> <?php echo $msg2; ?> <?php echo "$newpassPFerror"; ?> </span></td>
						<td align="left"> <input type="checkbox" class="" name="newshowpassCB" onClick="showNewPass()" value=""> Show  </td>
					</tr>
					
					<tr valign="middle" style="height: 40px;">
						<td align="right"> <p class="text"> Confirm Password: </p> </td>
						<td align="left"> <input type="password" class="tf" name="confirmpassPF" id="confirmpassTF" value="<?php echo "$confirmpassPF";?>"> 
						<br> <span style="color:red; font-size:15px;"> <?php echo $msg3.$msg4; ?> <?php echo "$confirmpassPFerror"; ?> </span></td>
						<td align="left"> <input type="checkbox" class="" name="confirmshowpassCB" onClick="showConfirmPass()" value=""> Show  </td>
					</tr>
					<tr>
						<td colspan="3" align="center" valign="middle" style="width: 40px;" > <marquee class="marquee"><p>REQUIREMENT/'S': Password length must be minimum four (4). Keep your password secured.</p></marquee> </td>
					</tr>
					
					<tr>
						<td colspan="3" align="center"  valign="middle" style="height: 50px;"> 
							<input type="submit" class="proceed" name="ProceedBTN" value="Proceed"> 
							<input type="submit" class="proceed" name="gohomebtn" value="Home">
						</td>
					</tr>

					<tr>
						<td colspan="3" align="center"  valign="middle" style="height: 50px;"> <input type="submit" class="logout" name="logoutBTN" value="Logout"> </td>
					</tr>
				</table>
			</form>	
		</div>
	</body>
</html>