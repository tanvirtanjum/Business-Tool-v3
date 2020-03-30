<?php
if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
	
	$srchProdTF="";
	$srchProdTFerror="";
	
	if(isset($_POST["logoutBTN"]))
	{
		setcookie("uid",$uid,time()-600);
		setcookie("sid",$sid,time()-600);
		header("Location:index.php");
	}
	
	if(isset($_POST["gohomebtn"]))
	{
		setcookie("uid",$uid,time()+600);
		setcookie("sid",$sid,time()+600);
		header("Location:home.php");
	}
	
	if(isset($_POST["srchBTN"]))
	{
		if(empty($_POST["srchProdTF"]))
		{
			$srchProdTFerror="*";
		}
		
		else
		{
			$srchProdTF=$_POST["srchProdTF"];
		}
	
	}
}

else
{
	header("Location:index.php");
}	
?>
<html>
	<head> 
		<title> Sales History </title>
		<link rel="stylesheet" type="text/css" href="CSS/salesHistory.css">
	</head>
	
	<body>
		<div class="container">
			<form action="" method="post">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td><input type="text" class="srchtf" name="srchProdTF" placeholder="Search by Sales ID." value="<?php echo "$srchProdTF";?>"></td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$srchProdTFerror";?> </span> </td>
							<td><input type="submit" class="srchbtn" name="srchBTN" value="Search"></td>
							<td style="width:50%;"></td>
							<td><input type="submit" class="srchbtn" name="gohomebtn" value="Home"></td>
							<td class="col"></td>
							<td><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
						</tr>
					</table>
					<div class="scrollit">
						<table name="salesTable" id="salesTable">
							<tr>
								<th>Sales ID.</th>
								<th>Product ID</th>
								<th>Selling Quantity</th>
								<th>Obtained Ammount</th>
								<th>Total Profit</th>
								<th>Customer Name</th>
								<th>Customer Contact</th>
								<th>Sold By</th>
								<th>Date</th>
							</tr>
						</table>
					</div>
				</div>
						
				<div class="floatLeftDown">
					<table name="input">
						<tr>
							<td class="td1"> Sales ID: </td>
							<td> <input type="text" class="tf" name="sidTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Product ID: </td>
							<td> <input type="text" class="tf" name="prodidTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Selling Quantity: </td>
							<td> <input type="text" class="tf" name="quantTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Obtained Ammount: </td>
							<td> <input type="text" class="tf" name="obtamntTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Total Profit: </td>
							<td> <input type="text" class="tf" name="profitTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Customer Name: </td>
							<td> <input type="text" class="tf" name="cusnameTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Customer Contact: </td>
							<td> <input type="text" class="tf" name="cusmobTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Sold By: </td>
							<td> <input type="text" class="tf" name="empidTF" value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Date: </td>
							<td> <input type="text" class="tf" name="sellDateTF" value=""> </td>
						</tr>

						<tr>
							<td colspan="2" align="center" style="height:90px;"> <input type="submit" class="btn" name="refreshBTN" value="Refresh"> </td>	
						</tr>
					<table>
				</div>
			</form>
		</div>
	</body>
</html>	
		
