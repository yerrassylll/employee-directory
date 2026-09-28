<?php include("php/data.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employees List</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

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

	<?php foreach ($employees as $item) { ?>
        
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

</body>
</html>