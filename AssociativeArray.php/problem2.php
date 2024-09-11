<!-- $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white -->

<?php 
$color = array(4 => 'white', 6 => 'green', 11=> 'red');

// Output the value of the first element in the array using reset()
echo reset($color);
?>