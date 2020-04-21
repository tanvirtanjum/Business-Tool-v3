<?php
include '../Page Controllers/sellProductController.php';
?>

<!DOCTYPE html>
<html>
	<head> 
		<title> Sell Product </title>
		<link rel="stylesheet" type="text/css" href="CSS/sellProduct.css">
	</head>
	
	<body style="background-image: url('Images/5.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<form autocomplete="off" action="" method="post">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td><input type="text" class="srchtf" name="srchProdTF" placeholder="Search by Product Type" value="<?php echo "$srchProdTF";?>"></td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$srchProdTFerror";?> </span> </td>
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
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="input">
						<tr>
							<td class="td1"> Purchase ID: </td>
							<td> <input type="text" class="tf" name="puridTF" value="<?php echo "$pidTF";?>"> </td>
							<td>	<span style="color:red; font-size:15px;"> <?php echo "$pidTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Product ID: </td>
							<td> <input type="text" class="tf" name="prodidTF" value="<?php echo "$pnameTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$pnameTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Purchase Quantity: </td>
							<td> <input type="text" class="tf" name="quantTF" value="<?php echo "$quantTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo   $temp ?> <?php echo $msg; ?> <?php echo "$quantTFerror"; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Price(/unit): </td>
							<td> <input type="text" class="tf" name="priceTF" value="<?php echo "$priceTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo   $temp ?> <?php echo $msg1; ?> <?php echo "$priceTFerror"; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Customer Name: </td>
							<td> <input type="text" class="tf" name="cusnameTF" value="<?php echo "$cusnameTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$cusnameTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Customer Number: </td>
							<td> <input type="text" class="tf" name="cusmobTF" value="<?php echo "$cusmobTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo   $temp ?> <?php echo $msg2; ?> <?php echo "$cusmobTFerror"; ?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Seller ID: </td>
							<td> <input type="text" class="tf" name="sidTF" value="<?php echo "$sidTF";?>"> </td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$sidTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Sell Date: </td>
							<td> <input type="text" class="tf" placeholder="Auto Generated" name="sellDateTF" value=""> </td>
						</tr>

						<tr>
							<td colspan="2" align="center" style="height:90px;"> <input type="submit" class="btn" name="sellBTN" value="Sell"> </td>
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
		
