<?php
include '../Page Controllers/homeController.php';
?>

<html>
	<head>
		<title> Home </title>
		<link rel="stylesheet" type="text/css" href="CSS/home.css">
	</head>
	
	<body style="background-image: url('Images/home1.gif'); background-repeat: no-repeat; background-position:center top; background-size: 20% 25%;">
		<div class="form">
			<form action="" method="post">
				<table>
					<tr>
						<td> <input type="image" src="Images\employee_list_option.png" alt="employee_list" class="button" name="employeeBTN"> </td>
						<td class="col"></td>
						<td> <input type="image" src="Images\product_list_option.png" alt="product_list" class="button" name="productBTN"> </td>
						<td class="col"></td>
						<td> <input type="image" src="Images\sell_product_opt.png" alt="sell_product" class="button" name="sellBTN"> </td>
						<td class="col"></td>
						<td> <input type="image" src="Images\note_option.png" alt="note_option" class="button" name="takenoteBTN"> </td>
						<td class="col"></td>
						<td> <input type="image" src="Images\user_opt.png" alt="about_me" class="button" name="aboutmeBTN"> </td>
						<td class="col"></td>
						<td> <input type="image" src="Images\faq_option.png" alt="learn_more" class="button" name="learnmoreBTN"> </td>
					</tr>	
					
					<tr>
						<td class="text" valign="bottom" align="center"><span>Employee List</span> </td>
						<td></td>
						<td class="text" valign="bottom" align="center"><span>Product List</span> </td>
						<td></td>
						<td class="text" valign="bottom" align="center"><span>Sell Product</span> </td>
						<td></td>
						<td class="text" valign="bottom" align="center"><span>Take Note</span> </td>
						<td></td>
						<td class="text" valign="bottom" align="center"><span><?php echo "$uid";  ?></span> </td>
						<td></td>
						<td class="text" valign="bottom" align="center"><span>Learn More</span> </td>
					</tr>
					
					<tr>
						<td align="center" align="bottom" colspan="11" style="height:250;"> <input type="submit" class="logout" name="logoutBTN" value="Logout"> </td>
					</tr>
				</table>
			</form>
		</div>	
	</body>
</html>
