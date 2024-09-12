<!-- Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output :
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED ) -->

<?php 
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$toLower = array_map('strtolower', $Color);
print_r($toLower);

$toUpper = array_map('strtoupper', $Color);
print_r($toUpper);

?>