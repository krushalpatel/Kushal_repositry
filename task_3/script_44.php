<!-- Write a PHP script to extract the values from an associative array using the array_values()
function. -->

<?php

$student = array(
    "first_name" => "Kushal",
    "last_name" => "Masot",
    "age" => 21,
    "email" => "kushalmsot@example.com"
);

$values = array_values($student);

echo "Values from the associative array:<br>";

print_r($values);

?>