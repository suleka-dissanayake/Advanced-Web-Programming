<!DOCTYPE html>
<html>
	<head>
		<title>Loops</title>
	</head>
	<?php
		$count = 1;
        while ($count <= 3) {
            echo "Count is $count <br>";
            $count++;
        }
	?>
    <br>

    <?php
        $i = 1;
        do {
            echo $i;
            $i++;
        } while ($i < 6);
    ?>
    <br>

    <?php
        $fruits = ["Apple", "Banana", "Mango"];
        foreach ($fruits as $fruit) {
            echo "$fruit<br>";
        }
    ?>
</html>