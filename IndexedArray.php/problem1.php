<!-- $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :


Output :
white, green, red,
.green
.red
.white -->

<?php 
$color = array('white', 'green', 'red');
// echo them with a comma separator
foreach($color as $x){
    echo "$x, ";
}

// sort alphabetically
sort($color);

// Echo the start of an unordered list
echo "<ul>";

// Iterate through each color in the sorted array and echo them as list items
foreach($color as $y){
    echo "<li>$y</li>";
}

// Echo the start of an unordered list
echo "</ul>";


?>