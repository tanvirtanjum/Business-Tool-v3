<?php
include '../Page Controllers/recoverPasswordController.php';
?>
<html>
	<head>
		<title> Recover Password </title>
		<script src="../Page Controllers/javascript/recoverPassJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/recoverPassword.css">
	</head>
	
	<body class="body">
		<div class="form">
			<form action="" method="post">
				<h1 align="center"> Recover Password </h1>
				<table align="center" valign="middle">
					<tr>
						<td> <span class="text"> User ID. </span> </td>
						<td> <input type="text" name="UID" class="tf" placeholder="Official ID" value="<?php echo $LID; ?>" required> </td>
					</tr>
					
					<tr>
						<td> <span class="text"> User Name: </span> </td>
						<td> <input type="text" name="UNAME" class="tf" style="text-transform: uppercase;" placeholder="Full Name" value="<?php echo $LID; ?>" required> </td>
					</tr>
					
					<tr>
						<td> <span class="text"> Designation: </span> </td>
						<td> <input type="text" name="UDEGN" class="tf" style="text-transform: uppercase;" placeholder="Designation(ADMIN/MANAGER/SALESMAN)" value="<?php echo $LID; ?>" required> </td>
					</tr>
					
					<tr>
						<td> <span class="text"> User Contact No. </span> </td>
						<td> <input type="number" min="0" name="UCON" class="tf" style="text-transform: uppercase;" placeholder="Official Number" value="<?php echo $LID; ?>" required> </td>
					</tr>
					
					<tr>
						<td> <span class="text"> User E-mail: </span> </td>
						<td> <input type="email" name="UEMAIL" class="tf" style="text-transform: lowercase;" placeholder="Official E-mail" value="<?php echo $LID; ?>" required> </td>
					</tr>
	
					<tr>
						<td> <span class="text"> NEW PASSWORD: </span> </td>
						<td> <input type="text" name="PASS" class="tf" placeholder="Generated Temporary Password" value="<?php echo $pass; ?>" readonly> </td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"> <button name="send" id="send"> SEND</button> </td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>