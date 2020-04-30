<?php
include '../Page Controllers/advancedEmployeeSearchController.php';
?>

<!DOCTYPE html>
<html>
<head>
<script src="s.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/employeeList.css">
</head>
<body>
<form method="POST" action="">
<input type="text" class="srchbynametf" id="srchEmpByNameTF" placeholder="Load Table by Employee Name" onclick="m2()" onkeyup="srch()">Try it
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