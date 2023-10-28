<!--12. Create an associative array representing a person's details, including name, age, and email.
13. Access and display the person's age from the associative array created in question 12.
14. Remove the email element from the associative array and display the updated array. -->

<?php

    // 12. Create an associative array with person's details
    $person = [
        "name" => "Kushal",
        "age" => 21,
        "email" => "jaymataji@gmail.com",
    ];
    // print orignal array
    print_r($person);
    echo "<br><br>";
    
    // 13. Access and display the person's age
    
    echo " Access and display the person's age : " . $person["age"] . "<br><br>";
    
    // 14. Remove the email element from the associative array
    
    unset($person["email"]);
    
    // Display the updated array
    
    echo "Updated Array :<br>";
    print_r($person);
?>