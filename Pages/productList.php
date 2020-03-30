<?php
if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
{
	$uid = $_COOKIE['uid'];
	$sid = $_COOKIE['sid'];
	
	$srchProdTF="";
	$srchProdTFerror="";
	
	$pidTF="";
	$pidTFerror="";
	$pnameTF="";
	$pnameTFerror="";

	$design="";
	$o1= false;
	$o2= false;
	$o3= false;
	$o4= false;
	$o5= false;
	$o6= false;
	$o7= false;
	$o8= false;
	$o9= false;
	$o10= false;
	$o11= false;
	$o12= false;
	$designerror="";
	$quantTF="";
	$quantTFerror="";
	$buyPriceTF="";
	$buyPriceTFerror="";
	$sellPriceTF="";
	$sellPriceTFerror="";
	
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
			$srchProdTFerror="*Product ID required.";
		}
		
		else
		{
			$srchProdTF=$_POST["srchProdTF"];
		}
	}
	
	if(isset($_POST["insertBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			$pidTFerror="*";
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
		}
		
		if(empty($_POST["pnameTF"]))
		{
			$pnameTFerror="*";
		}
		
		else
		{
			$pnameTF=$_POST["pnameTF"];
		}
		
		if(isset($_POST["design"]))
		{
			$design=$_POST["design"];
			if($design == "SELECT")
			{
				$o1=true;
				$designerror="*";
				$design="";
			}
			
			else
			{
				$design=$_POST["design"];
				
				if($design=="LAPTOP")
				{
					$o2=true;
				}
				
				if($design=="MONITOR")
				{
					$o3=true;
				}
				
				if($design=="MOUSE")
				{
					$o4=true;
				}
				
				if($design=="SPEAKER")
				{
					$o5=true;
				}
				
				if($design=="RAM")
				{
					$o6=true;
				}
				
				if($design=="ROM")
				{
					$o7=true;
				}
				
				if($design=="PROCCESOR")
				{
					$o8=true;
				}
				
				if($design=="PORTABLE HDD/SSD")
				{
					$o9=true;
				}
				
				if($design=="KEYBOARD")
				{
					$o10=true;
				}
				
				if($design=="PRINTER")
				{
					$o11=true;
				}
				
				if($design=="SOFTWARE")
				{
					$o12=true;
				}
			}			
		}
		
		else
		{
			$designerror="*";
		}
		
		if(empty($_POST['quantTF']))
		{
			$quantTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['quantTF'])==true && strpos( $_POST['quantTF'], "." ) == false )
			{
				$quantTF=$_POST['quantTF'];
				$quantTFerror="";
			}
			
			else
			{
				$quantTF="";
				$quantTFerror="Invalid";
			}
		}
		
		if(empty($_POST['buyPriceTF']))
		{
			$buyPriceTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['buyPriceTF'])==true && strpos( $_POST['buyPriceTF'], "." ) == false )
			{
				$buyPriceTF=$_POST['buyPriceTF'];
				$buyPriceTFerror="";
				if($buyPriceTF != 0 && $buyPriceTF >= 1)
				{
					$buyPriceTF=$_POST['buyPriceTF'];
					$buyPriceTFerror="";
				}
				
				else
				{
					$buyPriceTF="";
					$buyPriceTFerror="Invalid";
				}
			}
			
			else
			{
				$buyPriceTF="";
				$buyPriceTFerror="Invalid";
			}
		}
		
		if(empty($_POST['sellPriceTF']))
		{
			$sellPriceTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['sellPriceTF'])==true && strpos( $_POST['sellPriceTF'], "." ) == false )
			{
				$sellPriceTF=$_POST['sellPriceTF'];
				$sellPriceTFerror="";
				if(!empty($_POST['buyPriceTF']) && $sellPriceTF > $buyPriceTF )
				{
					$sellPriceTF=$_POST['sellPriceTF'];
					$sellPriceTFerror="";
				}
				
				else
				{
					$sellPriceTF="";
					$sellPriceTFerror="Invalid";
				}
			}
			
			else
			{
				$sellPriceTF="";
				$sellPriceTFerror="Invalid";
			}
		}
	}
	
	if(isset($_POST["updateBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			$pidTFerror="*";
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
		}
		
		if(empty($_POST["pnameTF"]))
		{
			$pnameTFerror="*";
		}
		
		else
		{
			$pnameTF=$_POST["pnameTF"];
		}
		
		if(isset($_POST["design"]))
		{
			$design=$_POST["design"];
			if($design == "SELECT")
			{
				$o1=true;
				$designerror="*";
				$design="";
			}
			
			else
			{
				$design=$_POST["design"];
				
				if($design=="LAPTOP")
				{
					$o2=true;
				}
				
				if($design=="MONITOR")
				{
					$o3=true;
				}
				
				if($design=="MOUSE")
				{
					$o4=true;
				}
				
				if($design=="SPEAKER")
				{
					$o5=true;
				}
				
				if($design=="RAM")
				{
					$o6=true;
				}
				
				if($design=="ROM")
				{
					$o7=true;
				}
				
				if($design=="PROCCESOR")
				{
					$o8=true;
				}
				
				if($design=="PORTABLE HDD/SSD")
				{
					$o9=true;
				}
				
				if($design=="KEYBOARD")
				{
					$o10=true;
				}
				
				if($design=="PRINTER")
				{
					$o11=true;
				}
				
				if($design=="SOFTWARE")
				{
					$o12=true;
				}
			}			
		}
		
		else
		{
			$designerror="*";
		}
		
		if(empty($_POST['quantTF']))
		{
			$quantTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['quantTF'])==true && strpos( $_POST['quantTF'], "." ) == false )
			{
				$quantTF=$_POST['quantTF'];
				$quantTFerror="";
			}
			
			else
			{
				$quantTF="";
				$quantTFerror="Invalid";
			}
		}
		
		if(empty($_POST['buyPriceTF']))
		{
			$buyPriceTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['buyPriceTF'])==true && strpos( $_POST['buyPriceTF'], "." ) == false )
			{
				$buyPriceTF=$_POST['buyPriceTF'];
				$buyPriceTFerror="";
				if($buyPriceTF != 0 && $buyPriceTF >= 1)
				{
					$buyPriceTF=$_POST['buyPriceTF'];
					$buyPriceTFerror="";
				}
				
				else
				{
					$buyPriceTF="";
					$buyPriceTFerror="Invalid";
				}
			}
			
			else
			{
				$buyPriceTF="";
				$buyPriceTFerror="Invalid";
			}
		}
		
		if(empty($_POST['sellPriceTF']))
		{
			$sellPriceTFerror="*";
		}
		else
		{
			if(is_numeric ($_POST['sellPriceTF'])==true && strpos( $_POST['sellPriceTF'], "." ) == false )
			{
				$sellPriceTF=$_POST['sellPriceTF'];
				$sellPriceTFerror="";
				if(!empty($_POST['buyPriceTF']) && $sellPriceTF > $buyPriceTF )
				{
					$sellPriceTF=$_POST['sellPriceTF'];
					$sellPriceTFerror="";
				}
				
				else
				{
					$sellPriceTF="";
					$sellPriceTFerror="Invalid";
				}
			}
			
			else
			{
				$sellPriceTF="";
				$sellPriceTFerror="Invalid";
			}
		}
	}
	
	if(isset($_POST["deleteBTN"]))
	{
		if(empty($_POST["pidTF"]))
		{
			$pidTFerror="*";
		}
		
		else
		{
			$pidTF=$_POST["pidTF"];
		}
	}
	
	if(isset($_POST["refreshBTN"]))
	{
		$srchProdTF="";
		$srchProdTFerror="";
		
		$pidTF="";
		$pidTFerror="";
		$pnameTF="";
		$pnameTFerror="";

		$design="";
		$o1= false;
		$o2= false;
		$o3= false;
		$o4= false;
		$o5= false;
		$o6= false;
		$o7= false;
		$o8= false;
		$o9= false;
		$o10= false;
		$o11= false;
		$o12= false;
		$designerror="";
		$quantTF="";
		$quantTFerror="";
		$buyPriceTF="";
		$buyPriceTFerror="";
		$sellPriceTF="";
		$sellPriceTFerror="";
	}
}

