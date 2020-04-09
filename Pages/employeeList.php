<?php
include '../Page Controllers/employeeListController.php';
?>

<html>
	<head> 
		<title> Employee List</title>
		<script src="../Page Controllers/javascript/employeeListJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/employeeList.css">
	</head>
																						
	<body>
		<div class="container">
			<form action="" method="post">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td><input type="text" class="srchtf" name="srchEmpTF" placeholder="Search by Employee ID." value="<?php echo "$srchEmpTF";?>"></td>
							<td> <span style="color:red; font-size:15px;"> <?php echo"$srchEmpTFerror";?> </span> </td>
							<td><input type="submit" class="srchbtn" name="srchBTN" value="Search"></td>
							<td style="width:50%;"></td>
							<td><input type="submit" class="srchbtn" name="gohomebtn" value="Home"></td>
							<td class="col"></td>
							<td><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
						</tr>
					</table>
					<div class="scrollit">
						<table name="empTable" id="empTable">
							<tr>
								<th>ID.</th>
								<th>Name</th>
								<th>Designation ID.</th>
								<th>Salary</th>
								<th>Mobile No</th>
								<th>Join Date</th>
								<th>Added By</th>	
							</tr>
							<?php
								showTable();
							?>
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="input">
						<tr>
							<td class="td1"> Employee ID: </td>
							<td> <input type="text" class="tf" name="eidTF" value="<?php echo "$eidTF";?>" <?php if($srchvalid==true){echo "readonly";}?>>
								<span style="color:red; font-size:15px;"> <?php echo "$eidTFerror";?> </span>
							</td>
						</tr>
						
						<tr>
							<td class="td1"> Name: </td>
							<td> <input type="text" class="tf" name="enameTF" value="<?php echo "$enameTF";?>">
								<span style="color:red; font-size:15px;"> <?php echo "$enameTFerror";?> </span>
						</tr>
						
						<tr>
							<td class="td1"> Designation: </td>
							<td> 
								<select name="design" id="design">
								  <option value="4" <?php if($o1 == true) {echo "selected";} ?>>---SELECT---</option>
								  <option value="1" <?php if($o2 == true) {echo "selected";} ?>>1. ADMIN</option>
								  <option value="2" <?php if($o3 == true) {echo "selected";} ?> >2. MANAGER</option>
								  <option value="3" <?php if($o4 == true) {echo "selected";} ?> >3. SALESMAN</option>
								</select>
								<span style="color:red; font-size:15px;"> <?php echo "$designerror";?> </span>
							</td>
						</tr>
						
						<tr>
							<td class="td1"> Salary: </td>
							<td> <input type="text" class="tf" name="salTF" value="<?php echo "$salTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"><?php echo $msg; ?> <?php echo "$salTFerror"; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Mobile No.: </td>
							<td> <input type="text" class="tf" name="mobTF" value="<?php echo "$mobTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"><?php echo $msg1; ?> <?php echo "$mobTFerror"; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Join Date: </td>
							<td> <input type="text" class="tf" name="jdTF" placeholder="Auto Generated" value="<?php if($srchvalid==true){echo "$jdTF";}else{echo "$jdTF";} ?>" readonly> </td>
						</tr>
						
						<tr>
							<td class="td1"> Added By: </td>
							<td> <input type="text" class="tf" name="addedbyTF" placeholder="Auto Generated"  value="<?php if($srchvalid==true){echo "$addedbyTF";}else{echo "$uid";} ?>" readonly> </td>
						</tr>
					<table>
				</div>
				
				<table name="buttons" class="btnTB">
					<tr>
						<td> <input type="submit" class="btn" name="refreshBTN" value="REFRESH"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="insertBTN" value="INSERT" onclick= 'showPASS("<?php echo $idpass;?>")' <?php if($srchvalid){echo "disabled";} ?>> </td> 
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="updateBTN" value="UPDATE" <?php if(!$srchvalid){echo "disabled";} ?>> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="deleteBTN" value="DELETE" <?php if(!$srchvalid){echo "disabled";} ?>> </td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>