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
			
				<table style="width:100%;">
					<tr>
						<td style="height:100px;"></td>
					</tr>
					<tr>
						<td align="middle" valign="center">
							<span class="insheader"> <br> System Manual</span>	
						</td>
					</tr>
					<tr>
						<td style="height:50px;"></td>
					</tr>
				</table>
				
				<table style="width:100%;" cellspacing="0" cellpadding="0">
					<tr>
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);"></td>
						
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="flip-box">
							  <div class="flip-box-inner">
								<div class="flip-box-front">
								<h3> Login </h3>
								<img src="Images/learnLogin.png" alt="Avatar" style="width:70%;height:80%;">
								</div>
								<div class="flip-box-back">
									<h1 align="middle">LOGIN</h1>
									<span> 
										Every user have to login with their Organization ID and PASSWORD to use the syetem. Otherwise the rest pages will not appear just by giving the URL of the page.
										<br>
										After validation of the user the system will take the user to the home page.
										<br>
										The accesibility pages and the task that can be done by the user further will be dependent on the users DESIGNATION.
										<br>
										The system will deny to access those pages which are not for that user. 
										<br> <br>
										Every user can recover their account password by clicking on the "Forgotten Password?" section by giving valid informations.
									<span>
								</div>
							  </div>
							</div>
						</td>
						
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);"></td>
					</tr>
			
					<tr>
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							
								<div class="flip-box">
								  <div class="flip-box-inner">
									<div class="flip-box-front">
									<h3> HOME </h3> 
									<img src="Images/learnHome.png" alt="Avatar" style="width:70%;height:80%;">
									</div>
									<div class="flip-box-back">
										<h1 align="middle">HOME</h1>
										<span> 
											Every user will be shown this page after successful login.
											<br>
											User will see 6 sections excluding logout.
											<br>
											Sections:
											<ul> 
												<li>MANAGE EMPLOYEES(Not Accessible by SALESMAN.)</li>
												<li>MANAGE PRODUCTS(Not Accessible by SALESMAN.)</li>
												<li>SELL PRODUCTS</li>
												<li>TAKE NOTES</li>
												<li>ABOUT USER</li>
												<li>LEARN MORE</li>
											</ul>
											<br><br>
											Users can browse these section according to their privilege.
											<br>
											System will autometically deny the request if the user has no accesibility.			
										</span>
									</div>
								  </div>
								</div>
							
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							
								<div class="flip-box">
									<div class="flip-box-inner">
									<div class="flip-box-front">
										<h3> MANAGE EMPLOYEES </h3>
										<img src="Images/learnEmployeeList.png" alt="Avatar" style="width:70%;height:80%;">										
									</div>
									<div class="flip-box-back">
										<h1 align="middle">MANAGE EMPLOYEES</h1>
										<span> 
											Only ADMINS and MANAGERS can browse this page.
											<br>
											This page is all about employee management.
											<br>
											Tasks, that can be done on this page-
											<ul> 
												<li>
													Search: Viewing information of a particular employee.
												</li> 
												
												<li>
													Advance Searching: Viewing all employees information by sorting list according some insticts.
													It will take the user in a new window.
													<br> Also can print the sorted list.
												</li> 
												
												<li>
													Insert: Assigning New Employees(Only by ADMIN.).
													<br>On each successful inserting a random password will be given to that inserted user by which the assigned user will bw able to login tothe system.
												</li>
												
												<li>
													Update: Updating Employees information(Only by ADMIN.).
												</li>
												<li>
													Delete: De-activating Employees(Only by ADMIN.).
													<br>That deleted user will not be able to login until re-activation.
												</li>
												<li>Print: It will print the whole active employees list.</li>
											</ul>
										</span>
									</div>
								  </div>
								</div>
							
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class="flip-box-front">
										<h3> MANAGE PRODUCTS </h3> 
										<img src="Images/learnProductList.png" alt="Avatar" style="width:70%;height:80%;">
									</div>
								<div class="flip-box-back">
									<h1 align="middle">MANAGE PRODUCTS</h1>
									<span> 
										Only ADMINS and MANAGERS can browse this page.
										<br>
										This page is all about product management.
										<br>
										Tasks, that can be done on this page-
										<ul> 
											<li>
												Search: Viewing information of a particular product.
											</li> 
											
											<li>
												Advance Searching: Viewing all products information by sorting list according some insticts.
												It will take the user in a new window.
												<br> Also can print the sorted list.
											</li> 
											
											<li>
												Insert: Adding New Products.
											</li>
											
											<li>
												Update: Updating Products information.
											</li>
											<li>
												Delete: Making products unavailable for sale(Only by ADMIN.).
											</li>
											<li>Print: It will print the whole available products list.</li>
										</ul>
									</span>
								</div>
							  </div>
							</div>
						</td>
					</tr>		
					
					<tr>
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class="flip-box-front">
										<h3> SELL PRODUCTS </h3> 
										<img src="Images/learnProductList.png" alt="Avatar" style="width:70%;height:80%;">
									</div>
								<div class="flip-box-back">
									<h1 align="middle">SELL PRODUCTS</h1>
									<span> 
										All users can browse this page.
										<br>
										This page is all about sales.
										<br>
										Tasks, that can be done on this page-
										<ul> 
											<li>
												Advance Searching: Viewing all products information by sorting list according name or/and type of products.
											</li> 
											
											<li>
												Sell: Selling Products(Only by SALESMAN).
												<br>On successful sale "Print Invoice" will be activated.
												<br>On each sale, records will be stored.
											</li>
											
											<li>
												Print Invoice: Printing the invoice for the user.
											</li>
											<li>
												Sales History: See the sales records.
												<br>It will take the user in a new page.
												<br>User can see the whole record list and also also search for a particular one.
												<br>The list can be sorted by selling date or/and customer name.
												<br>User also can take print of the whole or sorted table.
											</li>
										</ul>
									</span>
								</div>
							  </div>
							</div>
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
						
								<div class="flip-box">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h3> TAKE NOTES </h3> 
											<img src="Images/learnTakeNotes.png" alt="Avatar" style="width:70%;height:80%;">
										</div>
									<div class="flip-box-back">
										<h1 align="middle">TAKE NOTES</h1>
										<span> 
											All users can browse this page.
											<br>
											This page is all about taking personal notes.
											<br>
											Tasks, that can be done on this page-
											<ul>
												<li>
													Each user only can view their own notes list.
												</li>
												<li>
													Upload: Writing notes and save it in the system.
												</li> 
												
												<li>
													Download: Downloading the saved notes by the user.(Not other users note)
												</li>
												
												<li>
													Print: Save the downloaded note on PC in form of text file.
												</li>
												
												<li>
													Update: Updating saved notes by the user.
												</li>
												
												<li>
													Delete: Deleting saved notes by the user.
												</li>
											</ul>
										</span>
									</div>
								  </div>
							</div>
						</td>
					
						<td align="middle" style="width: calc(33.333333333333333333333333333333%);">
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class="flip-box-front">
										<h3> ABOUT USER </h3> 
										<img src="Images/learnAboutMe.png" alt="Avatar" style="width:70%;height:80%;">
									</div>
								<div class="flip-box-back">
									<h1 align="middle">ABOUT USER</h1>
									<span> 
										All users can browse this page.
										<br>
										This page is all about the logged in users personal information.
										<br>
										Tasks, that can be done on this page-
										<ul>
											<li>
												Settings: For changing password
											</li>
											<li>
												Messages.
												<ul>
													<li>
														User can view the list of seen and unseen inboxs(SEPARATED LIST).
														<br>User can also view his/her sent messages list.
													</li>
													<li>
														Send Message: User can send message to other valid users.
														<br>Message can contain attachments like DOCCUMENTS, IMAGE, SOFTWARES etc.
														<br>N.B. Attachments size should not be more tha 10MB.
													</li>
													<li>
														Read Inbox: User can read the messages that are sent for the user by other users.
														<br>Also the user can download if there is any attachment.
													</li>
													<li>
														Read Sent Messages: User can read the messages that the user sent other users previously..
													</li>
												</ul>
											</li> 
										</ul>
									</span>
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