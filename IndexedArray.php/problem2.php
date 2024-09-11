<!-- Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5 -->


<?php 
$array = array(1,2,3,4,5,);
echo "Original array : <br>";
print_r($array);

// Position where you want to insert the new item
$position = 3;

// Element to insert
$element = '$';

// Inserting the element at the specified position
array_splice($array, $position, 0, $element);

echo "<br>After inserting '$' the array is : <br>";
print_r($array);



?>