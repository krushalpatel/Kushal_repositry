<!-- Create a PHP script that extracts a specific column from a multidimensional array using
the array_column() function. -->

<?php

    $student = array(array('id' => 101, 'name' => 'Kushal', 'age' => 21 ),
                     array('id' => 201, 'name' => 'Abhay', 'age' => 21 ),
                     array('id' => 301, 'name' => 'Uday', 'age' => 20 ),
                     array('id' => 401, 'name' => 'Kishan', 'age' => 22 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>