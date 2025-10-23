<!DOCTYPE html>
<html>
	<head>
		<title>Variables</title>
	</head>
	<?php
		$cars = ["Toyota", "Honda", "Suzuki"];
        echo $cars[0];
	?>
    <br>

    <?php
        $students = [
            ["Kavi", 22],
            ["Nila", 21]
        ];
        echo $students[0][0];
    ?>
    <br>

    <?php
        $stud = ["Name" => "Ram", "Age" => 22, "City" => "Colombo"];
        echo $stud["Name"];
    ?>
</html>