<!DOCTYPE html>
<html>
	<head>
		<title>Strings</title>
	</head>
	<?php
		$lang = "Java";
        echo "I am learning {$lang}Script<br>";

        function isEven($num){
            if($num % 2 == 0){
                return true;
            } else{
                return false;
            }
        }

        $num = 78;
        if(isEven($num)){
            echo "{$num} is Even!";
        } else{
            echo "{$num} is Odd!";
        }
	?>
</html>