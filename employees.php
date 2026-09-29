<?php 

	session_start();
	
	include("php/data.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employees List</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php 

	if (empty($_SESSION['employees_list'])) {
		
		$_SESSION['employees_list'] = $employees;

	}

?>

<table class="employeesList">
	
	<tr>
		<th>№</th>
		<th>Name</th>
		<th>Last name</th>
		<th>Age</th>
		<th>Married</th>
		<th>Salary</th>
		<th>Position</th>
		<th>Work experience</th>
	</tr>	

	<?php foreach ($_SESSION['employees_list'] as $item) { ?>
        
    <tr>
        <td><?php echo $item["id"]; ?></td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo $item["last_Name"]; ?></td>
        <td><?php echo $item["age"]; ?></td>
        <td><?php

            if ($item["married"] === true) {
            	echo "yes";
            } else {
            	echo "no";
            }

        ?></td>
        <td><?php echo $item["salary"]; ?></td>
        <td><?php echo $item["position"]; ?></td>
        <td><?php echo $item["work_experience"]; ?></td>
    </tr>
	<?php } ?>

</table>


<div class="blockForm">
	<form action="php/form.php" method="POST" class="employeesForm">

		<input type="text" name="employeesId" placeholder="type ID..." class="employeesInput">


		<input type="text" name="employeesName" placeholder="type name..." class="employeesInput">

		<input type="text" name="employeesLastName" placeholder="type lastname..." class="employeesInput">

		<input type="text" name="employeesAge" placeholder="type age..." maxlength="3" class="employeesInput">

		<label for="selectEmployeesMarried" class="employeesLabel">Married:</label>

		<select name="employeesMarried" id="selectEmployeesMarried" class="employeesSelect">
			<option value="employeesMarriedYes">Yes</option>
			<option value="employeesMarriedNo">No</option>
		</select>

		<input type="text" name="employeesSalary" placeholder="type salary..." class="employeesInput">

		<input type="text" name="employeesPosition" placeholder="type position..." class="employeesInput">

		<input type="text" name="employeesWorkExperience" placeholder="type work experience..." class="employeesInput" style="width:150px;">

		<input type="submit" name="employeesSubmit" value="Добавить" class="employeesInput employeesBtnSubmit">
	</form>
</div>

</body>
</html>