<!-- Create variables for the day, month, and year of your birthdate. Display your birthdate in
the format "DD/MM/YYYY" using the echo statement. -->

<?php
$day = 03;   
$month = 09;  
$year = 2002; 

$birthdate = sprintf("%02d/%02d/%04d", $day, $month, $year);

echo "My birthdate is: $birthdate";
?>