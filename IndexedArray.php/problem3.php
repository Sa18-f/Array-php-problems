<!-- Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6  -->
<!-- List of five lowest temperatures : 60, 62, 63, 63, 64,  -->
<!-- List of five highest temperatures : 76, 78, 79, 81, 85, -->

<?php 
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);
echo "The average temperature is:" . round($average, 2) . "<br>";

sort($temperatures);

$lowestNumbers = array_slice($temperatures, 0, 5);
echo "The five lowest number of this temperatures arrays are:" . implode(" , ", $lowestNumbers) . "<br>";

$highestNumbers = array_slice($temperatures, -5);
echo "The five highest number of this temperatures arrays are:" . implode(" , ", $highestNumbers) . "<br>";

?>

