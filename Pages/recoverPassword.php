<?php
include '../Page Controllers/recoverPasswordController.php';
?>
<html>
	<head>
		<title> Recover Password </title>
		<script src="../Page Controllers/javascript/recoverPassJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/recoverPassword.css">
	</head>
	
	<body>
		<form action="" method="post">
			<input type="text" name="UID" placeholder="User ID." value="<?php echo $LID; ?>">
			<button name="send" id="send"> SEND</button>
			<input type="text" name="PASS" placeholder="Generated Temporary Password" value="<?php echo $pass; ?>">
		</form>
	</body>
</html>