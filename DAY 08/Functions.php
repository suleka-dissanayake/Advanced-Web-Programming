<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        <?php
            function greet(){
                echo "Hello, Welcome to PHP";
            }
            greet();
        ?>
        <br>

        <?php
            function add($a, $b){
                return $a + $b;
            }
            echo "Summation of 5 and 3 is " . add(5, 3);
        ?>
    </body>
</html>