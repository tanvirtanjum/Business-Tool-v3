<?php
include '../Page Controllers/learnMoreController.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Learn More </title>
		<link rel="stylesheet" type="text/css" href="CSS/learnMore.css">
	</head>	
	<body>
		<form autocomplete="off" action="" method="post">
			<table style="width:100%;"  cellpadding="1">
				<tr>
					<td align="right"><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
				</tr>
				<tr>
					<td align="center"><span class="header"> Business Tool </span></td>
				</tr>
				
				<tr> 
					<td align="center"> <span class="subheader"> version 3.0 </span> </td>
				</tr>
			</table>
			
			<table style="width:100%;">
				<tr>
					<td colspan="3"> <span class="devheader"><u> <br> Developer Information <br><br> <u></span> </td>
				</tr>
				
				<tr>	
					<td style="width:33.33%;" align="center"> 
						<span class="devinfo"> 1. TANVIR TANJUM SHOURAV </span>
						<span class="devinfo"> <br> Team Leader </span>
						<span class="devinfomail"> <br> <a href="mailto:tanjumtanvir@gmail.com"> tanjumtanvir@gmail.com </a><span>
					</td>
					
					<td style="width:33.33%;" align="center"> 
						<span class="devinfo"> 2. RAHATUL MAKSUD RAHAT </span>
						<span class="devinfo"> <br> Designer </span>
						<span class="devinfomail"> <br> <a href="mailto:ratulmaksud@gmail.com"> ratulmaksud@gmail.com </a> <span>
					</td>
					
					<td style="width:33.33%;" align="center"> 
						<span class="devinfo"> 3. ANIKA TAHSIN TINA </span>
						<span class="devinfo"> <br> Tester </span>
						<span class="devinfomail"> <br> <a href="mailto:tinatahsin3@gmail.com"> tinatahsin3@gmail.com </a><span>
					</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<td style="height:100px;"></td>
				</tr>
				<tr>
					<td>
						<span class="insheader"> <br> Instructions to be followed for the system~ </span>
						<span class="insinfo"> <br> <br> 1. Login- User must login with a valid user-id & password. <br> The loggedin User can be an ADMIN, a MANAGER or a SALESMAN. <br> The tasks will be enabled accroding to their designations. <br> After a succesful login user will get access to HOME-PAGE.  </span>
						<span class="insinfo"> <br> <br> 2. Homepage is containing six features:  <br>
							<ul> 
								<li> Emplyee List </li>
								<li> Product List </li>
								<li> Sell Product </li>
								<li> Take Note </li>
								<li> About Me </li>
								<li> Learn More </li>
									
							</ul>
						</span>
						<span class="insinfo">  <br> Description: </span>
						<span class="insinfo"> <br> <br> Employee List: </span>
						<span class="insinfo"> 
							<ul>
								<li>Search: Accessible for all user.</li>
								<li>Insert: Accessible for ADMIN only. <ul><li>For every insertion, a random password will be generated for that inserted new user for future login.</li></ul> </li>
								<li>Update: Accessible for ADMIN & MANAGER.</li>
								<li>Delete: Accessible for ADMIN only.</li>
								<li>Refresh: Accessible for all user.</li>
							</ul>
						</span>	
						<span class="insinfo"> <br><br> Product List:</span>
						<span class="insinfo"> 
							<ul>
								<li>Search: Accessible for all user.</li>
								<li>Insert: Accessible for ADMIN & MANAGER. </li>
								<li>Update: Accessible for ADMIN & MANAGER.</li>
								<li>Delete: Accessible for ADMIN only.</li>
								<li>Refresh: Accessible for all user.</li>
							</ul>
						</span>	
						
						<span class="insinfo"> <br><br> Sell Product:</span>
						<span class="insinfo"> 
							<ul>
								<li>Search: Accessible for all user.</li>
								<li>Sell: Accessible for SALESMAN. </li>
								<li>Discard: Accessible for SALESMAN.</li>
								<ul>
									<li>
										Check SalesHistory: Accessible for all user.
										<ul>
											<li>Search: Accessible for all user.</li>
											<li>Refresh: Accessible for all user.</li>
										</ul>
									</li>
								</ul>
							</ul>
						</span>	
						
						<span class="insinfo"> <br><br> Take Note:</span>
						<span class="insinfo"> 
							<ul>
								<li>Download: Accessible for all user.</li>
								<li>Upload: Accessible for all user. </li>
								<li>Refresh: Accessible for all user.</li>
								<li>Update: Accessible for all user.</li>
								<li>Delete: Accessible for all user.</li>
								<li>Print: Accessible for all user.</li>
							</ul>
						</span>	
						
						<span class="insinfo"> <br><br> About Me:</span>
						<span class="insinfo"> 
							<ul>
								<li>Logged-In user information.</li>
								<ul>
									<li>
										Settings: Accessible for all user.
										<ul>
											<li>Proceed: Accessible for all user.(Requirment followed)</li>
										</ul>
									</li>
								</ul>
							</ul>
						</span>	
					</td>	
				</tr>
			</table>	
		</form>
	</body>
</html>	
