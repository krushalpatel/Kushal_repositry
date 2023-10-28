<!-- 19. Sort the cities in alphabetical order.
20. Reverse the order of the cities in the array from question 19. -->

<?php  
    
    $cities = ["Ahmedabad", "Vadodara", "Surat", "Gandhinagar"];
    
    print_r($cities);
    echo "<br><br>";
    
    // 19. Sort the cities in alphabetical order
    sort($cities);
    
    echo "Alphabetical Order :<br>";
    print_r($cities);
    echo "<br><br>";
    
    
    // 20 - Reverse the order of the cities in the array
    rsort($cities);
    
    echo "20 - Reverse Alphabetical Order :<br>";
    print_r($cities);
    
?> 