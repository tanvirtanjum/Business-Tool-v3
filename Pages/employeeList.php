<?php
include '../Page Controllers/employeeListController.php';
?>

<html>
	<head> 
		<title> Employee List</title>
		<script src="../Page Controllers/javascript/employeeListJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/employeeList.css">
	</head>
																						
	<body style="background-image: url('Images/employeeList.png'); background-repeat: no-repeat; background-size: cover;">
		<form action="" method="post">
			<div class="container">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td> <input type="text" class="srchtf" name="srchEmpTF" placeholder="Search by Employee ID." value="<?php echo "$srchEmpTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo"$srchEmpTFerror";?> </span> </td>
							<td> <button class="srchbtn" name="srchBTN"> Search </button> </td>
							<td style="width:50%;"> </td>
							<td> <input type="text" class="srchbynametf" name="srchEmpByNameTF" id="srchEmpByNameTF" placeholder="Load Table by Employee Name" onclick='clear()'> </td>
							<td style="width:30%;"> </td>
							<td> <button class="srchbtn" name="gohomebtn"> Home </button> </td>
							<td class="col"> </td>
							<td> <button class="logoutbtn" name="logoutBTN"> Logout </button> </td>
						</tr>
					</table>
					<div class="scrollit">
						<table name="empTable" id="empTable">
							<thead>
								<tr>
									<th>ID.</th>
									<th>Name</th>
									<th>Design. ID.</th>
									<th>Salary</th>
									<th>Mobile No</th>
									<th>Join Date</th>
									<th>Added By</th>	
								</tr>
							</thead>
							
							<tbody id='tab'>
								<?php
									showTable();
								?>
							</tbody>
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="input">
						<tr>
							<td class="td1"> Employee ID: </td>
							<td> 
								<input type="text" class="tf" name="eidTF" value="<?php echo "$eidTF";?>" <?php if($srchvalid==true){echo "readonly";}?>>
								<span style="color:red; font-size:15px;"> <?php echo "$eidTFerror";?> </span>
							</td>
						</tr>
						
						<tr>
							<td class="td1"> Name: </td>
							<td> 
								<input type="text" class="tf" style="text-transform: uppercase;" name="enameTF" value="<?php echo "$enameTF";?>">
								<span style="color:red; font-size:15px;"> <?php echo "$enameTFerror";?> </span>
							</td>	
						</tr>
						
						<tr>
							<td class="td1"> Designation: </td>
							<td> 
								<select name="design" id="design">
								  <option value="4" <?php if($o1 == true) {echo "selected";} ?>> ---SELECT--- </option>
								  <option value="1" <?php if($o2 == true) {echo "selected";} ?>> 1. ADMIN </option>
								  <option value="2" <?php if($o3 == true) {echo "selected";} ?>> 2. MANAGER </option>
								  <option value="3" <?php if($o4 == true) {echo "selected";} ?>> 3. SALESMAN </option>
								</select>
								<span style="color:red; font-size:15px;"> <?php echo "$designerror";?> </span>
							</td>
						</tr>
						
						<tr>
							<td class="td1"> Salary: </td>
							<td> <input type="number" min="0" class="tf" name="salTF" value="<?php echo "$salTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"><?php echo $msg; ?> <?php echo "$salTFerror"; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Mobile No.: </td>
							<td> <input type="number" min="0" class="tf" name="mobTF" value="<?php echo "$mobTF";?>"> </td>
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
<<<<<<< .mine
					</table>
||||||| .r42
					<table>
=======
					</table>
						
					<table name="buttons" class="btnTB">
						<tr>
							<td> <button class="btn" name="refreshBTN"> REFRESH </button> </td>
							<td class="col2"></td>
							<td> <button class="btn" name="insertBTN" onclick='return showPASS("<?php echo $eidTF;?>","<?php echo $pass;?>")' <?php if($srchvalid){echo "disabled";} ?>> INSERT </button> </td> 
							<td class="col2"></td>
							<td> <button class="btn" name="updateBTN" <?php if(!$srchvalid){echo "disabled";} ?>> UPDATE </button> </td>
							<td class="col2"></td>
							<td> <button class="btn" name="deleteBTN" <?php if(!$srchvalid){echo "disabled";} ?>> DELETE </button> </td>
						</tr>
					</table>
>>>>>>> .r45
				</div>
			</div>
		</form>
	</body>
</html>