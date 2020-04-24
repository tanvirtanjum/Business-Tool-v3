<?php
include '../Page Controllers/sellProductController.php';
?>

<!DOCTYPE html>
<html>
	<head> 
		<title> Sell Product </title>
		<link rel="stylesheet" type="text/css" href="CSS/sellProduct.css">
		<script src="../Page Controllers/javascript/sellProduct.js"></script>
	</head>
	
	<body style="background-image: url('Images/5.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<form autocomplete="off" action="" method="post">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td><input type="text" class="srchtf" name="srchProdTF" placeholder="Search by Product Type" value="<?php echo "$srchProdTF";?>"></td>
							<td> <span style="color:red; font-size:15px;"> </span> </td>
							<td><input type="submit" class="srchbtn" name="srchBTN" value="Search"></td>
							<td style="width:50%;"></td>
							<td><input type="submit" class="srchbtn" name="gohomebtn" value="Home"></td>
							<td class="space"></td>
							<td><input type="submit" class="gobtn" name="goBTN" value="Check Sales History  >>"></td>
							<td class="col"></td>
							<td><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
						</tr>
					</table>
					<div class="scrollit">
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
							
							<tbody id="tab">
								<?php
								showTable();
								?>
							</tbody>
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="input" style="width: 100%;">
						<tr>
							<td class="td1"> Purchase ID: </td>
							<td> <input type="text" class="tf" name="puridTF" id="puridTF" value="<?php echo "$pidTF";?>" placeholder="Auto Generated" readonly> </td>
							<td> <span style="color:red; font-size:15px;"> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Product ID: </td>
							<td> <input type="text" class="tf" name="prodidTF" id="prodidTF" value="<?php echo "$pnameTF";?>"> </td>
							<td> <span id="prodidTFerr" style="color:red; font-size:15px;"> <?php echo $m1; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Purchase Quantity: </td>
							<td> <input type="number" class="tf" name="quantTF" id="quantTF" min="0" value="<?php echo "$quantTF";?>"> </td>
							<td> <span id="quantTFerr" style="color:red; font-size:15px;"> <?php echo $m2; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Price(/unit): </td>
							<td> <input type="number" class="tf" name="priceTF" id="priceTF" min="0" value="<?php echo "$priceTF";?>"> </td>
							<td> <span id="priceTFerr" style="color:red; font-size:15px;"> <?php echo $m3; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Customer Name: </td>
							<td> <input type="text" class="tf" style="text-transform: uppercase;" name="cusnameTF" id="cusnameTF" value="<?php echo "$cusnameTF";?>"> </td>
							<td> <span id="cusnameTFerr" style="color:red; font-size:15px;"> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Customer Number: </td>
							<td> <input type="number" class="tf" name="cusmobTF" id="cusmobTF" min="0" placeholder="01XXXXXXXXX" value="<?php echo "$cusmobTF";?>"> </td>
							<td> <span id="cusmobTFerr" style="color:red; font-size:15px;"> </span> </td>
						</tr>
						
						<tr>
							<td class="td1"> Seller ID: </td>
							<td> <input type="text" class="tf" name="sidTF" id="sidTF" placeholder="Auto Generated" value="<?php echo "$uid";?>" readonly> </td>
							<td> <span style="color:red; font-size:15px;"> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Sell Date: </td>
							<td> <input type="text" class="tf" placeholder="Auto Generated" name="sellDateTF" id="sellDateTF" value="" readonly> </td>
						</tr>

						<tr>
							<td colspan="2" align="center" style="height:90px;"> <button class="btn" name="sellBTN" onclick="return validate()">Sell</button> </td>
						</tr>
						
						<tr>
							<td colspan="2" align="center" style="height:90px;"> <input type="submit" class="discardbtn" name="discardBTN" value="Discard"> </td>
						<tr>
					<table>
				</div>
			</form>
		</div>
	</body>
</html>	
		
