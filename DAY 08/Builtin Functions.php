<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        <?php
            $numbers = [10, 20, 30, 40];
            $colors = ["Red","Green","Blue","Red"];

            // Output the count of elements in the numbers array
            echo count($numbers);
            echo "<br>";

            echo "Total numbers: " . count($numbers) . "<br>";

            // Output the sum of all elements in the numbers array
            echo "Sum of all numbers " . array_sum($numbers) ."<br>";

            // Add "Yellow" to the end of the colors array
            array_push($colors,"Yellow");
            echo "Colors after push: ";
            print_r($colors);
            echo "<br>";

            // Remove the last element from the colors array
            array_pop($colors);
            echo "Colors after pop: ";
            print_r($colors);
            echo "<br>";

            // Remove duplicates in colors array
            $uniqueColors = array_unique($colors);
            echo "Unique Colors: ";
            print_r($uniqueColors);
            echo "<br>";

            // Sort array ascending
            sort($numbers);
            echo "Numbers in ascending order: ";
            print_r($numbers);
            echo "<br>";

            // Reverse an array
            $reversedColors = array_reverse($colors);
            echo "Colors Reversed: ";
            print_r($reversedColors);
            echo "<br>";

            // Get all keys
            $students = ["Name" => "Kavi", "Age" => 22, "City" => "Colombo"];
            echo "Keys of student array: ";
            print_r(array_keys($students));
            echo "<br>";

            // Get all values
            echo "Values of student array: ";
            print_r(array_keys($students));
            echo "<br>";

            // Search key by values
            $key = array_search(22, $students);
            echo "The key for 22 is $key<br>";
            echo "<br>";

            // String function example
            $text = "Hello World";
            echo "Uppercase: " . strtoupper($text) ."<br>";
            echo "Lowercase " . strtolower($text) ."<br>";
            echo "Length of text: " . strlen($text) ."<br>";
            echo "Replace word with PHP: " . str_replace("World","PHP", $text) ."<br>";
        ?>
    </body>
</html>