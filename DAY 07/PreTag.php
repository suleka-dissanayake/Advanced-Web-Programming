<!DOCTYPE html>
<html>
	<head>
		<title>Strings</title>
	</head>
    <pre>
    <?php
    $name = "Suleka";   
	    echo <<<_NUMBERS
        1
            2
                3
                    4
                        5
                            6 $name
        _NUMBERS;
	?>
    </pre>	
</html>