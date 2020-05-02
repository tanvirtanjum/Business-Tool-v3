<?php
include '../Page Controllers/chatController.php';
?>

<html>
	<head>
		<title> CHAT BOX </title>
		<script src="../Page Controllers/javascript/chatJS.js"></script>
		
		<link rel="stylesheet" type="text/css" href="CSS/chatBox.css">
	</head>
	
	<body>
		<form action="" method="post" autocomplete="off">
			<div class="container">
				<div class="floatLeft">
					<div class="card">
						<div align="middle">
							<table style="width:calc(80%);">
								<tr align="middle"> 
									<td class="td1"> <label> To: </label> </td>
									<td class="td2"> <input type = "text" name="toTB" class="tf" value="<?php echo $toTB; ?>" placeholder="Valid User ID"> </td> 
								</tr>
								
								<tr align="middle">
									<td class="td1"> <label> Subject: </label> </td>
									<td class="td2"> <input type = "text" name="SsubTB" class="tf" value="<?php echo $SsubTB; ?>" placeholder="Write Subject"> </td>
								<td>
							</table>
						</div>
						
						<textarea id="sendnoteTA" name="sendnoteTA" class="noteTA" placeholder="Write Here.."><?php echo $sendnoteTA; ?></textarea>
						
						<br> <br> 
							
						<div align="middle">
							<button name="sendBTN" class="sendbtn"> Send </button>
						</div>
					</div>
				</div>
				
				<div class="floatLeftTwo">
					<div class="cardTwo">
						<div align="middle">
							<table style="width:calc(80%);">
								<tr> 
									<td class="td1"> <label> From: </label> </td>
									<td class="td2"> 
										<input type = "text" name="fromTB" id="fromTB" class="tf" value="<?php echo $fromTB; ?>" placeholder="Auto Generated" readonly> 
										<input type = "hidden" id="dateTB" value="<?php echo $dateTB; ?>" readonly> 
									</td> 
								</tr>
								
								<tr>
									<td class="td1"> <label> Subject: </label> </td>
									<td class="td2"> <input type = "text" name="RsubTB" class="tf" value="<?php echo $RsubTB; ?>" placeholder="Auto Generated" readonly> </td>
								<td>
							</table>
						</div>
						
						<textarea id="receivenoteTA" name="receivenoteTA" class="noteTA" readonly placeholder="Auto Generated"><?php echo $receivenoteTA; ?></textarea>
						
						<br> <br> 
							
						<div align="middle">
							<button name="sendBTN" class="printbtn" onclick="return saveFile()"> Print </button>
						</div>
					</div>
				</div>
				
				<div class="floatRight">
					<div align="middle">
						<input type="number" name="loadTB" class="tf2" value="<?php echo $loadTB; ?>" placeholder="Message ID">
						<button name="openInboxBTN" class="openbtn"> Open </button>
					</div>
					<div class="scrollit">
						<table id="unseenTable" style="width:calc(100%);">
							<caption>Unseen Messages</caption>
							<thead>
								<th>ID</th>
								<th>Sender</th>
								<th>Subject</th>
								<th>Date</th>
							</thead>
							
							<tbody>
							<?php
							showUnseenTable($uid);
							?>
							</tbody>
						</table>
					</div>
					
					<div class="scrollit">
						<table id="seenTable" style="width:calc(100%);">
							<caption>Seen Messages</caption>
							<thead>
								<th>ID</th>
								<th>Sender</th>
								<th>Subject</th>
								<th>Date</th>
							</thead>
							
							<tbody>
							<?php
							showSeenTable($uid);
							?>
							</tbody>
						</table>
					</div>
					
					<div align="middle">
						<input type="number" name="loadSentTB" class="tf2" value=" <?php echo $loadSentTB; ?>" placeholder="Message ID">
						<button name="openSBTN" class="openbtn"> Open </button>
					</div>
					<div class="scrollit">
						<table id="sentTable" style="width:calc(100%);">
							<caption>Sent Messages</caption>
							<thead>
								<th>ID</th>
								<th>Reciever</th>
								<th>Subject</th>
								<th>Date</th>
							</thead>
							
							<tbody>
							<?php
							showSentTable($uid);
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>