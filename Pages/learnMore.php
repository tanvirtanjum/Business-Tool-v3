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
						</td>
					</tr>
				</table>
				
				<table style="width:100%;">
					<tr>
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);"></td>
						
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
								  <div class="flip-box-inner">
									<div class="flip-box-front">
									<h3> Login </h3>
									<img src="Images/learnLogin.png" alt="Avatar" style="width:70%;height:80%;">
									</div>
									<div class="flip-box-back">
										<h1 align="middle">LOGIN</h1>
										<h3> Login- User must login with a valid user-id & password. 
										<br> The loggedin User can be an ADMIN, a MANAGER or a SALESMAN. 
										<br> The tasks will be enabled accroding to their designations. 
										<br> After a succesful login user will get access to HOME-PAGE. 
										</h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
						
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);"></td>
					</tr>
			
					<tr>
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
								  <div class="flip-box-inner">
									<div class="flip-box-front">
									<h3> Home-Page </h3> 
									<img src="Images/learnHome.png" alt="Avatar" style="width:70%;height:80%;">
									</div>
									<div class="flip-box-back">
										<h1> Home-Page contains the following </h1>
										<h3> Emplyee List </h3>
										<h3> Product List </h3>
										<h3> Sell Product </h3>
										<h3> Take Note </h3>
										<h3> About Me </h3>
										<h3> Learn More </h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
									<div class="flip-box-inner">
									<div class="flip-box-front">
										<h3> Employee-List </h3>
										<img src="Images/learnEmployeeList.png" alt="Avatar" style="width:70%;height:80%;">										
									</div>
									<div class="flip-box-back">
											<h1>Employees Informations</h1>
											<h3>Search: Accessible for all user.</h3>
											<h3>Insert: Accessible for ADMIN only. </h3>
											<u> <h3>~ For every insertion, a random password will be generated for that inserted new user for future login. </h3 > </u>
											<h3>Update: Accessible for ADMIN & MANAGER.</h3>
											<h3>Delete: Accessible for ADMIN only. </h3>
											<h3>Refresh: Accessible for all user.</h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h3> Product-List </h3> 
											<img src="Images/learnProductList.png" alt="Avatar" style="width:70%;height:80%;">
										</div>
									<div class="flip-box-back">
							  
										<h1>Product Information</h1>
										<h3>Search: Accessible for all user.</h3>
										<h3>Insert: Accessible for ADMIN & MANAGER. </h3>
										<h3>Update: Accessible for ADMIN & MANAGER.</h3>
										<h3>Delete: Accessible for ADMIN only.</h3>
										<h3>Refresh: Accessible for all user.</h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
					</tr>		
					
					<tr>
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h3> Sell-Product </h3> 
											<img src="Images/learnSellProduct.png" alt="Avatar" style="width:70%;height:80%;">
										</div>
									<div class="flip-box-back">
									  
										<h1>Product Sales</h1>
										<h3>Search: Accessible for all user.</h3>
										<h3>Sell: Accessible for SALESMAN. </h3>
										<h3>Discard: Accessible for SALESMAN.</h3>
										<u> <h2> Sales History </h2> </u>
										<h3>Search: Accessible for all user. </h3>
										<h3>Refresh: Accessible for all user.</h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h3> Take-Note </h3> 
											<img src="Images/learnTakeNotes.png" alt="Avatar" style="width:70%;height:80%;">
										</div>
									<div class="flip-box-back">
							  
										<h1>Notes Saving Cloud</h1>
										<h3>Download: Accessible for all user.</h3>
										<h3>Upload: Accessible for all user. </h3>
										<h3>Refresh: Accessible for all user.</h3>
										<h3>Update: Accessible for all user.</h3>
										<h3>Delete: Accessible for all user.</h3>
										<h3>Print: Accessible for all user.</h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="cardTable">
								<div class="flip-box">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h3> About-me </h3> 
											<img src="Images/learnAboutMe.png" alt="Avatar" style="width:70%;height:80%;">
										</div>
									<div class="flip-box-back">
							  
										<h1> Logged-In user information.</h1>
										<h3> Settings: Accessible for all user</h3>
									</div>
								  </div>
								</div>
							</div>
						</td>
					</tr>		
				</table>
			</div>
		</form>
	</body>
</html>	