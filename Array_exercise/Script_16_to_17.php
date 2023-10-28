<!-- 16. Create an indexed array of cities you want to visit in the future.
17. Add a new city to your travel list from question 16. -->

<?php
    // 16. Create an indexed array of cities
    $cities = ["Ahmedabad", "Vadodara", "Surat", "Morbi"];

    print_r($cities);
    echo "<br><br>";

    //17. Add a new city 
    array_push($cities,"Rajkot");

    
    echo "Add a New city in array :<br>";
    print_r($cities);

?>
