<?php
include '../Page Controllers/takenoteController.php';
?>

<!DOCTYPE html>
<html>
	<head> 
		<title> Take Note</title>
		<script src="../Page Controllers/javascript/noteJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/takenote.css">
	</head>
	
	<body>
		<div class="container">
			<form action="" method="post">
				<div class="floatRightTop">
					<table name="download&logout">
						<tr>
							<td><input type="text" class="tf" name="noteIDTF" id="noteIDTF" placeholder="Note ID" value="<?php echo $noteID; ?>"> </td>
							<td><span style="color:red;"><?php echo $idErr; ?></span></td>
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
							
							<?php
								showTable($uid);
							?>
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="upload">
						<tr>
							<td>
								<input type="text" class="tf" name="noteNameTF" placeholder="Note Name" value="<?php echo $notename;?>">
								<span style="color:red;"><?php echo $namingErr; ?></span>
								<input type="submit" class="uploadbtn" name="uploadBTN" value="Upload">
							</td>
						</tr>
					
						<tr>
							<td>
								<textarea id="noteTA" name="noteTA" class="noteTA" placeholder="Write here..."><?php echo $downtext; ?></textarea>
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
						<td> <input type="submit" class="btn" name="printBTN" value="PRINT" onclick='saveFile()'> </td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>	
		
