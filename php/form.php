<?php 

session_start();

if (isset($_POST['employeesSubmit'])) {

	//$employeeID = $_POST['employeesId'];
	//$employeeName = $_POST['employeesName'];
	//$employeeLastName = $_POST['employeesLastName'];
	//$employeeAge = $_POST['employeesAge'];
	//$employeeMarried = $_POST['employeesMarried'];
	//$employeeSalary = $_POST['employeesSalary'];
	//$employeePosition = $_POST['employeesPosition'];
	//$employeeWorkExperience = $_POST['employeesWorkExperience'];

	if ($_POST['employeesMarriedYes'] == "employeesMarriedYes") {
		$isMarried = true;
	} else {
		$isMarried = false;
	}

	$new_employee = [
		"id" => $_POST['employeesId'],
		"name" => $_POST['employeesName'],
		"last_Name" => $_POST['employeesLastName'],
		"age" => $_POST['employeesAge'],
		"married" => $_POST['employeesMarried'],
		"salary" => $_POST['employeesSalary'],
		"position" => $_POST['employeesPosition'],
		"work_experience" => $_POST['employeesWorkExperience']
 	];

 	//array_push($new_employee, $_SESSION['employees_list']);

 	$_SESSION['employees_list'][] = $new_employee;

 	header("Location: ../employees.php");

	exit();
}


?>
