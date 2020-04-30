<?php
include '../Page Controllers/advancedEmployeeSearchController.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Advanced Employee Search </title>
		<script src="../Page Controllers/javascript/advancedEmployeeSearchJS.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/advancedEmployeeSearch.css">
	</head>
	<body>
		<form method="POST" action="">
			<div class='floatLeftDown'>
				<table style="width:calc(100%);">
					<tr>
						<td class="td1">
							<input type="text" class="tf" id="srchEmpByNameTF" placeholder="Sort Table by Employee Name" onkeyup="srch()">
						</td>
					</tr>
					
					<tr>	
						<td>
							<input type="text" class="tf" id="srchEmpByDesignTF" placeholder="Sort Table by Employee Dsignation" onkeyup="srch()">
						</td>
					</tr>
				</table>
			</div>
			<div class="floatRightTop">
				<div class="scrollit">
					<table id="empTable" name="empTable">
						<thead>
							<tr>
								<th>ID.</th>
								<th>Name</th>
								<th>Designation ID.</th>
								<th>Salary</th>
								<th>Mobile No</th>
								<th>Email</th>
								<th>Join Date</th>
								<th>Added By</th>	
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
		</form>
	</body>
</html>