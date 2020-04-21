<?php
include '../Page Controllers/learnMoreController.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Learn More </title>
		<link rel="stylesheet" type="text/css" href="CSS/learnMore.css">
	</head>	
	
	<body>
		<form autocomplete="off" action="" method="post">
			<div class="header" id="header">
				<table style="width:100%;"  cellpadding="1">
					<tr>
						<td align="right"><input type="submit" class="logoutbtn" name="logoutBTN" value="Logout"></td>
					</tr>
					<tr>
						<td align="center" class="headerText"><span> Business Tool </span></td>
					</tr>
					
					<tr> 
						<td align="center"> <span class="subheader"> version 3.0 </span> </td>
					</tr>
				</table>
			</div>
			
			<div class="content">
				<table style="width:100%;">
					<tr>
						<td colspan="3"> <span class="devheader"><u> <br> Developer Information <br><br> <u></span> </td>
					</tr>
				</table>

				<table cellpadding="1" id="cardTable">
					<tr>
						<td>
							<div class="card">
								<img src="Images/BT-TeamLeader.jpg" alt="Avatar" style="width:100%">
								<p class="devinfoname">TANVIR TANJUM SHOURAV</p>
								<p class="devinfodesign">Team Leader</p> 
								<p> <br> <a class="devinfomail" href="mailto:tanjumtanvir@gmail.com"> tanjumtanvir@gmail.com </a> </p>
							</div>
						</td>
						
						<td>
							<div class="card">
								<img src="Images/Designer.jpg" alt="Avatar" style="width:100%">
								<p class="devinfoname">RAHATUL MAKSUD RAHATUL</p> 
								<p class="devinfodesign">Designer</p> 
								<p> <br> <a class="devinfomail" href="mailto:ratulmaksud@gmail.com"> ratulmaksud@gmail.com </a> </p>
							</div>
						</td>
						
						<td>
							<div class="card">
								<img src="Images/Tester.jpg" alt="Avatar" style="width:100%">
								<p class="devinfoname">ANIKA TAHSIN TINA</[> 
								<p class="devinfodesign">Tester</p> 
								<p> <br> <a class="devinfomail" href="mailto:tinatahsin3@gmail.com"> tinatahsin3@gmail.com </a> </p>
							</div>
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
			</div>
		</form>
	</body>
</html>	