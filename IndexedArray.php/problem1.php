<!-- $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :


Output :
white, green, red,
.green
.red
.white -->

<?php 
$color = array('white', 'green', 'red');

foreach($color as $x){
    echo "$x, ";
}

sort($color);

echo "<ul>";

foreach($color as $y){
    echo "<li>$y</li>";
}
echo "</ul>";


?>