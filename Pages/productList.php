<?php
include '../Page Controllers/productListController.php';
?>

<!DOCTYPE html>
<html>
	<head> 
		<title> Product List</title>
		<script src="../Page Controllers/javascript/productListJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/productList.css">
	</head>
	
	<body style="background-image: url('Images/6.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<form autocomplete="off" action="" method="post">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td><input type="text" class="srchtf" name="srchProdTF" placeholder="Search By Product ID." value="<?php echo "$srchProdTF";echo"$srchProdTFerror";?>"></td>
							<td><input type="submit" class="srchbtn" name="srchBTN" value="Search"></td>
							<td style="width:30%;"></td>
							<td> <button class="savebtn" onclick="return savePDF()"> Print Table </button> </td>
							<td style="width:20%;"></td>
							<td><input type="submit" class="srchbtn" name="gohomebtn" value="Home"></td>
							<td class="col"></td>
							<td><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
						</tr>
					</table>
					<div class="scrollit">
						<div id="printableTable">
							<table name="prodTable" id="prodTable">
								<thead>
									<tr>
										<th>ID.</th>
										<th>Name</th>
										<th>Type</th>
										<th>Quantity</th>
										<th>Buying Price</th>
										<th>Selling Price</th>
										<th>Modified By</th>
										<th>Adding Date</th>
									</tr>
								</thead>
								
								<tbody>
									<?php
										showTable();
									?>
								</tbody>
							</table>
						</div>
					</div>
					
					<div align="center" height="40px">
						<input type="text" class="srchbypnametf" name="srchEmpByPNameTF" id="srchEmpByPNameTF" placeholder="Load Table by Product Name" onfocus='clear()'> </td>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="input">
						<tr>
							<td class="td1"> Product ID: </td>
							<td> 
								<input type="text" class="tf" name="pidTF" value="<?php echo "$pidTF";?>" <?php if($srchvalid==true){echo "readonly";}?>>
							</td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$pidTFerror";?> </span> </td>
						</tr>
		
						<tr>
							<td class="td1"> Name: </td>
							<td> 
								<input type="text" class="tf" style="text-transform: uppercase;" name="pnameTF" value="<?php echo "$pnameTF";?>"> 
							</td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$pnameTFerror";?> </span> </td>
						</tr>
						
						<tr>
							<td class="td1"> Type: </td>
							<td> 
								<select name="type" id="type">
								  <option value="SELECT" <?php if($o1 == true) {echo "selected";} ?>>---SELECT---</option>
								  <option value="LAPTOP" <?php if($o2 == true) {echo "selected";} ?>>1. LAPTOP</option>
								  <option value="MONITOR" <?php if($o3 == true) {echo "selected";} ?>>2. MONITOR</option>
								  <option value="MOUSE" <?php if($o4 == true) {echo "selected";} ?>>3. MOUSE</option>
								  <option value="SPEAKER" <?php if($o5 == true) {echo "selected";} ?>>4. SPEAKER</option>
								  <option value="RAM" <?php if($o6 == true) {echo "selected";} ?>>5. RAM</option>
								  <option value="ROM" <?php if($o7 == true) {echo "selected";} ?>>6. ROM</option>
								  <option value="PROCCESOR" <?php if($o8 == true) {echo "selected";} ?>>7. PROCCESOR</option>
								  <option value="PORTABLE HDD/SSD" <?php if($o9 == true) {echo "selected";} ?>>8. PORTABLE HDD/SSD</option>
								  <option value="KEYBOARD" <?php if($o10 == true) {echo "selected";} ?>>9. KEYBOARD</option>
								  <option value="PRINTER" <?php if($o11 == true) {echo "selected";} ?>>10. PRINTER</option>
								  <option value="SOFTWARE" <?php if($o12 == true) {echo "selected";} ?>>11. SOFTWARE</option>
								</select>
							</td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$typeerror";?> </span> </td>
						</tr>
						
						<tr>
							<td class="td1"> Quantity: </td>
							<td> <input type="number" min="0" class="tf" name="quantTF" value="<?php echo "$quantTF"; ?>"> </td>
							<td> <span style="color:red;font-size:15px;"> <?php echo "$quantTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Buying Price: </td>
							<td> <input type="number" min="0" class="tf" name="buyPriceTF" value="<?php echo"$buyPriceTF"; ?>"> </td>
							<td> <span style="color:red;font-size:15px;"> <?php echo "$buyPriceTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Selling Price: </td>
							<td> <input type="number" min="0" class="tf" name="sellPriceTF" value="<?php echo"$sellPriceTF"; ?>"> </td>
							<td> <span style="color:red;font-size:15px;"> <?php echo "$sellPriceTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Modified By: </td>
							<td> <input type="text" class="tf" name="modbyTF" placeholder="Automatically Generated." value="<?php echo $addby; ?>" readonly> </td>
						</tr>
						
						<tr>
							<td class="td1"> Adding Date: </td>
							<td> <input type="text" class="tf" name="addDateTF" placeholder="Automatically Generated." value="<?php echo $adddate; ?>" readonly> </td>
						</tr>
					<table>
				</div>
				
				<table name="buttons" class="btnTB">
					<tr>
						<td> <input type="submit" class="btn" name="refreshBTN" value="REFRESH"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="insertBTN" value="INSERT" <?php if($srchvalid){echo "disabled";} ?>> </td>
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
		