else
{
	header("Location:index.php");
}	
?>

<html>
	<head> 
		<title> Product List</title>
		<link rel="stylesheet" type="text/css" href="CSS/productList.css">
	</head>
	
	<body>
		<div class="container">
			<form action="" method="post">
				<div class="floatRightTop">
					<table name="search&logout">
						<tr>
							<td><input type="text" class="srchtf" name="srchProdTF" placeholder="Search By Product ID." value="<?php echo "$srchProdTF";echo"$srchProdTFerror";?>"></td>
							<td><input type="submit" class="srchbtn" name="srchBTN" value="Search"></td>
							<td style="width:50%;"></td>
							<td><input type="submit" class="srchbtn" name="gohomebtn" value="Home"></td>
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
							<td class="td1"> Product ID: </td>
							<td> 
								<input type="text" class="tf" name="pidTF" value="<?php echo "$pidTF";?>">
							</td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$pidTFerror";?> </span> </td>
						</tr>
		
						<tr>
							<td class="td1"> Name: </td>
							<td> 
								<input type="text" class="tf" name="pnameTF" value="<?php echo "$pnameTF";?>"> 
							</td>
							<td> <span style="color:red; font-size:15px;"> <?php echo "$pnameTFerror";?> </span> </td>
						</tr>
						
						<tr>
							<td class="td1"> Type: </td>
							<td> 
								<select name="design" id="design">
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
							<td> <span style="color:red; font-size:15px;"> <?php echo "$designerror";?> </span> </td>
						</tr>
						
						<tr>
							<td class="td1"> Quantity: </td>
							<td> <input type="text" class="tf" name="quantTF" value="<?php echo "$quantTF"; ?>"> </td>
							<td> <span style="color:red;font-size:15px;"> <?php echo "$quantTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Buying Price: </td>
							<td> <input type="text" class="tf" name="buyPriceTF" value="<?php echo"$buyPriceTF"; ?>"> </td>
							<td> <span style="color:red;font-size:15px;"> <?php echo "$buyPriceTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Selling Price: </td>
							<td> <input type="text" class="tf" name="sellPriceTF" value="<?php echo"$sellPriceTF"; ?>"> </td>
							<td> <span style="color:red;font-size:15px;"> <?php echo "$sellPriceTFerror";?> </span></td>
						</tr>
						
						<tr>
							<td class="td1"> Modified By: </td>
							<td> <input type="text" class="tf" name="modbyTF" placeholder="Automatically Generated." value=""> </td>
						</tr>
						
						<tr>
							<td class="td1"> Adding Date: </td>
							<td> <input type="text" class="tf" name="addDateTF" placeholder="Automatically Generated." value=""> </td>
						</tr>
					<table>
				</div>
				
				<table name="buttons" class="btnTB">
					<tr>
						<td> <input type="submit" class="btn" name="refreshBTN" value="REFRESH"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="insertBTN" value="INSERT"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="updateBTN" value="UPDATE"> </td>
						<td class="col2"></td>
						<td> <input type="submit" class="btn" name="deleteBTN" value="DELETE"> </td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>	
		
